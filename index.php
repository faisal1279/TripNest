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
/* .poppins-thin { font-family: "Poppins", sans-serif; font-weight: 100; font-style: normal; } .poppins-extralight { font-family: "Poppins", sans-serif; font-weight: 200; font-style: normal; } .poppins-light { font-family: "Poppins", sans-serif; font-weight: 300; font-style: normal; } .poppins-regular { font-family: "Poppins", sans-serif; font-weight: 400; font-style: normal; } .poppins-medium { font-family: "Poppins", sans-serif; font-weight: 500; font-style: normal; } .poppins-semibold { font-family: "Poppins", sans-serif; font-weight: 600; font-style: normal; } .poppins-bold { font-family: "Poppins", sans-serif; font-weight: 700; font-style: normal; } .poppins-extrabold { font-family: "Poppins", sans-serif; font-weight: 800; font-style: normal; } .poppins-black { font-family: "Poppins", sans-serif; font-weight: 900; font-style: normal; } .poppins-thin-italic { font-family: "Poppins", sans-serif; font-weight: 100; font-style: italic; } .poppins-extralight-italic { font-family: "Poppins", sans-serif; font-weight: 200; font-style: italic; } .poppins-light-italic { font-family: "Poppins", sans-serif; font-weight: 300; font-style: italic; } .poppins-regular-italic { font-family: "Poppins", sans-serif; font-weight: 400; font-style: italic; } .poppins-medium-italic { font-family: "Poppins", sans-serif; font-weight: 500; font-style: italic; } .poppins-semibold-italic { font-family: "Poppins", sans-serif; font-weight: 600; font-style: italic; } .poppins-bold-italic { font-family: "Poppins", sans-serif; font-weight: 700; font-style: italic; } .poppins-extrabold-italic { font-family: "Poppins", sans-serif; font-weight: 800; font-style: italic; } .poppins-black-italic { font-family: "Poppins", sans-serif; font-weight: 900; font-style: italic; } .merienda-<uniquifier> { font-family: "Merienda", cursive; font-optical-sizing: auto; font-weight: <weight>; font-style: normal; } */

.availability-form {
    margin-top: -50px;
    z-index: 2;
    position: relative;
}

@media screen and (max-width:575px) {
    .availability-form {
        margin-top: 25px;
        padding: 0 35px;
    }
}
</style>

<body class="bg-light">

    <?php require('common/header.php'); ?>
    <!--=======================Hero Section=========================  -->
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

    <!-- Our rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>


    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                    <img src="https://images.unsplash.com/photo-1631049552057-403cdb8f0658?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww"
                        class="card-img-top">
                    <div class="card-body">
                        <h5>Simple room Name</h5>
                        <div class="features mb-4">
                            <h6 class="mb-4">৳200 per night</h6>
                            <span class="badge rounded-pill text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill text-dark text-wrap"> 1 Bathroom</span>
                            <span class="badge rounded-pill text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill text-dark text-wrap">AC</span>
                            <span class="badge rounded-pill text-dark text-wrap">Room Heater</span>
                        </div>
                        <div class="facilities mb-4">
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
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                    <img src="https://images.unsplash.com/photo-1631049552057-403cdb8f0658?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww"
                        class="card-img-top">
                    <div class="card-body">
                        <h5>Simple room Name</h5>
                        <div class="features mb-4">
                            <h6 class="mb-4">৳200 per night</h6>
                            <span class="badge rounded-pill text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill text-dark text-wrap"> 1 Bathroom</span>
                            <span class="badge rounded-pill text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill text-dark text-wrap">AC</span>
                            <span class="badge rounded-pill text-dark text-wrap">Room Heater</span>
                        </div>
                        <div class="facilities mb-4">
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
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                    <img src="https://images.unsplash.com/photo-1631049552057-403cdb8f0658?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aG90ZWwlMjByb29tfGVufDB8fDB8fHww"
                        class="card-img-top">
                    <div class="card-body">
                        <h5>Simple room Name</h5>
                        <div class="features mb-4">
                            <h6 class="mb-4">৳200 per night</h6>
                            <span class="badge rounded-pill text-dark text-wrap">2 Rooms</span>
                            <span class="badge rounded-pill text-dark text-wrap"> 1 Bathroom</span>
                            <span class="badge rounded-pill text-dark text-wrap">1 Balcony</span>
                            <span class="badge rounded-pill text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill text-dark text-wrap">Television</span>
                            <span class="badge rounded-pill text-dark text-wrap">AC</span>
                            <span class="badge rounded-pill text-dark text-wrap">Room Heater</span>
                        </div>
                        <div class="facilities mb-4">
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
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>


    <!-- Facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/feautures/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/feautures/wifi.svg" width="80px">
                <h5 class="mt-3">star</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/feautures/wifi.svg" width="80px">
                <h5 class="mt-3">Star</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/feautures/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="./images/feautures/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Facilities</a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="30px" />
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Lorem ipsum" is a standard dummy or placeholder text used in the design, publishing, and web
                        development industries. Its primary purpose is to allow designers and typesetters to focus on
                        the visual layout and typography of a project without being distracted by meaningful content
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="30px" />
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Lorem ipsum" is a standard dummy or placeholder text used in the design, publishing, and web
                        development industries. Its primary purpose is to allow designers and typesetters to focus on
                        the visual layout and typography of a project without being distracted by meaningful content
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="30px" />
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>
                        Lorem ipsum" is a standard dummy or placeholder text used in the design, publishing, and web
                        development industries. Its primary purpose is to allow designers and typesetters to focus on
                        the visual layout and typography of a project without being distracted by meaningful content
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Know more</a>
        </div>
    </div>

    <!-- Read Us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
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
    <!-- Testomonials -->
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
    </script>
</body>

</html>