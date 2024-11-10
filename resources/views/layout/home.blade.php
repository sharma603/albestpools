@extends('welcome')
@section('title', 'Albest')
<!-- Top Company Welcome -->
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
@endsection

@section('slider')
<!-- Slider (Carousel) -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Carousel Item -->
        <div class="carousel-item active">
            <section class="hero d-flex align-items-center">
                <div class="container text-center">
                    <h1>Welcome To Albest Pools Contracting & Service</h1>
                    <p>Albest Pools Contracting & Service specializes in high-quality pool installation and maintenance, offering innovative solutions with a commitment to customer satisfaction.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Learn More
                    </button>

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">Albest Pools</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <u>Together</u>, we have transformed visions into stunning aquatic spaces that bring joy and relaxation to our clients. Our commitment to excellence drives us to create not just swimming pools, but immersive experiences that elevate everyday life.
                                    <br><br>
                                    To our valued clients, thank you for choosing Albest Pools. We are honored to partner with you in bringing your aquatic dreams to life. Your trust and support inspire us every day.
                                    <br><br>
                                    Let’s continue to make waves and set new standards in innovation and design. Here’s to another remarkable year of creativity and success!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection


@section('section')
<div class="container-fluid p-0">

    <div class="container border py-5">
        <div class="row border">
            <div class="col-12 text-left">
                <h2>A Brief Story About The Company</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center " style="background-color: #036298; color:white; font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; padding:5px">
                <h3>Albest Pools Contracting and Services</h3>
            </div>
        </div>
        <div class="row mt-4 border">
            <div class="col-lg-6 col-md-12 mb-4  p-3">
                <p>
                    At Albest Pools Contracting and Services, we specialize in crafting stunning pools and tranquil water features that transform outdoor spaces into serene retreats. Based in Doha, our journey began with a commitment to excellence in private pool installation and maintenance, quickly evolving to serve the diverse needs of real estate and resort developments.
                </p>
                <p>
                    Our in-house services encompass every aspect of pool creation, including design, engineering, production, installation, and aftercare. With professionalism and timely project delivery, we pride ourselves on quality solutions that exceed clients' expectations.
                </p>
                <p>
                    Choose Albest Pools for your next project to experience a blend of luxury, functionality, and enduring beauty in your outdoor oasis.
                </p>
                <button class="btn" style="margin-left: 100px; margin-top:20px;margin-bottom:5px; background-color:#036298; padding:7px; color:white; font-family:'Sansita One', sans-serif; font-size:22px;">More About</button>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <img src="{{ asset('asset/images/worked_pic.png') }}" alt="worked_pic">

            </div>
        </div>
    </div>
    <!-- this is for image shows -->
    <!-- counter section -->
    <div>
        <div class="container">
            <div class="stats-container">
                <!-- Stat Item 1 -->
                <div class="stat-item">
                    <div class="stat-number">14K+</div>
                    <div class="stat-description">Happy Customers</div>
                </div>

                <div class="divider"></div>

                <!-- Stat Item 2 -->
                <div class="stat-item">
                    <div class="stat-number">27K+</div>
                    <div class="stat-description">Product Sold</div>
                </div>

                <div class="divider"></div>

                <!-- Stat Item 3 -->
                <div class="stat-item">
                    <div class="stat-number">15+</div>
                    <div class="stat-description">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
    <!-- start this is inquery form -->
     
    <div class="container">
    <div class="form-container">
        <h2 class="form-header">Inquiry</h2>
        <form id="inquiryForm" action="{{ route('enqueryform') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
    </div>
    <div class="mb-3">
        <label for="service" class="form-label">Select Service</label>
        <select class="form-control" id="service" name="service">
            <option value="">Select a Service</option>
            <option value="Swimming Pool Cleaning">Swimming Pool Cleaning</option>
            <option value="Swimming Pool Construction">Swimming Pool Construction</option>
            <option value="Swimming Pool Maintenance">Swimming Pool Maintenance</option>
            <option value="Swimming Pool Maintenance">Automatic Irrigation System</option>
            <option value="Swimming Pool Maintenance">Water Feature and Fountains</option>
            <option value="Swimming Pool Maintenance">Jacuzzi, Spa, and Steam Room</option>
            <option value="Swimming Pool Maintenance">Landscape Lighting</option>
            <option value="Swimming Pool Maintenance">Construction and Maintenance</option>
           
        </select>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message"></textarea>
    </div>
            <button type="submit" class="btn btn-primary w-100">Submit Inquiry</button>
        </form>
        <div class="form-footer">
            <p>We'll get back to you shortly!</p>
        </div>
    </div>
