<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hospital Management System</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="index.php"><img src="./assets/images/tap_logo.png"
                        width="300" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page"
                                href="./pages/dashboard.php">Patient</a>
                        </li>
                        <li class="nav-item px-2"><a class="nav-link" href="./pages/dashboard.php">Doctor</a></li>
                        <li class="nav-item px-2"><a class="nav-link" href="./pages/dashboard.php">Administrator</a>
                        </li>
                    </ul>
                    <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4"
                        href="./pages/login.php">Sign In</a>
                </div>
            </div>
        </nav>


        <section class="py-xxl-10 pb-0" id="home">
            <div class="bg-holder bg-size"
                style="background-image:url(./assets/img/gallery/hero-bg.png);background-position:top center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row min-vh-xl-100 min-vh-xxl-25">
                    <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100"
                            src="./assets/img/gallery/hero.png" alt="hero-header" /></div>
                    <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
                        <h1 class="fw-light font-base fs-6 fs-xxl-7">We're <strong>determined
                            </strong>for<br />your&nbsp;<strong>better life.</strong></h1>
                        <p class="fs-1 mb-5">You can get the care you need 24/7 – be it online or in <br />person. You
                            will be treated by caring specialist doctors. </p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="./pages/book_now.php" role="button">Make
                            an Appointment</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-0 login_sec">
            <div class="container">
                <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
                    <div class="col-md-4 col-lg-auto col-sm-12">
                        <a href="#">
                            <div class="card text-center">
                                <i class="fa-solid fa-bed-pulse"></i>
                                Patient Login
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-auto col-sm-12">
                        <a href="#">
                            <div class="card text-center">
                                <i class="fa-solid fa-user-doctor"></i>
                                Doctor Login
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-auto col-sm-12">
                        <a href="#">
                            <div class="card text-center">
                                <i class="fa-solid fa-user-tie"></i>
                                Administrator
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <section class="py-0 bg-primary">
            <div class="container">
                <div class="row justify-content-md-between justify-content-evenly py-4">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                        <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; <?php echo date('Y');?>
                        </p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 my-2 text-center text-md-end text-200"> Made by <a class="fw-bold text-info"
                                href="#" target="_blank">Tapasi Chatterjee </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap"
        rel="stylesheet">
</body>

</html>