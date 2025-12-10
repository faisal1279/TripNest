<?php
require('common/links.php');
require('common/header.php');
require('admin/inc/connection.php');  


$room_id = $_GET['id'] ?? 0;

// get room details
$room_query = "SELECT * FROM room_details WHERE id=$room_id";
$room_res = mysqli_query($conn, $room_query);
$room = mysqli_fetch_assoc($room_res);


$images = [];
$img_res = mysqli_query($conn, "SELECT images_path FROM room_images WHERE room_id=$room_id");
while($img = mysqli_fetch_assoc($img_res)) {
    $images[] = $img['images_path'];
}

//  images no found use main image
if(count($images) == 0 && !empty($room['main_image'])) {
    $images[] = $room['main_image'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $room['room_type'] ?> - Room Details</title>
    <?php require('common/links.php'); ?>

    <style>
    .main-img {
        width: 100%;
        height: 380px;
        object-fit: cover;
        border-radius: 10px;
    }

    .thumb-img {
        width: 80px;
        height: 60px;
        object-fit: cover;
        cursor: pointer;
        border-radius: 5px;
    }
    </style>

</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row g-4">

            <!-- IMAGE SECTION -->
            <div class="col-lg-6">
                <img id="mainImage" src="admin/<?= $images[0] ?>" class="main-img mb-3">

                <div class="d-flex gap-2">
                    <?php foreach($images as $img): ?>
                    <img src="admin/<?= $img ?>" class="thumb-img" onclick="changeImage(this)">
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- DETAILS SECTION -->
            <div class="col-lg-6">
                <h2 class="fw-bold">
                    <?= $room['room_type'] ?> - Room <?= $room['room_number'] ?>
                </h2>

                <p>
                    <?php
                        $status = strtolower(trim($room['status'])); 
                        if ($status == "available") {
                            echo "<span class='badge bg-success'>Available</span>";
                        } elseif ($status == "booked") {
                            echo "<span class='badge bg-danger'>Booked</span>";
                        } elseif ($status == "maintenance") {
                            echo "<span class='badge bg-warning text-dark'>Maintenance</span>";
                        } else {
                            echo "<span class='badge bg-secondary'>Unknown</span>";
                        }
                    ?>
                </p>

                <h4 class="mb-3">Tk<?= number_format($room['price'],2) ?> / night</h4>

                <p><strong>Room Type:</strong> <?= $room['room_type'] ?></p>
                <p><strong>Room Size:</strong> <?= $room['room_size'] ?></p>
                <p><strong>Bed Type:</strong> <?= $room['bed_type'] ?></p>

                <p class="text-muted"><?= $room['description'] ?></p>

                <a href="booking_form.php?id=<?= $row['id']; ?>" class=" btn btn-sm text-white custom-bg">Book Now</a>
            </div>

        </div>
    </div>

    <?php require('common/footer.php'); ?>

    <script>
    function changeImage(el) {
        document.getElementById('mainImage').src = el.src;
    }
    </script>

</body>

</html>
