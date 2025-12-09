<?php
require('common/links.php');
require('common/header.php');
require('admin/inc/connection.php');

$room_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Room</title>
    <?php require('common/links.php'); ?>
</head>

<body class="bg-light">

    <div class="container my-5">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form action="room_booking.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title">Book This Room</h5>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Check-in Date</label>
                            <input type="date" name="checkin" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Check-out Date</label>
                            <input type="date" name="checkout" class="form-control shadow-none" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Guests</label>
                            <input type="number" name="guests" class="form-control shadow-none" min="1" required>
                        </div>

                        <!-- Room ID -->
                        <input type="hidden" name="room_id" value="<?= $room_id; ?>">

                    </div>

                    <div class="modal-footer">
                        <a href="rooms.php" class="btn btn-outline-dark shadow-none">Back</a>
                        <button type="submit" class="btn btn-dark shadow-none">Confirm Booking</button>
                    </div>

                </form>

            </div>
        </div>

    </div>

    <?php require('common/footer.php'); ?>

</body>

</html>
