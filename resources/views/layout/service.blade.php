@extends('welcome')
@section('title', 'Service')
<!-- Top Company Welcome -->
@section('section')
<div class="container">
        <header class="text-center my-5">
            <h1>Our Services</h1>
            <p>At Albest Pools Contracting and Services, we offer a variety of services to meet your pool and outdoor needs.</p>
        </header>

        <div class="row">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('asset/images/service1.jpg') }}" class="card-img-top" alt="Custom Pool Design">
                    <div class="card-body">
                        <h5 class="card-title">Custom Pool Design</h5>
                        <p class="card-text">We create stunning custom pool designs tailored to your preferences and the landscape of your outdoor space.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('asset/images/service2.jpg') }}" class="card-img-top" alt="Pool Installation">
                    <div class="card-body">
                        <h5 class="card-title">Pool Installation</h5>
                        <p class="card-text">Our team specializes in professional pool installation, ensuring quality workmanship and timely project completion.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('asset/images/service3.jpg') }}" class="card-img-top" alt="Maintenance Services">
                    <div class="card-body">
                        <h5 class="card-title">Maintenance Services</h5>
                        <p class="card-text">We offer comprehensive maintenance services to keep your pool in pristine condition all year round.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
@endsection