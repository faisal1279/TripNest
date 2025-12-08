<?php
$conn = mysqli_connect("localhost:3307", "root", "", "hootel_bookin");

if(!$conn){
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>