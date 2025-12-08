<?php
include './inc/connection.php';

$room_id = $_GET['room_id']; // room id পেতে হবে URL থেকে
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Room Images</title>
    <?php require('inc/links.php');?>

</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h2 class="mb-4">Upload Images for Room ID: <?php echo $room_id; ?></h2>

                <form action="insert_room_images.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">

                    <div class="mb-3">
                        <label class="form-label">Select Images (Multiple Allowed)</label>
                        <input type="file" name="room_images[]" multiple class="form-control" accept="image/*" required>
                        <div class="form-text">JPEG/PNG/GIF — max 2MB each</div>
                    </div>

                    <button type="submit" class="btn btn-primary">Upload Images</button>
                </form>

            </div>
        </div>
    </div>




</body>

</html>