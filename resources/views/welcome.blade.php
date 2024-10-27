<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Albest Pools')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="top-container">
        @section('Tophead')
        <div class="container-fluid top-container">
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <span>Welcome to Albest Pools Contracting and Services</span>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <a href="tel:+974300303215" class="phone-link"><span>+974-300303215</span></a>
                    <a href="https://wa.me/974300303215" class="whatsapp-link"><span>WhatsApp</span></a>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <a href="mailto:albestpools55@gmail.com" class="email-link"><span>albestpools55@gmail.com</span></a>
                </div>
            </div>
        </div>
        @show
    </div>

   <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 1000;;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('asset/company_logo/ablest_logo.png') }}" style="height:50px;" alt="Albest Logo">
                <img src="{{ asset('asset/company_logo/albest_name.png') }}" style="height:40px; margin-top:10px;" alt="Albest Name">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
<!--  -->
            <div class="collapse navbar-collapse bg-light" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!--  -->
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Slider Box -->
    <div class="slider">
        @yield('slider')
    </div>
    <!-- End Slider Box -->

    <!-- Start Model Box -->
    <div class="section">
        @yield('section')
    </div>
    <!-- End Model Box -->

    <footer>
        <!-- Optional footer content can go here -->
        <footer class="bg-dark text-white pt-4 pb-3 mt-5">
    <div class="container">
        <div class="row">
            <!-- Company Information -->
            <div class="col-md-4 text-center text-md-start mb-3">
                <h5>Albest Pools Contracting and Services</h5>
                <p>We specialize in high-quality pool installation and maintenance, providing innovative solutions with a commitment to customer satisfaction.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 text-center mb-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="service" class="text-white text-decoration-none">Services</a></li>
                    <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="col-md-4 text-center text-md-end mb-3">
                <h5>Contact Us</h5>
                <p><a href="mailto:albestpools55@gmail.com" class="text-white text-decoration-none">albestpools55@gmail.com</a></p>
                <p><a href="tel:+974300303215" class="text-white text-decoration-none">+974-300303215</a></p>

                <!-- Social Media Links -->
                <div class="d-flex justify-content-center justify-content-md-end">
                    <a href="https://facebook.com" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instagram.com" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com" class="text-white"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Copyright Row -->
        <div class="row mt-3">
            <div class="col text-center">
                <p class="mb-0">&copy; 2024 Albest Pools Contracting and Services. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
    </footer>

    <!-- jQuery (Optional, only if you need it) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Bootstrap JS (Bootstrap 5 version) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="{{ asset('asset/javascript/home.js') }}"></script>
    <script src="{{ asset('asset/javascript/javascript.js') }}"></script>
</body>

</html>
