@extends('welcome')
@section('title', 'Service')
<!-- Top Company Welcome -->
@section('section')
<div class="container">
        <!-- Header Section -->
        <header class="text-center my-5">
            <h1>Our Blog</h1>
            <p>Stay updated with the latest news, tips, and insights from Albest Pools Contracting & Services.</p>
        </header>

        <!-- Blog Posts Section -->
        <div class="row">
            <!-- Blog Post 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">The Importance of Regular Pool Maintenance</h5>
                        <p class="card-text">Discover why regular pool maintenance is essential for a clean, safe, and enjoyable swimming experience.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published on October 25, 2024</small>
                    </div>
                </div>
            </div>
            
            <!-- Blog Post 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Choosing the Right Pool Design for Your Home</h5>
                        <p class="card-text">Learn how to select a pool design that complements your home and landscape while meeting your lifestyle needs.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published on October 20, 2024</small>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Eco-Friendly Pool Solutions</h5>
                        <p class="card-text">Explore sustainable pool options that can help you save energy, reduce costs, and protect the environment.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published on October 15, 2024</small>
                    </div>
                </div>
            </div>
        </div>
@endsection