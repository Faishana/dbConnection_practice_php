<?php

include 'DbConnection.php';

$sql = "CREATE DATABASE school";

if($connection->query($sql)==true){
    echo "DB create successfully..!";
}
else{
    die("DB couldn't create..!".$connection->connect_error);
}

$connection->close();

?>