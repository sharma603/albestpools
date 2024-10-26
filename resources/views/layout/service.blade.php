<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albest Pools - Our Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            height: 200vh; /* To create scrolling space */
            background-color: #f8f9fa;
        }

        .service-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            opacity: 0;
            transform: translateX(-100px);
            transition: all 0.5s ease-in-out;
        }

        .service-section.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .service-item {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 30%; /* Adjust width as needed */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Welcome to Albest Pools</h1>
    <h2 class="text-center">Our Services</h2>

    <div class="row service-section" id="serviceSection">
        <div class="col-md-4 service-item">
            <h3>Pool Installation</h3>
            <p>High-quality pool installation services tailored to your needs.</p>
        </div>
        <div class="col-md-4 service-item">
            <h3>Pool Maintenance</h3>
            <p>Comprehensive maintenance plans to keep your pool in perfect condition.</p>
        </div>
        <div class="col-md-4 service-item">
            <h3>Renovation Services</h3>
            <p>Transform your old pool with our expert renovation services.</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Function to check if element is in view
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Animation on scroll
    function handleScroll() {
        const serviceSection = document.getElementById('serviceSection');
        if (isElementInViewport(serviceSection)) {
            serviceSection.classList.add('visible');
        }
    }

    window.addEventListener('scroll', handleScroll);
</script>
</body>
</html>
