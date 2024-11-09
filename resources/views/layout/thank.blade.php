@extends('welcome')
@section('title', 'Thank')
<!-- Top Company Welcome -->
@section('section')
<div class="container">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form - Albest Pools Contracting and Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .thank-you-message {
            display: none;
            font-size: 1.5em;
            color: #4CAF50;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Inquiry Form</h1>
    <p>Please fill out the form below to inquire about our services.</p>
    
    <form id="inquiryForm">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <button type="submit">Submit Inquiry</button>
    </form>
    
    <div class="thank-you-message" id="thankYouMessage">
        Thank you for your inquiry! Our team at Albest Pools Contracting and Service will get back to you soon.
    </div>

    <script>
        document.getElementById("inquiryForm").addEventListener("submit", function(event){
            event.preventDefault(); // Prevent form from actually submitting
            document.getElementById("inquiryForm").style.display = "none"; // Hide form
            document.getElementById("thankYouMessage").style.display = "block"; // Show thank-you message
        });
    </script>
</body>
</html>

</div>
@endsection