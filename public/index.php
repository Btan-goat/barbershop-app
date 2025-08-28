<?php include 'partials/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Sure</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=UnifrakturCook:wght@700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title fade-in"><span class="hero-highlight">Fresh Cuts</span> Clean Style</h1>
            <h3 class="hero-subtitle fade-in">Professional barbers, modern styles, and classic service.</h3>
            <button class="btn-primary fade-in" onclick="scrollToSection('services')"><span class="btn-primary-span">Book Appointment</span></button>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <!-- Intro Section -->
    <section class="intro-section section flex items-center justify-center">
        <div class="intro-content max-w-3xl text-center">
            <h2 class="section-title fade-in">Welcome to Barber Sure</h2>
            <p class="fade-in">Your destination for classic cuts, premium grooming, and a timeless barbershop experience. Discover our services, browse our shop, and book your next appointment with ease.</p>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- Quick Highlights Section -->
    <section class="section highlights-section">
        <div class="highlights-container">
            <div class="highlights-header">
                <h2>Why Choose Barber Sure</h2>
                <p>Discover what sets our barbershop apart from the rest with our exceptional services and commitment to quality.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Experienced Barbers -->
                <div class="highlight-card">
                    <div class="icon-container">
                        <i class="fas fa-scissors"></i>
                    </div>
                    <h3>Experienced Barbers</h3>
                    <p>Our master barbers bring years of expertise and precision to every cut, ensuring you get the perfect style every time.</p>
                </div>

                <!-- Affordable Pricing -->
                <div class="highlight-card">
                    <div class="icon-container">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3>Affordable Pricing</h3>
                    <p>Quality grooming shouldn't break the bank. We offer competitive prices for premium services without compromising on quality.</p>
                </div>

                <!-- Modern & Classic Styles -->
                <div class="highlight-card">
                    <div class="icon-container">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3>Modern & Classic Styles</h3>
                    <p>From timeless classics to contemporary trends, we master all styles to keep you looking sharp and stylish.</p>
                </div>

                <!-- Walk-ins Welcome -->
                <div class="highlight-card">
                    <div class="icon-container">
                        <i class="fas fa-door-open"></i>
                    </div>
                    <h3>Walk-ins Welcome</h3>
                    <p>No appointment necessary! Feel free to walk in anytime for a quick trim or a complete style transformation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services-section" style="background: url('../storage/uploads/gray_gradient.png');" id="services">
        <h2 class="section-title fade-in">Our Services</h2>
        <div class="services-grid">
            <div class="service-card scale-in">
                <div class="service-icon">
                    <i class="fas fa-cut"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 slide-in-left">Classic Haircut</h3>
                <p class="slide-in-left">Traditional haircut with modern precision. Includes consultation, cut, and style.</p>
                <p class="text-2xl font-bold text-[#d4af37] mt-4">$35</p>
            </div>
            
            <div class="service-card scale-in">
                <div class="service-icon">
                    <i class="fas fa-magic"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 fade-in">Beard Trim & Style</h3>
                <p class="fade-in">Professional beard shaping and trimming with hot towel treatment.</p>
                <p class="text-2xl font-bold text-[#d4af37] mt-4">$25</p>
            </div>
            
            <div class="service-card scale-in">
                <div class="service-icon">
                    <i class="fas fa-spa"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 slide-in-right">Royal Treatment</h3>
                <p class="slide-in-right">Complete package: haircut, beard trim, hot towel, and luxury products.</p>
                <p class="text-2xl font-bold text-[#d4af37] mt-4">$60</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="section" style="background: #f8f9fa;">
        <h2 class="section-title">Our Work</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9d7ea95d-5e2b-4d1e-b6e6-03d2a713a2a5.png" alt="Before and after transformation of a gentleman's haircut from messy to sharp fade" />
            </div>
            <div class="gallery-item">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c07d957f-f237-402f-b47c-512f81572c02.png" alt="Barber carefully shaping a client's beard with precision clippers in a well-lit barber chair" />
            </div>
            <div class="gallery-item">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5fba4f85-c0d6-42d7-aea7-d62373b25a41.png" alt="Vintage barber station setup with classic tools and modern equipment" />
            </div>
            <div class="gallery-item">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/3c7aaa75-d433-4905-88c8-e33033888b30.png" alt="Satisfied client smiling after receiving a fresh haircut and beard trim" />
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
        <h2 class="section-title">Book Your Appointment</h2>
        <div class="contact-form">
            <form id="appointmentForm">
                <div class="form-group">
                    <input type="text" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <input type="date" required>
                </div>
                <div class="form-group">
                    <input type="time" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Special Requests or Notes"></textarea>
                </div>
                <button type="submit" class="btn-primary w-full">Confirm Booking</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <h3 class="text-2xl mb-4">CLASSIC CUTS BARBERSHOP</h3>
        <p>123 Barber Street, Downtown City</p>
        <p>Open Monday - Saturday: 9AM - 7PM</p>
        <p>Phone: (555) 123-4567</p>
        
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        
        <p class="mt-4">© 2024 Classic Cuts Barbershop. All rights reserved.</p>
    </footer>
    <script src="assets/js/home.js"></script>
</body>
</html>

