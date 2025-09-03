<?php include "partials/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=UnifrakturCook:wght@700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Barber Sure</title>
</head>

<body>
    <!-- Intro Section -->
    <section class="intro">
        <div class="container">
            <h1 class="fade-in">About Us</h1>
            <p class="fade-in">We believe that everyone deserves a great haircut from a professional who understands their style and preferences. That's why we've created a seamless experience that connects clients with barbers who are perfect for their needs.</p>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <!-- Our Mission Section -->
    <section class="mission">
        <div class="container">
            <h2 class="fade-in section-title">Our Mission</h2>
            <p class="fade-in">Our mission is to elevate the barbering industry by creating meaningful connections between barbers and clients while providing tools that help barbershops thrive. We strive to make professional grooming services accessible to everyone while preserving the artistry and tradition of barbering.</p>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container fade-in">
            <h2 class="section-title">How It Works</h2>
            <div class="steps-container">
                <div class="step-column slide-in-left">
                    <h3>For Clients</h3>
                    <ul>
                        <li><span class="highlight">Discover</span> - Browse through curated profiles of top-rated barbershops in your area</li>
                        <li><span class="highlight">Book</span> - Select your preferred service, date, and time with just a few clicks</li>
                        <li><span class="highlight">Enjoy</span> - Experience exceptional service from skilled professionals</li>
                        <li><span class="highlight">Review</span> - Share your experience and help others find their perfect barber</li>
                    </ul>
                </div>
                <div class="step-column slide-in-right">
                    <h3>For Barbershops</h3>
                    <ul>
                        <li><span class="highlight">Register</span> - Create your professional profile showcasing your services and expertise</li>
                        <li><span class="highlight">Manage</span> - Use our intuitive tools to handle appointments and client records</li>
                        <li><span class="highlight">Grow</span> - Reach new clients and build your reputation through our platform</li>
                        <li><span class="highlight">Excel</span> - Focus on your craft while we handle the business side of bookings</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="container fade-in">
            <h2 class="section-title">Why Choose Us</h2>
            <ul class="benefits-list">
                <li class="slide-in-left"><span class="highlight">Curated Quality</span> - Every barbershop on our platform is vetted for quality and professionalism</li>
                <li class="slide-in-right"><span class="highlight slide-in-left">Seamless Booking</span> - Our intuitive system makes scheduling appointments effortless</li>
                <li class="slide-in-left"><span class="highlight">Time Savings</span> - No more phone tag or uncertainty about availability</li>
                <li class="slide-in-right"><span class="highlight">Community Focus</span> - We're building a network that supports local businesses and connects communities</li>
            </ul>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container fade-in">
            <h2 class="section-title">Be Part of the Community</h2>
            <p>Join thousands of clients and barbers who are already transforming the grooming experience. Whether you're looking for the perfect cut or wanting to grow your barbering business, BarberConnect is your ultimate destination.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary slide-in-left">Book an Appointment</a>
                <a href="#" class="btn btn-secondary slide-in-right">Register Your Barbershop</a>
            </div>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <?php include "partials/footer.php" ?>
    <script src="assets/js/main.js"></script>
</body>

</html>