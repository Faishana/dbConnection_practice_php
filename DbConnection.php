<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school';

//CREATE THE COONECTION
$connection = new mysqli($server, $user, $password, $database);

//CHECK THE CONNECTION
if($connection->connect_error){
    die("Connection failed..!".$connection->connect_error);
}
else{
    echo ("Connection successful..!"."<br>");
}

?>