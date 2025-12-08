<?php
include './inc/connection.php';


$id = $_GET['id'];

$sql = "DELETE FROM room_details WHERE id = $id";
$run = mysqli_query($conn, $sql);

if($run){
    header("location:all_rooms.php");
} else {
    echo "Delete Failed!";
}
?>