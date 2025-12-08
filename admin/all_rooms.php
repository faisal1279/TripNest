<?php
include './inc/connection.php';


$sql = "SELECT * FROM room_details ORDER BY id DESC";
$rooms = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>All Rooms</title>
    <?php require('inc/links.php');?>

</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h2 class="mb-4 text-center">All Rooms</h2>
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Main Image</th>
                            <th>Room No</th>
                            <th>Type</th>
                            <th>Size</th>
                            <th>Bed</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($rooms)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>

                            <td>
                                <img src="<?php echo $row['main_image']; ?>" width="80" height="60"
                                    style="object-fit: cover;">
                            </td>

                            <td><?php echo $row['room_number']; ?></td>
                            <td><?php echo $row['room_type']; ?></td>
                            <td><?php echo $row['room_size']; ?></td>
                            <td><?php echo $row['bed_type']; ?></td>

                            <td>$<?php echo number_format($row['price'], 2); ?></td>

                            <td>
                                <?php 
                                        $status = strtolower(trim($row['status'])); 
                                        if($status == "available") {
                                            echo '<span class="badge bg-success">Available</span>';
                                        } 
                                        elseif($status == "booked") {
                                            echo '<span class="badge bg-danger">Booked</span>';
                                        }
                                        elseif($status == "maintenance") {
                                            echo '<span class="badge bg-warning text-dark">Maintenance</span>';
                                        }
                                        else {
                                            echo '<span class="badge bg-secondary">Unknown</span>';
                                        }
                                 ?>
                            </td>

                            <td><?php echo substr($row['description'], 0, 40); ?>...</td>

                            <td>
                                <div class="d-inline-flex flex-column" style="min-width: 120px;">

                                    <div class="d-flex gap-2 mb-2">
                                        <a href="edit_room.php?id=<?php echo $row['id']; ?>"
                                            class="btn btn-warning btn-sm flex-fill">Edit</a>

                                        <a href="delete_room.php?id=<?php echo $row['id']; ?>"
                                            onclick="return confirm('Delete this room?')"
                                            class="btn btn-danger btn-sm flex-fill">Delete</a>
                                    </div>

                                    <a href="add_images.php?room_id=<?php echo $row['id']; ?>"
                                        class="btn btn-info btn-sm flex-fill">Upload Images</a>

                                </div>
                            </td>


                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>