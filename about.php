<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <?php require('common/links.php'); ?>

    <style>
    .icon-box {
        border-top: 3px solid #fb5200;
    }
    </style>
</head>

<body class="bg-light">

    <?php require('common/header.php'); ?>

    <!-- ABOUT -->
    <div class="my-5 px-4">
        <h2 class="fw-bold text-center">About Us</h2>
        <div class="h-line bg-dark mb-3"></div>

        <p class="text-center pb-4">
            We provide comfortable rooms, quality service, and a peaceful environment for your perfect stay.
        </p>

        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-lg-6 col-md-6 mb-4">
                    <h4>Who We Are</h4>
                    <p>
                        We are a modern hotel dedicated to offering good hospitality,
                        clean rooms, and a friendly customer experience.
                    </p>
                    <p>
                        Our goal is to ensure every guest feels at home with our simple,
                        comfortable, and well-maintained facilities.
                    </p>
                </div>

                <div class="col-lg-5 col-md-6 mb-4">
                    <img src="" class="w-100 rounded shadow-sm" n alt="">
                </div>

            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row text-center">

            <div class="col-md-3 mb-3">
                <div class="bg-white p-3 shadow-sm rounded icon-box">
                    <h5>100+ Rooms</h5>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="bg-white p-3 shadow-sm rounded icon-box">
                    <h5>200+ Guests Served</h5>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="bg-white p-3 shadow-sm rounded icon-box">
                    <h5>150+ Reviews</h5>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="bg-white p-3 shadow-sm rounded icon-box">
                    <h5>50+ Staff</h5>
                </div>
            </div>

        </div>
    </div>

    <!-- TEAM (Very Simple) -->
    <h4 class="text-center my-5">Our Team</h4>

    <div class="container my-3">
        <div class="row justify-content-center">

            <div class="col-md-3 mb-4 text-center">
                <img height="260px" src="./images/about/faisal.jpg" class="w-90 rounded shadow-sm">
                <p class="mt-2 mb-0"><b>Mohammad Faisal</b></p>
                <p class="text-muted small">Developer</p>
            </div>

            <div class="col-md-3 mb-4 text-center">
                <img height="260px" src="./images/about/anim.jpg" class="w-90 rounded shadow-sm">
                <p class="mt-2 mb-0"><b>Mehrajur Rahman</b></p>
                <p class="text-muted small">Designer</p>
            </div>

            <div class="col-md-3 mb-4 text-center">
                <img height="260px" src="./images/about/jannat.jpg" class="w-90 rounded shadow-sm">
                <p class="mt-2 mb-0"><b>Jannatun Nahar</b></p>
                <p class="text-muted small">Designer</p>
            </div>

        </div>
    </div>

    <?php require('common/footer.php'); ?>

</body>

</html>
