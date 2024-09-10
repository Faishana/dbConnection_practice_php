<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';

    $connection = new mysqli($server, $user, $password);

    if($connection->connect_error){
        die("Error in connection".$connection->connect_error);
    }
    else{
        echo "Connection successfull!"."<br>";
    }
    $connection->close();
?>