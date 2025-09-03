<?php include 'partials/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Sure</title>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <!-- Icons from Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=UnifrakturCook:wght@700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title fade-in">Welcome to <span class="hero-highlight">Barber Sure</span></h1>
            <h3 class="hero-subtitle fade-in">Find and Book the Best Barbershops Near You</h3>
            <div class="hero-buttons">
                <button class="btn-primary fade-in" onclick="scrollToSection('services')">Book Appointment</button>
                <button class="btn-secondary fade-in" onclick="scrollToSection('services')">Search Barbershop</button>
            </div>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <!-- Quick About Section -->
    <section class="section about">
        <div class="about-content">
            <h2 class="section-title fade-in">Welcome to Barber Sure</h2>
            <p class="fade-in">We connect you with the best barbershops in your area. Our platform makes it easy to discover, book, and enjoy quality grooming services from talented professionals. Experience the convenience of online booking and find your perfect style today.
            </p>
            <a href="#" class="btn-primary fade-in">Learn More</a>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- Featured Barbershops Section -->
    <section class="section shops">
        <h2 class="section-title fade-in">Featured Barbershops</h2>
        <div class="shop-grid fade-in">
            <div class="shop-card scale-in">
                <div class="shop-img">Barbershop Image</div>
                <div class="shop-info">
                    <h3>Classic Cuts</h3>
                    <div class="shop-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Downtown District</span>
                    </div>
                    <p>Specializing in traditional cuts and straight razor shaves.</p>
                </div>
            </div>

            <div class="shop-card scale-in">
                <div class="shop-img">Barbershop Image</div>
                <div class="shop-info">
                    <h3>Modern Styles</h3>
                    <div class="shop-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Uptown Area</span>
                    </div>
                    <p>Contemporary styles and trends for the modern gentleman.</p>
                </div>
            </div>

            <div class="shop-card scale-in">
                <div class="shop-img">Barbershop Image</div>
                <div class="shop-info">
                    <h3>Executive Grooming</h3>
                    <div class="shop-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Financial District</span>
                    </div>
                    <p>Premium services for professionals on the go.</p>
                </div>
            </div>
            <div class="shop-card scale-in">
                <div class="shop-img">Barbershop Image</div>
                <div class="shop-info">
                    <h3>Tipuno</h3>
                    <div class="shop-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Big Ben</span>
                    </div>
                    <p>Premium services for professionals on the go.</p>
                </div>
            </div>
        </div>
        <div class="view-all">
            <a href="#" class="btn-secondary fade-in">View All Barbershops</a>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- Why Book With Us Section -->
    <section class="section why-us">
        <div class="container">
            <h2 class="section-title fade-in">Why Book With Us</h2>
            <div class="benefits fade-in">
                <div class="benefit slide-in-left">
                    <div class="benefit-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Easy Booking</h3>
                    <p>Book appointments in just a few clicks, 24/7 from any device.</p>
                </div>

                <div class="benefit fade-in">
                    <div class="benefit-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Quality Assured</h3>
                    <p>All barbershops are vetted for quality and customer satisfaction.</p>
                </div>

                <div class="benefit slide-in-right">
                    <div class="benefit-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Save Time</h3>
                    <p>No more waiting in line or phone calls. Book instantly online.</p>
                </div>
            </div>
            <div class="cta-center">
                <a href="#" class="btn-primary fade-in">Book an Appointment</a>
            </div>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <!-- Register Your Barbershop Section -->
    <section class="section register">
        <div class="container">
            <div class="register-content fade-in">
                <h2 class="section-title ">Register Your Barbershop</h2>
                <p class="scale-in">Join our platform to reach more customers and grow your business. We provide the tools to manage bookings, showcase your work, and connect with clients.</p>
                <a href="#" class="btn-secondary">Register Your Shop</a>
            </div>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- Stay Connected Section -->
    <section class="section stay-connected">
        <div class="container fade-in">
            <div class="stay-connected-content">
                <h2 class="section-title">Stay Connected</h2>
                <p class="scale-in">Have questions or feedback? We'd love to hear from you. Get in touch with our team for assistance or suggestions.</p>
                <a href="#" class="btn-primary">Contact Us</a>
            </div>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <?php include 'partials/footer.php'; ?>
    <script src="assets/js/home.js"></script>
</body>

</html>