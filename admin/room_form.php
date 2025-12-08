<!doctype html>
<html lang="bn">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Room</title>
    <?php require('inc/links.php');?>

</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Add New Room</h3>

                        <!-- form: multipart for file upload -->
                        <form action="insert_room.php" method="post" enctype="multipart/form-data" novalidate>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Room Number</label>
                                    <input name="room_number" type="text" class="form-control" maxlength="20" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Room Type</label>
                                    <select name="room_type" class="form-select" required>
                                        <option value="">Select type</option>
                                        <option>Standard</option>
                                        <option>Deluxe</option>
                                        <option>Suite</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Room Size</label>
                                    <input name="room_size" type="text" class="form-control"
                                        placeholder="e.g., 300 sq ft" maxlength="50">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Bed Type</label>
                                    <input name="bed_type" type="text" class="form-control" maxlength="50"
                                        placeholder="e.g., King">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Price (BDT)</label>
                                    <input name="price" type="number" step="0.01" class="form-control" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select">
                                        <option>Available</option>
                                        <option>Booked</option>
                                        <option>Maintenance</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="4"
                                        maxlength="2000"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Main Image (single)</label>
                                    <input name="main_image" type="file" accept="image/*" class="form-control">
                                    <div class="form-text">JPEG/PNG/GIF — max 2MB recommended</div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Save Room</button>
                                <a href="#" onclick="history.back(); return false;"
                                    class="btn btn-outline-secondary ms-2">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>