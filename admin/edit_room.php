<?php
include './inc/connection.php';


$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM room_details WHERE id = $id");
$room = mysqli_fetch_assoc($data);

?>
<!doctype html>
<html lang="bn">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Room</title>

    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Edit Room</h3>

                        <form action="update_room.php" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $room['id']; ?>">

                            <div class="row g-3">

                                <div class="col-md-4">
                                    <label class="form-label">Room Number</label>
                                    <input name="room_number" type="text" value="<?php echo $room['room_number']; ?>"
                                        class="form-control" maxlength="20" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Room Type</label>
                                    <select name="room_type" class="form-select" required>
                                        <option value="Standard"
                                            <?php if($room['room_type']=="Standard") echo "selected" ?>>Standard
                                        </option>
                                        <option value="Deluxe"
                                            <?php if($room['room_type']=="Deluxe") echo "selected" ?>>Deluxe</option>
                                        <option value="Suite" <?php if($room['room_type']=="Suite") echo "selected" ?>>
                                            Suite</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Room Size</label>
                                    <input name="room_size" type="text" class="form-control"
                                        value="<?= $room['room_size']; ?>" maxlength="50">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Bed Type</label>
                                    <input name="bed_type" type="text" class="form-control"
                                        value="<?= $room['bed_type']; ?>" maxlength="50">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Price (BDT)</label>
                                    <input name="price" type="number" step="0.01" value="<?= $room['price']; ?>"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="Available"
                                            <?php if($room['status']=="Available") echo "selected" ?>>Available</option>
                                        <option value="Booked" <?php if($room['status']=="Booked") echo "selected" ?>>
                                            Booked</option>
                                        <option value="Maintenance"
                                            <?php if($room['status']=="Maintenance") echo "selected" ?>>Maintenance
                                        </option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="4"
                                        maxlength="2000"><?= $room['description']; ?></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Current Image</label><br>
                                    <img src="<?= $room['main_image']; ?>" width="180" height="120"
                                        style="object-fit:cover;border:1px solid #ccc;border-radius:4px;">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Change Image (optional)</label>
                                    <input type="file" name="main_image" class="form-control" accept="image/*">
                                    <div class="form-text">Leave empty to keep current image</div>
                                </div>

                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Update Room</button>
                                <a href="all_rooms.php" class="btn btn-outline-secondary ms-2">Cancel</a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>