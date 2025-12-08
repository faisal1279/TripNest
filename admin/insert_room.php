<?php
include './inc/connection.php';

// image upload
$main_img = $_FILES['main_image']['name'];
$tmp = $_FILES['main_image']['tmp_name'];

// upload folder
$folder = "uploads/";

// যদি uploads folder না থাকে বানিয়ে নাও
if(!is_dir($folder)){
    mkdir($folder);
}

$final_path = $folder . $main_img;
move_uploaded_file($tmp, $final_path);

// form data
$room_number = $_POST['room_number'];
$room_type = $_POST['room_type'];
$room_size = $_POST['room_size'];
$bed_type = $_POST['bed_type'];
$price = $_POST['price'];
$status = $_POST['status'];
$description = $_POST['description'];

// SQL insert
$sql = "INSERT INTO room_details(room_number, room_type, room_size, bed_type, price, status, description, main_image)
        VALUES('$room_number', '$room_type', '$room_size', '$bed_type', '$price', '$status', '$description', '$final_path')";

$run = mysqli_query($conn, $sql);

if($run){
    header("Location: all_rooms.php");
} else {
    echo "Failed to Insert!";
}
?>