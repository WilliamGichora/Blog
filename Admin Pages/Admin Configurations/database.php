<?php require 'constants.php';

//connecting the database
$conn= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_errno($conn)) {
    die(mysqli_error($conn));
}