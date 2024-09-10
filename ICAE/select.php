<?php
    include 'dbConnection.php';

    $sql = "SELECT * FROM student";

    $result = $connection->query($sql);

    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
            echo "NAME : ".$rows["NAME"]."<br>".
                "REG NUMBER : ".$rows["REGNO"]."<br>".
                "COURSE : ".$rows["COURSE"]."<br><br>";
        }
    }
    else{
        echo "No data available!";
    }
?>