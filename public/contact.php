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
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=UnifrakturCook:wght@700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <title>Barber Sure</title>
</head>

<body>
    <!-- Header Section -->
    <section class="header-section">
        <div class="container fade-in">
            <h1>Get in Touch</h1>
            <p class="subtitle">Have questions, feedback, or need assistance? We'd love to hear from you. Reach out to us anytime and we'll get back to you as soon as possible.</p>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <!-- Closing CTA Section -->
    <section class="cta-section">
        <div class="container fade-in">
            <h2 class="section-title">Looking for a haircut?</h2>
            <p>Browse barbershops and book your appointment today!</p>
            <a href="#" class="cta-btn btn-secondary scale-in">Find a Barbershop</a>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <!-- Combined Contact Section -->
    <section class="contact-section">
        <div class="container fade-in">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-container">
                <!-- Contact Information Column -->
                <div class="contact-info-column slide-in-left">
                    <h3>Contact Information</h3>
                    <div class="info-item scale-in">
                        <div class="info-label">Address</div>
                        <div class="info-content">123 Barber Street, Hairville, HV 12345</div>
                    </div>
                    <div class="info-item scale-in">
                        <div class="info-label">Phone</div>
                        <div class="info-content">(555) 123-4567</div>
                    </div>
                    <div class="info-item scale-in">
                        <div class="info-label">Email</div>
                        <div class="info-content">support@barberconnect.com</div>
                    </div>
                    <div class="info-item scale-in">
                        <div class="info-label">Business Hours</div>
                        <div class="info-content">Monday-Friday: 9am-7pm<br>Saturday: 10am-6pm<br>Sunday: 11am-4pm</div>
                    </div>
                </div>

                <!-- Contact Form Column -->
                <div class="contact-form-column slide-in-right">
                    <h3>Send Us a Message</h3>
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-input scale-in" placeholder="Enter your Full Name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-input scale-in" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Message *</label>
                            <textarea class="form-input scale-in" required placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit" class="submit-btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <?php include 'partials/footer.php'; ?>
    <script src="assets/js/contact.js"></script>
</body>

</html>