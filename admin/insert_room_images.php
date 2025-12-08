<?php
include './inc/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $room_id = $_POST['room_id']; // get room id from form

    // upload folder
    $uploadDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // loop through each uploaded image
    foreach ($_FILES['room_images']['name'] as $key => $name) {

        $tmp_name = $_FILES['room_images']['tmp_name'][$key];

        // simple unique name
        $newName = time() . '_' . $name;
        $target = $uploadDir . $newName;

        // move file to uploads folder
        if (move_uploaded_file($tmp_name, $target)) {
            $imgPath = 'uploads/' . $newName;

            // insert into room_images table
            $sql = "INSERT INTO room_images (room_id, images_path) VALUES ('$room_id', '$imgPath')";
            mysqli_query($conn, $sql);
        }
    }

    // redirect to room details page
    header("Location: all_rooms.php");
    exit;
}
?>