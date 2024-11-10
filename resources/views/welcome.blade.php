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
     @yield("custome-css")
    <link rel="stylesheet" href="{{ asset('asset/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Custom javascript -->
        @yield("custome-javascript")
</head>

<body>
    <!-- Top view company information here -->
    @section('Tophead')

    @show

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
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="abouts">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="inquiry">inquiry</a>
                    </li> -->
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

    <!-- Start a body section -->
    <div class="section">
        @yield('section')
    </div>
    <!-- End Model Box -->


    <!-- Optional footer content can go here -->
    <footer class="text-white pt-4 pb-3 mt-5">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>Albest Pools Contracting and Service is made up of a group of highly skilled gardening, landscaping professionals who pay close attention to detail. Our experienced staff will keep your property looking and functioning beautifully.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-skype"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Services Section -->
            <div class="col-md-4">
                <h5>Our Services</h5>
                <ul>
                <li>Swimming Pool Construction</li>
        <li>Hard and Soft Landscape</li>
        <li>Automatic Irrigation System</li>
        <li>Water Feature and Fountains</li>
        <li>Jacuzzi, Spa, and Steam Room</li>
        <li>Landscape Lighting</li>
        <li>Construction and Maintenance</li>
        <li>Albest Pools Contracting and Service</li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p> Doha, Qatar</p>
                <p>Email: info@albestpools.com</p>
                <p>Phone: +974 30030215</p>
                <!-- <p>Sat-Thu: 9am - 6pm</p> -->
                <h5>Working Hours</h5>
                <p>Saturday - Thursday: 8:30 am - 5:00 pm</p>
                <p>Friday: Closed</p>
            </div>
        </div>
        <!-- Copyright Row -->
        <div class="row mt-3">
            <div class="col text-center">
                <p class="mb-0">&copy; 2024 Albest Pools Contracting and Services. All rights reserved.</p>
            </div>
        </div>



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