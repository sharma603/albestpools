@extends('welcome')
@section('title', 'Contact')
<!-- Top Company Welcome -->
@section('section')
 <!-- Contact Section -->
 <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-5">Contact Us</h1>
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-6 mb-4 contact-info">
                    <h2>Albest Pools Contracting & Service</h2>
                    <p><strong>Address:</strong> Doha, Qatar</p>
                    <p><strong>Phone:</strong> <a href="tel:+97430030215">+974 30030215</a></p>
                    <p><strong>WhatsApp:</strong> <a href="https://wa.me/97430030215">+974 30030215</a></p>
                    <p><strong>Email:</strong> <a href="mailto:info@ablestpools.com">info@albestpools.com</a></p>
                    <p><strong>Website:</strong> <a href="https://albestpools.com/" target="_blank">www.albestpools.com</a></p>

                    <!-- Social Media Links -->
                    <div class="social-icons mt-4">
                        <a href="https://www.facebook.com/profile.php?id=61567498243710" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/ablestpools" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/ablestpools" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/ablestpools" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <!-- Google Map Embed -->
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14432.173878920486!2d51.5337321!3d25.2691231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c50036ce5931%3A0x507ffcb9703c2e95!2sAlbest%20Pools%20Contracting%20and%20Services!5e0!3m2!1sen!2sqa!4v1730034000497!5m2!1sen!2sqa" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- Contact Button -->
            <div class="text-center mt-5">
                <a href="mailto:info@ablestpools.com" class="btn btn-custom">Send Us a Message</a>
            </div>
        </div>
    </section>
@endsection