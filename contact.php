<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightNest - Contact</title>

    <?php require('common/links.php'); ?>
</head>

<body class="bg-light">

    <!-- Header -->
    <?php require('common/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>

        <div class="h-line bg-dark"></div>

        <p class="text-center mt-3">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
    </div>

    <div class="container">
        <div class="row g-4">

            <!-- LEFT SIDE (MAP + ADDRESS) -->
            <div class="col-lg-6 col-md-6">
                <div class="bg-white rounded shadow p-4">
                    <h5 class="mb-3">Address</h5>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6988377782786!2d90.44456977718396!3d23.79373637864091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c775164bf631%3A0x97f48a5be913a9fc!2sDhaka%20International%20University!5e0!3m2!1sen!2sbd!4v1764261262608!5m2!1sen!2sbd"
                        class="w-100 rounded mb-3" height="320" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>

                    <a href="https://maps.app.goo.gl/fyfT3712gFradvNo6"
                        class="d-inline-block text-decoration-none text-dark mb-3" target="_blank">
                        <i class="bi bi-geo-alt-fill"></i>Brightnest,Dhaka B
                    </a>
                    <h5>Call us</h5>
                    <a href="tel: +088-01608949908" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>
                        +088-01608949908</a>
                    <a href="tel: +088-01608949908" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>
                        +088-01608949908</a>

                    <h5 class="mt-4">Email</h5>
                    <a class="d-inline-block text-decoration-none text-dark" href="mailto: faisal1279@gmail.com"><i
                            class="bi bi-envelope"></i> faisal1279@gmail.com</a>

                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>

            <!-- RIGHT SIDE (WIFI FEATURE) -->
            <div class="col-lg-6 col-md-6">
                <div class="bg-white rounded shadow p-4 ">
                    <form action="">
                        <h5>Send a message</h5>
                        <div class="mt-3"> <label class="form-label">Name</label> <input type="text"
                                class="form-control shadow-none"> </div>
                        <div class="mt-3"> <label class="form-label">Email</label> <input type="email"
                                class="form-control shadow-none"> </div>
                        <div class="mt-3"> <label class="form-label">Subject</label> <input type="text"
                                class="form-control shadow-none"> </div>
                        <div class="mt-3"> <label class="form-label">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                        </div>
                        <button type="submit" class="btn custom-bg mt-3 text-white shadow-none">Send</button>
                    </form>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php require('common/footer.php'); ?>

</body>

</html>