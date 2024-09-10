<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "school";

    $connection = new mysqli($server, $user, $password, $database);

    if($connection->connect_error){
        die("Couldn't connect to database");
    }
    else{
        echo "Successfully connect to the database";
    }
  
?>