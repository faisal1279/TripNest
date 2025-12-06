<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white px-lg-3 py-lg shadow-sm sticky-top">
    <div class="container-fluid"> <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Elite</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"> <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item"> <a class="nav-link active me-2" aria-current="page" href="#">Rooms</a> </li>
                <li class="nav-item"> <a class="nav-link active me-2" aria-current="page"
                        href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item"> <a class="nav-link active me-2" aria-current="page" href="contact.php">contact
                        us</a>
                </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="about.php">About</a> </li>
            </ul>
            <div class="d-flex" role="search"> <button type="button"
                    class="btn btn-outline-dark shadow-none me-lg-2 me-2" data-bs-toggle="modal"
                    data-bs-target="#loginModal"> login </button> <button type="button"
                    class="btn btn-outline-dark shadow-none me-lg-2 me-2" data-bs-toggle="modal"
                    data-bs-target="#registerModal"> Register </button> </div>
        </div>
    </div>
</nav> <!-- ==============Login============================ -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-person-circle"></i> User
                        Login</h1> <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3"> <label class="form-label">Email address</label> <input type="email"
                            class="form-control shadow-none" aria-describedby="emailHelp"> </div>
                    <div class="mb-3"> <label class="form-label">Password</label> <input type="password"
                            class="form-control shadow-none"> </div>
                    <div class="d-flex align-items-center justify-content-between"> <button type="submit"
                            class="btn btn-dark shadow-none">Login</button> <a href="javascript: void(0)"
                            class="text-secondary text-decoration-none">Forgot password?</a> </div>
                </div>
            </form>
        </div>
    </div>
</div> <!-- =================Register========================= -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 d-flex align-items-center" id="exampleModalLabel"><i
                            class="bi bi-person-lines-fill me-2"></i> User Registration</h1> <button type="reset"
                        class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base"> Note:
                        Your details must match with your ID (NID,Passport,driving license,etc) that will-in.
                        beduring check required </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 mb-2"> <label class="form-label">Name</label> <input type="text"
                                    class="form-control shadow-none"> </div>
                            <div class="col-md-6 mb-2"> <label class="form-label">Email</label> <input type="email"
                                    class="form-control shadow-none"> </div>
                            <div class="col-md-6 mb-2"> <label class="form-label">Number</label> <input type="number"
                                    class="form-control shadow-none"> </div>
                            <div class="col-md-6 mb-2"> <label class="form-label">Picture</label> <input type="file"
                                    class="form-control shadow-none"> </div>
                            <div class="col-md-12 mb-2"> <label class="form-label">Address</label> <textarea
                                    class="form-control shadow-none" rows="2"></textarea> </div>
                            <div class="col-md-6 mb-2"> <label class="form-label">Post Code</label> <input type="number"
                                    class="form-control shadow-none"> </div>
                            <div class="col-md-6 mb-2"> <label class="form-label">Date of Birth</label> <input
                                    type="date" class="form-control shadow-none"> </div>
                            <div class="col-md-6 mb-2"> <label class="form-label">Password</label> <input
                                    type="password" class="form-control shadow-none"> </div>
                            <div class="col-md-6 mb-2"> <label class="form-label">Confirm Password</label> <input
                                    type="password" class="form-control shadow-none"> </div>
                            <div class="text-center my-1"> <button type="submit"
                                    class="btn btn-dark shadow-none">Register</button> </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>