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
     <div></div>
     <!-- this is inquery form -->
 
 <div class="container mt-5">
    <h2>Inquiry Form</h2>

    <!-- Success message -->
    <div id="success-message" class="alert alert-success d-none"></div>

    <form id="inquiry-form">
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number">
        </div>
        <div class="mb-3">
            <label for="service_type" class="form-label">Service Type</label>
            <input type="text" class="form-control" id="service_type" name="service_type">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</div>
@endsection