</div>
    <!-- end this is inquery form -->

   
    <!-- service  -->
    <div class="container my-5 ">
        <h1 class="section-title">Our Services</h1>
        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100">
                    <div class="card-body text-center">
                        <div class="border">
                            <img src="{{ asset('asset/images/Construction.webp') }}" class="card-img-top img-fluid" alt="Construction Service">

                        </div>
                        <h2 class="card-title">Construction</h2>
                        <p class="card-text">We provide construction services for any type of swimming pool as per clients' requirements and needs.</p>
                        <a href="" class="btn btn-primary btn-enquire">Enquire Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100">
                    <div class="card-body text-center">
                        <div class="border">
                            <img src="{{ asset('asset/images/Renovation.webp') }}" class="card-img-top img-fluid" alt="Renovation Service">

                        </div>
                        <h2 class="card-title">Renovation</h2>
                        <p class="card-text">We provide customized services to renovate your swimming pool and give it an enhanced look and functionality.</p>
                        <a href="" class="btn btn-primary btn-enquire">Enquire Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100">
                    <div class="card-body text-center">
                        <div class="border">
                            <img src="{{ asset('asset/images/Maintenance.webp') }}" class="card-img-top img-fluid" alt="Maintenance Service">

                        </div>
                        <h2 class="card-title">Maintenance</h2>
                        <p class="card-text">We provide annual maintenance services to take care of your swimming pool at very affordable prices.</p>
                        <a href="" class="btn btn-primary btn-enquire">Enquire Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card service-card h-100">
                    <div class="card-body text-center">
                        <div class="border">
                            <img src="{{ asset('asset/images/Cleaning.jpg') }}" class="card-img-top img-fluid" alt="Cleaning Service">

                        </div>
                        <h2 class="card-title">Cleaning</h2>
                        <p class="card-text">We also provide swimming pool cleaning services, and we have a dedicated team of experts to help you.</p>
                        <a href="" class="btn btn-primary btn-enquire">Enquire Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- mission section -->
     
    <!-- end mission mission section -->
</div>
<div class="container mission-section">
    <!-- Left Side Image -->
    <div class="col-md-6 image-container">
        <img src="{{asset('asset/images/Construction.webp')}}" alt="Mission Image">
    </div>

    <!-- Right Side Content -->
    <div class="col-md-6 content-container">
        <h2>MISSION</h2>
        
        <div class="content-box">
            <div class="number">01</div>
            <div>
                <h4>Commitment to Excellence</h4>
                <p>Mount Everest is dedicated to elevating Doha's pool service experience by delivering top-notch solutions...</p>
            </div>
        </div>
        
        <div class="content-box">
            <div class="number">02</div>
            <div>
                <h4>Efficiency in Operations</h4>
                <p>We prioritize efficiency in all our operations, streamlining processes to provide prompt and effective pool services...</p>
            </div>
        </div>
        
        <div class="content-box">
            <div class="number">03</div>
            <div>
                <h4>Client Satisfaction as a Priority</h4>
                <p>At Mount Everest, client satisfaction is our primary goal. We understand the unique needs of our clients in Doha...</p>
            </div>
        </div>
        
        <div class="content-box">
            <div class="number">04</div>
            <div>
                <h4>Setting Industry Standards</h4>
                <p>Our mission extends beyond providing excellent pool services; we aspire to set new industry standards...</p>
            </div>
        </div>
    </div>
</div>
<!-- Vision Section -->
<section class="vision-section container text-center my-5 p-4 rounded shadow">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12">
            <h2 class="vision-title">Our Vision</h2>
            <p class="vision-text">
                We envision <span class="highlight">Albest Pools Contracting and Service</span> as Doha’s most trusted name in pool contracting.
                Our commitment to <span class="highlight">reliability</span>, <span class="highlight">innovation</span>, and <span class="highlight">excellence</span> aims to set new industry standards in
                pool design, construction, and maintenance, delivering exceptional value and satisfaction to our clients.
            </p>
        </div>
    </div>
<!-- Vision Section -->
@endsection
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
                element.textContent = end;
                clearInterval(interval);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 10);
    }

    function handleScroll() {
        statItems.forEach((item, index) => {
            const statNumber = item.querySelector(".stat-number");
            const targetNumber = parseInt(statNumber.textContent.replace(/K|\+/g, "") + "000"); // Handle "K+" suffix
            const rect = item.getBoundingClientRect();
            if (rect.top < window.innerHeight && !item.classList.contains("visible")) {
                item.classList.add("visible");
                animateCount(statNumber, 0, targetNumber, 2000); // 2000ms duration for counting
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Initial check in case elements are already in view
});



    // Scroll Animation for Content Boxes
    $(window).on('scroll', function() {
        $('.content-box').each(function() {
            if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
                $(this).addClass('active');
            }
        });
    });
</script>