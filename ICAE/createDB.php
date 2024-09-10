<?php
    include 'serverConnection.php';

    $sql = "CREATE DATABASE school";

    if($connection->query($sql) === true){
        echo "Database created Successfully!"."<br>";
    }
    else{
        die("Error in database creation".$connection->connect_error);
    }
    $connection->close();
?>