@extends('welcome')
@section('title', 'Service')

@section('section')
<!-- Hero Section -->
<section class="hero d-flex align-items-center text-center">
    <div class="container">
        <h1>About Albest Pools Contracting & Service</h1>
        <p>Your Partner for Quality Pool Construction and Maintenance in Doha</p>
    </div>
</section>

<!-- About Content Section -->
<div class="content-section py-5">
    <div class="container">
        <div class="row">
            <!-- About Content -->
            <div class="col-md-6 mb-4">
                <h2>Who We Are</h2>
                <p>Founded in Doha, Albest Pools Contracting & Service has established itself as a leader in custom pool design and maintenance. Our skilled team is dedicated to transforming outdoor spaces with luxurious pools and water features that are both functional and aesthetically pleasing.</p>
                <p>From small residential pools to large-scale resort features, we specialize in high-quality craftsmanship and innovative solutions that bring our clients’ visions to life.</p>
                <a href="#contact" class="btn btn-custom mt-3">Contact Us</a>
            </div>

            <!-- Image Section -->
            <div class="col-md-6">
                <img src="{{ asset('asset/images/pool-service.jpg') }}" alt="Albest Pools Services" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

<!-- Mission Section -->
<div class="container mission-section my-5">
    <div class="row">
        <!-- Left Side Image -->
        <div class="col-md-6 image-container">
            <img src="{{ asset('asset/images/Construction.webp') }}" alt="Mission Image" class="img-fluid rounded">
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

<!-- Vision Statement -->
<div class="container vision-section py-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Our Vision</h3>
            <p>We envision becoming Doha’s most trusted pool contracting service, known for reliability, innovation, and setting industry standards in pool design and maintenance.</p>
        </div>
    </div>
</div>

@endsection

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
