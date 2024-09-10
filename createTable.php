<?php

include 'DbConnection.php';

$sql = "CREATE TABLE student(
    IndexNo INT(4) NOT NULL PRIMARY KEY,
    Name VARCHAR(20) NOT NULL,
    Address VARCHAR(30) NOT NULL
)";

if($connection->query($sql)==true){
    Echo "Table created successful..!";
}
else{
    die("Table is not created..!".$connection->connect_error);
}

$connection->close();

?>