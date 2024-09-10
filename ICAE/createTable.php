<?php
    include 'dbConnection.php';

    $sql = 'CREATE TABLE student(
        NAME VARCHAR(30),
        REGNO INT PRIMARY KEY,
        COURSE VARCHAR(50)
    )';

    if($connection->query($sql) === true){
        echo "Table created succesfully!";
        echo "<br>";
    }
    else{
        die("Error in table creation!".$connection->connect_error);
    }
    
    //$connection->close();
?>
