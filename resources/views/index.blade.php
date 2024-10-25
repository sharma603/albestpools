@extends('layout')
@section('title') Home Page @endsection

<!-- This is the stylesheet section -->
@section('stylesheet')
<!-- You can add specific stylesheets here if needed -->
@endsection

<!-- This is the JavaScript section -->
@section('javascript')
<!-- You can add specific scripts here if needed -->
  <!-- Custom javascript -->
  <script src="{{ asset('javascript/home.js') }}"></script>
@endsection

@section('Tophead')
<div class="container-fluid">
    <marquee behavior="scroll" direction="left">
        <div class="row">
            <div class="col-12 col-md-4">
                <span>Welcome to Albest Pools Contracting and Services</span>
            </div>
            <div class="col-12 col-md-4">
                <i class="fab fa-whatsapp" aria-hidden="true"></i><span> +974-30030215</span>
            </div>
            <div class="col-12 col-md-4">
                <span>albestpools55@gmail.com</span>
            </div>
        </div>
    </marquee>
</div>
@endsection

@section('slider')
<!-- Slider (Carousel) -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <section class="hero d-flex align-items-center">
                <div class="container text-center">
                    <h1>Welcome To</h1>
                    <p>Responsive, modern design using Bootstrap and custom CSS</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </section>
        </div>
        <!-- Additional slides can be added here -->
    </div>
    <!-- Carousel controls (optional) -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection

@section('model-box')
<div class="container mt-5">
    <div class="row">
        <!-- Image Section -->
        <div class="col-md-6 mb-4 image-box">
            <img src="{{ asset('images/2.png') }}" alt="Picture" class="img-fluid">
        </div>
        <!-- Review Section -->
        <div class="col-md-6 mb-4">
            <div class="review-box">
                <h5>Review Title</h5>
                <p>
                    This is a review of the picture shown on the left. You can write a detailed description or review here.
                    The content is flexible, and you can customize it based on your needs. Add more text as necessary to provide
                    more context or information.
                </p>
                <p>
                    <strong>Reviewer:</strong> John Doe
                </p>
                <p>
                    <strong>Rating:</strong> ⭐⭐⭐⭐☆
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
