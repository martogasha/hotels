@include('nav')
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-6">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Flight Grid</h2>
                                <div>
                                    <h3 class="title font-size-24">24 Flights found</h3>
                                </div>

                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html">Home</a></li>
                            <li>Flight</li>
                            <li>Flight Grid</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-30px">
                    <div class="filter-bar d-flex align-items-center justify-content-between">
                        <div class="filter-bar-filter d-flex flex-wrap align-items-center">
                            <div class="filter-option">
                                <h3 class="title font-size-16">Filter by:</h3>
                            </div>
                            <div class="filter-option">
                                <div class="dropdown dropdown-contain">
                                    <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                        Filter Price
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-wrap">
                                        <div class="dropdown-item">
                                            <div class="slider-range-wrap">
                                                <div class="price-slider-amount padding-bottom-20px">
                                                    <label for="amount" class="filter__label">Price:</label>
                                                    <input type="text" id="amount" class="amounts">
                                                </div><!-- end price-slider-amount -->
                                                <div id="slider-range"></div><!-- end slider-range -->
                                            </div><!-- end slider-range-wrap -->
                                            <div class="btn-box pt-4">
                                                <button class="theme-btn theme-btn-small theme-btn-transparent" type="button">Apply</button>
                                            </div>
                                        </div><!-- end dropdown-item -->
                                    </div><!-- end dropdown-menu -->
                                </div><!-- end dropdown -->
                            </div>
                            <div class="filter-option">
                                <div class="dropdown dropdown-contain">
                                    <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                        Review Score
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-wrap">
                                        <div class="dropdown-item">
                                            <div class="checkbox-wrap">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r1">
                                                    <label for="r1">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(55.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r2">
                                                    <label for="r2">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(40.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r3">
                                                    <label for="r3">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(23.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r4">
                                                    <label for="r4">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(12.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r5">
                                                    <label for="r5">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><!-- end dropdown-item -->
                                    </div><!-- end dropdown-menu -->
                                </div><!-- end dropdown -->
                            </div>
                            <div class="filter-option">
                                <div class="dropdown dropdown-contain">
                                    <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                        Airlines
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-wrap">
                                        <div class="dropdown-item">
                                            <div class="checkbox-wrap">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb1">
                                                    <label for="catChb1">Major Airlines</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb2">
                                                    <label for="catChb2">United Airlines</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb3">
                                                    <label for="catChb3">Delta Airlines</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb4">
                                                    <label for="catChb4">Alitalia</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb5">
                                                    <label for="catChb5">US Airways</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb6">
                                                    <label for="catChb6">Air France</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb7">
                                                    <label for="catChb7">Air Tahiti Nui</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb8">
                                                    <label for="catChb8">Indigo</label>
                                                </div>
                                            </div>
                                        </div><!-- end dropdown-item -->
                                    </div><!-- end dropdown-menu -->
                                </div><!-- end dropdown -->
                            </div>
                        </div><!-- end filter-bar-filter -->
                        <div class="select-contain">
                            <select class="select-contain-select">
                                <option value="1">Short by default</option>
                                <option value="2">Popular Flight</option>
                                <option value="3">Price: low to high</option>
                                <option value="4">Price: high to low</option>
                                <option value="5">A to Z</option>
                            </select>
                        </div><!-- end select-contain -->
                    </div><!-- end filter-bar -->
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="images/airline-img7.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">Beijing</h3>
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">Ksh 350.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12 Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                            <a href="#" class="theme-btn theme-btn-small w-100" data-toggle="modal" data-target="#exampleModalCenter">View Details</a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->

        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-3 text-center">
                    <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                    <p class="font-size-13 pt-2">Showing 1 - 6 of 24 Flights</p>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area info-bg padding-top-90px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                        <i class="la la-phone"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Need Help? Contact us</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                        <i class="la la-money"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Payments</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                        <i class="la la-times"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Cancel Policy</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">Subscribe to see Secret Deals</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text text-white">Enter email address</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your information is safe with us.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="index.html" class="foot__logo"><img src="images/logo.png" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">Morbi convallis bibendum urna ut viverra. Maecenas consequat</p>
                    <ul class="list-items pt-3">
                        <li>3015 Grand Ave, Coconut Grove,<br> Cerrick Way, FL 12345</li>
                        <li>+123-456-789</li>
                        <li><a href="#">trizen@yourwebsite.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Company</h4>
                    <ul class="list-items list--items">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="blog-grid.html">News</a></li>
                        <li><a href="contact.html">Support</a></li>
                        <li><a href="#">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Services</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Trizen.com Rewards</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">List My Hotel</a></li>
                        <li><a href="#">All Hotels</a></li>
                        <li><a href="#">TV Ads</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">USA Vacation Packages</a></li>
                        <li><a href="#">USA Flights</a></li>
                        <li><a href="#">USA Hotels</a></li>
                        <li><a href="#">USA Car Hire</a></li>
                        <li><a href="#">Create an Account</a></li>
                        <li><a href="#">Trizen Reviews</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block mt-4"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                    <p class="copy__desc">
                        &copy; Copyright Trizen 2020. Made with
                        <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                    <h3 class="title font-size-15 pr-2">We Accept</h3>
                    <img src="images/payment-img.png" alt="">
                </div><!-- end copy-right-content -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <section class="pricing-plans">
                <!-- Pricing Tables -->
                <div class="pricing-tables">
                    <!-- Plan Features -->
                    <div class="pricing-plan">
                        <h2 class="plan-title">Basic</h2>
                        <div class="plan-cost">
                            <p class="plan-price">$29</p>
                            <span>/</span>
                            <p class="plan-type">Monthly</p>
                        </div>
                        <ul class="plan-features">
                            <li>Unlimited Templates</li>
                            <li>Responsive / Mobile Friendly</li>
                            <li><span>Unlimited Training</span></li>
                            <li><span>Custom Branding</span></li>
                            <li><span>Resource Library</span></li>
                            <li><span>Dedicated Support</span></li>
                        </ul>
                        <a class="btn-plan" href="">Select Plan</a>
                    </div>
                    <!-- "Basic" Plan -->
                    <!-- "Premium" Plan -->
                    <div class="pricing-plan featured-plan">
                        <div class="featured-ribbon">Best Value</div>
                        <h2 class="plan-title">Premium</h2>
                        <div class="plan-cost">
                            <p class="plan-price">$59</p>
                            <span>/</span>
                            <p class="plan-type">Monthly</p>
                        </div>
                        <ul class="plan-features">
                            <li>Unlimited Templates</li>
                            <li>Responsive / Mobile Friendly</li>
                            <li>Unlimited Training</li>
                            <li>Custom Branding</li>
                            <li><span>Resource Library</span></li>
                            <li><span>Dedicated Support</span></li>
                        </ul>
                        <a class="btn-plan cta" href="">Select Plan</a>
                    </div>
                    <!-- "Ultmate" Plan -->
                    <div class="pricing-plan">
                        <h2 class="plan-title">Ultimate</h2>
                        <div class="plan-cost">
                            <p class="plan-price">$89</p>
                            <span>/</span>
                            <p class="plan-type">Monthly</p>
                        </div>
                        <ul class="plan-features">
                            <li>Unlimited Templates</li>
                            <li>Responsive / Mobile Friendly</li>
                            <li>Unlimited Training </li>
                            <li>Custom Branding</li>
                            <li>Resource Library</li>
                            <li>Dedicated Support</li>
                        </ul>
                        <a class="btn-plan" href="">Select Plan</a>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- Modal -->
<style>
    // Demo Styles
    body {
        color: #333;
        font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    .demo-wrap {
        display: flex;
        align-items: center;
        flex-flow: column;
        justify-content: center;
        padding-top: 2em;
        width: 100%;
    }

    .demo-header {
        padding-right: 1em;
        padding-left: 1em;
        text-align: center;
    h1,
    p {
        margin-bottom: 0;
    }
    p {
        font-size: 1.5rem;
    }
    }

    @media (min-width: 62em) {
        .demo-wrap {
            padding-top: 0;
            height: 100vh;
        }
    }


    /* --- Pricing Plans --- */

    .pricing-plans {
        padding: 2em 0;
        width: 100%;
    }

    .pricing-tables {
        display: flex;
        flex-flow: column;
        padding-top: 1em;
    }

    .pricing-plan {
        background-color: #f6f6f6;
        border: 2px solid #DDD;
        border-bottom: 2px solid #DDD;
        display: block;
        padding: 1em 0;
        text-align: center;
        width: 100%;
    }

    .pricing-plan:first-child, .pricing-plan:last-child {
        background-color: #EEE;
    }

    .pricing-plan:first-child {
        border-bottom: 0;
    }

    .pricing-plan:last-child {
        border-top: 0;
    }

    .pricing-plan:nth-child(2) {
        border-bottom: 0;
    }

    .no-flexbox .pricing-plan {
        float: left;
    }

    .plan-title {
        font-size: 1em;
        letter-spacing: -0.05em;
        margin: 0;
        padding: 0.75em 1em 1.25em;
        text-transform: uppercase;
    }

    .plan-cost {
        background-color: white;
        color: #77b9dd;
        font-size: 1.25em;
        font-weight: 700;
        padding: 1.25em 1em;
        text-transform: uppercase;
    }

    .plan-cost span {
        display: none;
    }

    .plan-price {
        font-size: 3em;
        letter-spacing: -0.05em;
        line-height: 1;
        margin-bottom: 0;
    }

    .plan-type {
        border: 0.313em solid #DDD;
        color: #999;
        display: inline-block;
        font-size: 0.75em;
        margin: 0.75em 0 0 0.75em;
        padding: 0.3em 0.4em 0.25em;
        width: auto;
    }

    .plan-features {
        margin: 0;
        padding: 2em 1em 1em;
    }

    .plan-features li {
        list-style-type: none;
        border-bottom: 1px solid #DDD;
        margin-bottom: 0.5em;
        padding-bottom: 0.75em;
        color: #555;
        display: block;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: .8em;
        font-weight: normal;
        line-height: 1.3;
    //   &:before {
          //     content: "✔";
          //     margin-right: 7px;

          //   }
    span {
        color: #BBB;
    }
    }

    .plan-features li:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .plan-features h3 {

    }

    .plan-features i {
        font-size: 1.5em;
    }

    .plan-features i.icon-ok-squared {
        color: #3aa14d;
    }

    .plan-features i.icon-cancel-circled {
        color: darkRed;
    }

    .btn-plan {
        background-color: #1B8DC8;
        color: white;
        max-width: 12em;
    }

    .cta {
        background-color: #6cb507;
    }

    .featured-plan {
        background-color: #eef7fc;
        border-top: 5px solid #8cd0f5;
        border-right: 0 solid transparent;
        border-bottom: 5px solid #8cd0f5;
        border-left: 0 solid transparent;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        overflow: hidden;
    //order: -1;
        position: relative;
        transition: transform 400ms ease;
    }

    .featured-plan {
    .plan-title {
        color: #1B8DC8;
    }
    }

    .featured-ribbon {
        width: 200px;
        background: #1B8DC8;
        position: absolute;
        top: 15px;
        left: -60px;
        text-align: center;
        line-height: 35px;
        letter-spacing: 0.01em;
        font-size: 0.65em;
        font-weight: 700;
        color: white;
        text-transform: uppercase;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        /* Custom styles */
        /* Different positions */
    }

    .featured-ribbon.sticky {
        position: fixed;
    }

    .featured-ribbon.shadow {
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
    }

    .featured-ribbon.top-left {
        top: 25px;
        left: -50px;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }

    .featured-ribbon.top-right {
        top: 25px;
        right: -50px;
        left: auto;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }

    .featured-ribbon.bottom-left {
        top: auto;
        bottom: 25px;
        left: -50px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }

    .featured-ribbon.bottom-right {
        top: auto;
        right: -50px;
        bottom: 25px;
        left: auto;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
    }

    @media (min-width: 400px) {
        .pricing-plans {
            padding-right: 2em;
            padding-left: 2em;
            width: 100%;
        }

        .featured-plan {
            transform: scale(1.05);
        }
    }

    @media (min-width: 33.75em) {
        .pricing-plans .module-title {
            margin-bottom: 1em;
        }

        .pricing-tables {
            flex-flow: row wrap;
        }

        .pricing-plan {
            flex-grow: 1;
            width: 50%;
        }

        .pricing-plan:first-child {
            border-right: 0;
            border-bottom: 0;
        }

        .featured-plan {
            margin-top: 0.6em;
            order: 0;
        }

        .pricing-plan:nth-child(3) {

        }

        .pricing-plan:last-child {
            border-top: 2px solid #DDD;
            border-left: 0;
        }

        .no-flexbox .pricing-plan {
            width: 48%;
        }

        .plan-title {
            font-size: 0.875em;
        }
    }

    @media (min-width: 48em) {
        .no-flexbox .pricing-plan {
            width: 24%;
        }

        .plan-type {
            font-size: 0.7em;
            margin: 0.5em 0 0 1em;
            padding-bottom: 0.2em;
        }

        .featured-ribbon {
            font-size: 0.65em;
        }
    }

    @media (min-width: 62em) {
        .pricing-tables {
            padding-top: 3em;
        }

        .pricing-plan {
            flex-grow: 1;
            width: 25%;
        }

        .featured-plan {
            margin-top: 0;
            order: 0;
        }

        .pricing-plan:first-child, .pricing-plan:nth-child(2n) {
            border-bottom: 2px solid #DDD;
        }

        .pricing-plan .plan-features span {
            display: block !important;
        }

        .plan-cost {
            display: flex;
            flex-flow: row wrap;
            align-items: center;
            justify-content: center;
            font-size: 1em;
        }

        .plan-cost span {
            color: #BBB;
            font-size: 1.5em;
            font-weight: 400;
            padding-right: 0.15em;
            padding-left: 0.15em;
        }

        .plan-price {
            font-size: 3.25em;
        }

        .btn-plan {
            font-size: 0.875em;
        }

        .featured-ribbon {
            font-size: 0.45em;
            left: -68px;
            line-height: 25px;
        }
    }

    @media (min-width: 75em) {
        .plan-cost {
            font-size: 1em;
        }
    }

    @media (min-width: 100em) {
        .pricing-tables {
            margin: 0 auto;
            max-width: 75.00em;
        }
    }
</style>

<!-- Template JS Files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/flight-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Sep 2021 10:51:10 GMT -->
</html>
