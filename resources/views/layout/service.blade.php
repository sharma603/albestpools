@extends('welcome')
@section('title', 'Service')
<!-- Top Company Welcome -->
@section('section')
<div class="container">
<div>
    <!-- Header Section -->
    <header class="text-center my-5">
        <h1>Our Services</h1>
        <p>At Albest Pools Contracting and Services, we offer a variety of services to meet your pool and outdoor needs.</p>
    </header>

    <!-- Services Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('asset/images/Construction.webp') }}" class="card-img-top" alt="Custom Pool Design">
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
                    <img src="{{ asset('asset/images/Construction.webp') }}" class="card-img-top" alt="Pool Installation">
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
                    <img src="{{ asset('asset/images/Construction.webp') }}" class="card-img-top" alt="Maintenance Services">
                    <div class="card-body">
                        <h5 class="card-title">Maintenance Services</h5>
                        <p class="card-text">We offer comprehensive maintenance services to keep your pool in pristine condition all year round.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Services -->
        <div class="row g-4 mt-5">
            <!-- Construction Service -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100">
                    <img src="{{ asset('asset/images/Construction.webp') }}" class="card-img-top img-fluid" alt="Construction Service">
                    <div class="card-body text-center">
                        <h2 class="card-title">Construction</h2>
                        <p class="card-text">We provide construction services for any type of swimming pool as per clients' requirements and needs.</p>
                        <a href="#" class="btn btn-primary btn-enquire">Enquire Now</a>
                    </div>
                </div>
            </div>

            <!-- Renovation Service -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100">
                    <img src="{{ asset('asset/images/Renovation.webp') }}" class="card-img-top img-fluid" alt="Renovation Service">
                    <div class="card-body text-center">
                        <h2 class="card-title">Renovation</h2>
                        <p class="card-text">We provide customized services to renovate your swimming pool and give it an enhanced look and functionality.</p>
                        <a href="#" class="btn btn-primary btn-enquire">Enquire Now</a>
                    </div>
                </div>
            </div>

            <!-- Maintenance Service -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100">
                    <img src="{{ asset('asset/images/Maintenance.webp') }}" class="card-img-top img-fluid" alt="Maintenance Service">
                    <div class="card-body text-center">
                        <h2 class="card-title">Maintenance</h2>
                        <p class="card-text">We provide annual maintenance services to take care of your swimming pool at very affordable prices.</p>
                        <a href="#" class="btn btn-primary btn-enquire">Enquire Now</a>
                    </div>
                </div>
            </div>

            <!-- Cleaning Service -->
            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100">
                    <img src="{{ asset('asset/images/Cleaning.jpg') }}" class="card-img-top img-fluid" alt="Cleaning Service">
                    <div class="card-body text-center">
                        <h2 class="card-title">Cleaning</h2>
                        <p class="card-text">We also provide swimming pool cleaning services, and we have a dedicated team of experts to help you.</p>
                        <a href="#" class="btn btn-primary btn-enquire">Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="container mission-section my-5">
        <div class="row">
            <!-- Left Side Image -->
            <div class="col-md-6 image-container">
                <img src="{{ asset('asset/images/Construction.webp') }}" alt="Mission Image" class="img-fluid">
            </div>

            <!-- Right Side Content -->
            <div class="col-md-6 content-container">
                <h2>Our Mission</h2>
                <div class="content-box">
                    <div class="number">01</div>
                    <div>
                        <h4>Commitment to Excellence</h4>
                        <p>Albest Pools Contracting and Services is dedicated to elevating the pool service experience by delivering top-notch solutions.</p>
                    </div>
                </div>
                <div class="content-box">
                    <div class="number">02</div>
                    <div>
                        <h4>Efficiency in Operations</h4>
                        <p>We prioritize efficiency in all our operations, streamlining processes to provide prompt and effective pool services.</p>
                    </div>
                </div>
                <div class="content-box">
                    <div class="number">03</div>
                    <div>
                        <h4>Client Satisfaction as a Priority</h4>
                        <p>Client satisfaction is our primary goal. We understand and cater to the unique needs of each client.</p>
                    </div>
                </div>
                <div class="content-box">
                    <div class="number">04</div>
                    <div>
                        <h4>Setting Industry Standards</h4>
                        <p>Our mission extends beyond providing excellent pool services; we aspire to set new industry standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Count Animation and Scroll Animation -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const statItems = document.querySelectorAll(".stat-item");

    function animateCount(element, start, end, duration) {
        let current = start;
        const increment = (end - start) / (duration / 10);
        const interval = setInterval(() => {
            current += increment;
            if (current >= end) {
                element.textContent = end.toLocaleString();
                clearInterval(interval);
            } else {
                element.textContent = Math.floor(current).toLocaleString();
            }
        }, 10);
    }

    function handleScroll() {
        statItems.forEach((item) => {
            const statNumber = item.querySelector(".stat-number");
            const targetText = statNumber.textContent;
            const targetNumber = parseInt(targetText.replace(/K|\+/g, "") + "000");

            const rect = item.getBoundingClientRect();
            if (rect.top < window.innerHeight && !item.classList.contains("visible")) {
                item.classList.add("visible");
                animateCount(statNumber, 0, targetNumber, 2000);
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll();
});

$(window).on('scroll', function() {
    $('.content-box').each(function() {
        if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
            $(this).addClass('active');
        }
    });
});
</script>

@endsection