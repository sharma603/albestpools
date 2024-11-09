@extends('welcome')
@section('title', 'Thank')
<!-- Top Company Welcome -->
<style>
        .thank-you-message {
            display: none;
            font-size: 1.5em;
            color: #4CAF50;
            margin-top: 20px;
        }
    </style>
@section('section')


<div class="container">
    <h1>Inquiry Form</h1>
    <p>Please fill out the form below to inquire about our services.</p>
    
    <form id="inquiryForm" action="{{route ('send.email')}}" method="post">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="fullName" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <button type="submit">Submit Inquiry</button>
    </form>
    
    <div class="thank-you-message" id="thankYouMessage">
        Thank you for your inquiry! Our team at Albest Pools Contracting and Service will get back to you soon.
    </div>
    </div>
    <!-- <script>
        document.getElementById("inquiryForm").addEventListener("submit", function(event){
            event.preventDefault(); // Prevent form from actually submitting
            document.getElementById("inquiryForm").style.display = "none"; // Hide form
            document.getElementById("thankYouMessage").style.display = "block"; // Show thank-you message
        });
    </script> -->


@endsection