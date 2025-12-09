<?php
include './inc/connection.php';


$id = $_POST['id'];
$room_number = $_POST['room_number'];
$room_type = $_POST['room_type'];
$room_size = $_POST['room_size'];
$bed_type = $_POST['bed_type'];
$price = $_POST['price'];
$status = $_POST['status'];
$description = $_POST['description'];

$sql = "UPDATE room_details SET 
        room_number='$room_number',
        room_type='$room_type',
        room_size='$room_size',
        bed_type='$bed_type',
        price='$price',
        status='$status',
        description='$description'
        WHERE id=$id";

$run = mysqli_query($conn, $sql);

if($run){
    header("Location: all_rooms.php");
} else {
    echo "Update Failed!";
}
?>
