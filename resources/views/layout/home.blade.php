@extends('welcome')

@section('title', 'Albest')
<!-- this is top company welcome  -->
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

<!-- <marquee> -->
@endsection
@section('slider')
<!-- Slider (Carousel) -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <section class="hero d-flex align-items-center">
                <div class="container text-center">
                    <h1>Welcome To Albest Pools Contracting & service</h1>
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
