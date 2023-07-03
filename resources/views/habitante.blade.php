<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Noemie</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('layouts.web.loading')
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
           @include('layouts.web.navigation')
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Eres Propietario</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Eres propietario</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->

         <!-- Search Start -->
         <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                {{-- <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Search End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            
            <div class="container">
                <div class="row g-5 gy-2 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/about.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Soy Propietario</h1>
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Consectetur adipiscing elit</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Sed do eiusmod tempor incididunt ut labore</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                    </div>
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.7s">
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </p>

                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary py-3 px-5" href="">Contáctame por Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- About End -->

        <!-- Contact Start -->
        @include('layouts.web.contactform')
        <!-- Contact End -->

         <!-- Footer Start -->
        @include('layouts.web.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>