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
