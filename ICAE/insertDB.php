<?php
    include 'dbConnection.php';

    $sql = "INSERT INTO student(`NAME`, `REGNO`, `COURSE`) VALUES
        ('AHLAF', 001, 'ICT'),
        ('SARAF', 002, 'PM'),
        ('FAINAS', 003, 'BS')
    ";

    if($connection->query($sql) === true){
        echo "Value inserted!";
    }
    else{
        die("Error in inserting data!".$connection->connect_error);
    }
?>