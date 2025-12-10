<?php
require('common/links.php');
require('admin/inc/connection.php');   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightNest - Home</title>

    <?php require('common/links.php');?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>
<style>
.availability-form {
    margin-top: -50px;
    z-index: 2;
    position: relative;
}


.special-offers {
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    font-family: "Poppins", sans-serif;
    width: 100%;
}

.offers-tag {
    color: #f8d97a;
    font-weight: 600;
}

/* Offer card layout */
.offer-card {
    position: relative;
    border-radius: 14px;
    overflow: hidden;
    min-height: 250px;
}

.offer-card img {
    width: 100%;
    max-width: 40%;
    object-fit: cover;
}

.offer-content {
    padding: 2rem;
}

.offer-content a {
    color: #f8d97a;
    font-weight: 600;
    text-decoration: none;
}

.discount-badge {
    position: absolute;
    top: 0;
    left: 0;
    background: #f8d97a;
    color: #333;
    font-weight: bold;
    padding: 0.7rem 1rem;
    text-align: center;
    border-bottom-right-radius: 12px;
}

.offer-card.light {
    background: #f9c97d;
    color: #222;
}

.offer-card.dark {
    background: #0e0e0e;
    color: #fff;
}
</style>

<body class="bg-light">

    <?php require('common/header.php'); ?>

    <!--=======================Hero Section=========================-->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="w-100 d-block"
                        src="https://www.orchidhotel.com/static/website/img/hotels/panchgani/homepage_slider/homepage_slider.webp" />
                </div>
                <div class="swiper-slide">
                    <img class="w-100 d-block"
                        src="https://www.hoteldel.com/wp-content/uploads/2021/01/hotel-del-coronado-views-suite-K1TOS1-K1TOJ1-1600x900-1.jpg" />
                </div>
                <div class="swiper-slide">
                    <img class="w-100 d-block"
                        src="https://plus.unsplash.com/premium_photo-1661964071015-d97428970584?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aG90ZWx8ZW58MHx8MHx8fDA%3D" />
                </div>
                <div class="swiper-slide">
                    <img class="w-100 d-block"
                        src="https://plus.unsplash.com/premium_photo-1661964071015-d97428970584?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aG90ZWx8ZW58MHx8MHx8fDA%3D" />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Check availability form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Booking Availability Check</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight:500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mb-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ======================Our Rooms========================================== -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>


    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT * FROM room_details ORDER BY id DESC LIMIT 3";
             $rooms = mysqli_query($conn,$sql );

                while ($row = mysqli_fetch_assoc($rooms)) :
                ?>


            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px; margin:auto;">

                    <?php 
                        $img_path = 'admin/' . $row['main_image']; 
                    ?>

                    <img src="<?= $img_path; ?>" class="card-img-top" height="220px">


                    <div class="card-body">
                        <h5 class=""><?= $row['room_type']; ?></h5>
                        <h6 class="mb-2">Tk <?= $row['price']; ?> per night</h6>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill text-dark text-wrap">AC</span>
                            <span class="badge rounded-pill text-dark text-wrap">Room Heater</span>
                        </div>
                        <div class="facilities mb-2">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge rounded-pill text-dark text-wrap">5 Adults</span>
                            <span class="badge rounded-pill text-dark text-wrap">4 Children</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <a href="booking_form.php?id=<?= $row['id']; ?>" class=" btn btn-sm text-white custom-bg
                                shadow-none">Book now</a>


                            <a href="room_details.php?id=<?= $row['id']; ?>"
                                class="btn btn-sm text-white custom-bg shadow-none">
                                More details
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>


            <div class="col-lg-12 text-center mt-5">
                <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>


    <!--========================Facilities =========================================-->

    <section class="container my-5">
        <div class="text-start mb-5">
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
            <h2 class="fw-bold">Luxury Amenities Tailored For You</h2>
            <a href="#" class="btn btn-success mt-2">Explore All Facilities →</a>
        </div>

        <!-- Facility 1 -->
        <div class="row align-items-center mb-5 pt-4 border-top">
            <div class="col-md-6">
                <img src="./images/facility/pexels-ahmetcotur-20975727.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <h3>Signature Spa & Wellness Retreat</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <ul class="list-unstyled">
                    <li>• Private spa suites for couples and individuals.</li>
                    <li>• Holistic treatments & aromatherapy.</li>
                    <li>• Yoga, meditation & wellness workshops.</li>
                </ul>
            </div>
        </div>

        <!-- Facility 2 -->
        <div class="row align-items-center mb-5 pt-4 border-top flex-md-row-reverse">
            <div class="col-md-6">
                <img src="./images/facility/pexels-asadphoto-12516848.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <h3>Infinity Pool & Sunset Deck</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <ul class="list-unstyled">
                    <li>• Stunning infinity pool with scenic views.</li>
                    <li>• Private cabanas with butler service.</li>
                    <li>• Sunset deck for relaxation or cocktails.</li>
                </ul>
            </div>
        </div>

        <!-- Facility 3 -->
        <div class="row align-items-center mb-5 pt-4 border-top">
            <div class="col-md-6">
                <img src="./images/facility/pexels-damaaa-27623464.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <h3>Private Beach & Water Experiences</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <ul class="list-unstyled">
                    <li>• Exclusive white-sand beach access.</li>
                    <li>• Kayaking, snorkeling, paddleboarding.</li>
                    <li>• Beach dining & picnic setups.</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- ====================Special Offers======================================== -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Offer Discount</h2>
    <section class="special-offers py-5 w-100">
        <div class="text-center container-fluid px-0 text-white">

            <!-- Header -->
            <div class="mb-5">
                <h2 class="fw-bold">Exclusive Packages For An Unforgettable Stay</h2>
                <p class="mx-auto mt-2" style="max-width: 750px;">
                    At Lustara, we believe in curating more than just a stay — we create experiences.
                    Discover our limited-time offers designed for romance, family moments, and indulgent escapes.
                </p>
            </div>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-6">
                    <div class="offer-card light d-flex flex-column flex-md-row">
                        <div class="discount-badge">20%<br><span>Discount</span></div>
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" class="img-fluid"
                            alt="">
                        <div class="offer-content">
                            <h3>Honeymoon Escape</h3>
                            <p>Celebrate love in ultimate luxury with a private villa, romantic dinner and couples’ spa
                                treatments.</p>
                            <a href="#">Read More →</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-6">
                    <div class="offer-card dark d-flex flex-column flex-md-row">
                        <div class="discount-badge">10%<br><span>Discount</span></div>
                        <img src="https://www.adventurebook.com/connect/wp-content/uploads/sites/2/2022/08/family-weekend-getaway.jpg"
                            class="img-fluid" alt="">
                        <div class="offer-content">
                            <h3>Family Getaway</h3>
                            <p>Bring the whole family and enjoy spacious suites and kid-friendly activities.</p>
                            <a href="#">Read More →</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-6">
                    <div class="offer-card dark d-flex flex-column flex-md-row">
                        <div class="discount-badge">15%<br><span>Discount</span></div>
                        <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df" class="img-fluid" alt="">
                        <div class="offer-content">
                            <h3>Wellness Retreat</h3>
                            <p>Rebalance your mind and body with holistic retreat programs & rejuvenating spa sessions.
                            </p>
                            <a href="#">Read More →</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-6">
                    <div class="offer-card dark d-flex flex-column flex-md-row">
                        <div class="discount-badge">25%<br><span>Discount</span></div>
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" class="img-fluid"
                            alt="">
                        <div class="offer-content">
                            <h3>Romantic Dinner By The Sea</h3>
                            <p>A one-of-a-kind dining experience with private beach setup and a gourmet five-course
                                menu.</p>
                            <a href="#">Read More →</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Read Us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6988377782786!2d90.44456977718396!3d23.79373637864091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c775164bf631%3A0x97f48a5be913a9fc!2sDhaka%20International%20University!5e0!3m2!1sen!2sbd!4v1764261262608!5m2!1sen!2sbd"
                    class="w-100 rounded" height="320px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +088-01608949908" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>
                        +088-01608949908</a>
                    <a href="tel: +088-01608949908" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>
                        +088-01608949908</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>Intagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('common/footer.php');?>





    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disabledOnInteraction: false
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    </script>

    </script>
</body>

</html>
