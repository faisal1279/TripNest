<?php
require('common/links.php');
require('common/header.php');
require('admin/inc/connection.php');   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightNest - Rooms</title>
    <?php require('common/links.php'); ?>
</head>

<body class="bg-light">

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">

            <!-- LEFT FILTER SECTION (STATIC as your design) -->
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>

                        <button class="navbar-toggler shadow-none" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3">CHECK AVAILABILITY</h5>
                                <label>Check-in</label>
                                <input type="date" class="form-control mb-3">

                                <label>Check-out</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3">FACILITIES</h5>
                                <div><input type="checkbox" class="form-check-input me-1"> Wifi</div>
                                <div><input type="checkbox" class="form-check-input me-1"> AC</div>
                                <div><input type="checkbox" class="form-check-input me-1"> TV</div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- RIGHT ROOM LIST (DYNAMIC FROM DATABASE) -->
            <div class="col-lg-9 col-md-12 px-4">

                <?php
                $rooms = mysqli_query($conn, "SELECT * FROM room_details ORDER BY id DESC");

                while ($row = mysqli_fetch_assoc($rooms)) :
                ?>

                <div class="card mb-4 border-0 shadow overflow-hidden">
                    <div class=" row g-0 align-items-center">

                        <!-- Room Image -->

                        <?php 
                                $img_path = 'admin/' . $row['main_image']; 
                        ?>

                        <div class="col-md-5 h-100">
                            <img src="<?php echo $img_path; ?>" class="img-fluid" id="room-img">
                        </div>

                        <!-- Room Info -->
                        <div class="col-md-5 px-3">
                            <h5 class="mb-3"><?php echo $row['room_type']; ?></h5>
                            <h6 class="mb-4">Tk <?php echo $row['price']; ?> per night</h6>


                            <!-- Static Facilities -->
                            <div class="facilities mb-3">
                                <h6>Facilities</h6>
                                <span class="badge text-dark">Wifi</span>
                                <span class="badge text-dark">Television</span>
                                <span class="badge text-dark">AC</span>
                            </div>

                            <!-- Static Guests -->
                            <div>
                                <h6>Guests</h6>
                                <span class="badge text-dark">2 Adults</span>
                                <span class="badge text-dark">1 Child</span>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="col-md-2 pe-2 text-center">
                            <h6 class="mb-4">Tk<?php echo $row['price']; ?></h6>

                            <a href="book-now.php?id=<?php echo $row['id']; ?>"
                                class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">
                                Book now
                            </a>

                            <a href="room_details.php?id=<?php echo $row['id']; ?>"
                                class="btn btn-sm w-100 btn-outline-dark shadow-none">
                                More details
                            </a>

                        </div>

                    </div>
                </div>

                <?php endwhile; ?>

            </div>

        </div>
    </div>

    <?php require('common/footer.php'); ?>

</body>

</html>
