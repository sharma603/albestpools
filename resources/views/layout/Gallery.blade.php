@extends('welcome')
@section('title', 'Gallery')

<!-- Custom CSS -->
@section('custome-css')
<link rel="stylesheet" href="{{ asset('asset/css/gallery.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
@endsection

<!-- Custom JavaScript -->
@section('custome-javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('asset/javascript/gallery.js') }}"></script>
@endsection

@section('section')

<!-- Our Work Section -->
<div class="container mt-5">
    <div class="our-work-section text-center mb-5">
        <h2 class="section-title">Our Work</h2>
        <div class="divider mx-auto"></div>
        <p class="section-description mt-3">Take a look at some of our top projects. We pride ourselves on quality, creativity, and professionalism, ensuring that every project meets the highest standards.</p>
    </div>

    <!-- Gallery Section -->
    <div class="row g-4">
        @foreach (range(1, 8) as $i)
        <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
            <div class="gallery-box shadow-sm rounded">
                <div class="gallery-image-container">
                    <img src="{{ asset('asset/images/work-' . $i . '.jpg') }}" class="img-fluid" alt="Image {{ $i }}" data-title="Image {{ $i }} Title" data-description="Description for image {{ $i }}">
                </div>
                <button class="btn btn-primary view-button w-100 mt-2" onclick="openModal(this)">View</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal for showing the clicked image and details -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modal-img" class="img-fluid" alt="">
                <p id="modal-description" class="mt-3"></p>
            </div>
        </div>
    </div>
</div>
@endsection
