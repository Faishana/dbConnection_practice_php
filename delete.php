<?php
    include 'dbConnection.php';

    $sql = "DELETE FROM selfDetails WHERE name='SARAF'";

    if($connection->query($sql) === true){
        echo "Data deleted successfully!";
    }
    else{
        die("Data not deleted!".$connection->connect_error);
    }
?>