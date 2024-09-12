<?php
include 'dbConnection.php';

$sql = "UPDATE selfDetails SET name='AHLAF ASKAN' WHERE name='AHLAF'";

if ($connection->query($sql) === true) {
    echo "Data updated!";
} else {
    echo "Error in updation: " . $connection->error; // Show the specific error
}
?>
