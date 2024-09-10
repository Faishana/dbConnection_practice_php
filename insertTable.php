<?php

include 'DbConnection.php';

$sql = "INSERT INTO `student` (`IndexNo`, `Name`, `Address`) VALUES
('001', 'Akshana', 'Negama'),
('002', 'Fainas', 'Kekirawa'),
('003', 'Haroos', 'Kuchchaveli')";

if($connection->query($sql)==true){
    echo "Data inserted..!";
}
else{
    die("Data not inserted..!");
}

$connection->close();
?>