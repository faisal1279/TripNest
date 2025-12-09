<?php
include './inc/connection.php';

$room_id = $_GET['room_id'];


$sql = "SELECT * FROM room_details WHERE id='$room_id'";
$roomInfo = mysqli_fetch_assoc(
    mysqli_query($conn, $sql)
);

// Get all bookings for this room
$bookings = mysqli_query(
    $conn,
    "SELECT * FROM bookings WHERE room_id='$room_id' ORDER BY id DESC"
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Room Booking Details</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

                <h3 class="mb-4">
                    Booking Details for Room:
                    <span class="text-primary">
                        <?php echo $roomInfo['room_number']; ?>
                    </span>
                </h3>

                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Phone</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Guests</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        if(mysqli_num_rows($bookings) > 0) {
                            while($b = mysqli_fetch_assoc($bookings)) {
                        ?>
                        <tr>
                            <td><?= $b['id']; ?></td>
                            <td><?= $b['fullname']; ?></td>
                            <td><?= $b['phone']; ?></td>
                            <td><?= $b['checkin']; ?></td>
                            <td><?= $b['checkout']; ?></td>
                            <td><?= $b['guests']; ?></td>
                        </tr>

                        <?php 
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>No bookings found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <?php require('inc/script.php'); ?>

</body>

</html>