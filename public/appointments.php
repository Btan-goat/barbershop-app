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
    <link rel="stylesheet" href="assets/css/appointments.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&family=UnifrakturCook:wght@700&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <title>Barber Sure</title>
</head>

<body>
    <!-- Intro Section -->
    <section class="intro">
        <div class="container">
            <h1 class="fade-in">Appointments</h1>
            <p class="fade-in">
                Find and book trusted barbershops near you with ease. Our platform helps you discover skilled barbers, compare services, and schedule appointments—all in one convenient place.
            </p>
            <p class="fade-in">
                We make it simple to get the haircut or grooming service you want, at a time that works for you. Connect with professional barbers who understand your style and enjoy a hassle-free booking experience.
            </p>

        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <!-- Search Section -->
    <section class="search-section">
        <div class="container">
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search barbershop by name or location...">
                <button class="btn-primary search-btn">Search</button>
            </div>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <!-- Barbershop Listing -->
    <section class="listing-section">
        <div class="container fade-in">
            <h2 class="section-title">Available Barbershops</h2>
            <div class="shops-grid fade-in">
                <!-- Barbershop Card 1 -->
                <div class="shop-card slide-in-left">
                    <div class="card-content">
                        <h3 class="shop-name">Classic Cuts</h3>
                        <p class="shop-location">
                            <i class="fas fa-map-marker-alt location-icon"></i>
                            Downtown District
                        </p>
                        <p class="shop-services">Haircuts, Beard Trimming, Shaves</p>
                        <button class="book-btn btn-primary" onclick="showBookingForm(1)">Book Now</button>
                    </div>
                </div>

                <!-- Barbershop Card 2 -->
                <div class="shop-card fade-in">
                    <div class="card-content">
                        <h3 class="shop-name">Modern Styles</h3>
                        <p class="shop-location">
                            <i class="fas fa-map-marker-alt location-icon"></i>
                            Westside Mall
                        </p>
                        <p class="shop-services">Fades, Hair Coloring, Styling</p>
                        <button class="book-btn btn-primary" onclick="showBookingForm(2)">Book Now</button>
                    </div>
                </div>

                <!-- Barbershop Card 3 -->
                <div class="shop-card slide-in-right">
                    <div class="card-content">
                        <h3 class="shop-name">Gentleman's Grooming</h3>
                        <p class="shop-location">
                            <i class="fas fa-map-marker-alt location-icon"></i>
                            Historic District
                        </p>
                        <p class="shop-services">Hot Towel Shaves, Haircuts, Facial Treatments</p>
                        <button class="book-btn btn-primary" onclick="showBookingForm(3)">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- Booking Form Section -->
    <section class="booking-section" id="bookingForm">
        <div class="container fade-in">
            <h2 class="section-title">Book Your Appointment</h2>
            <form class="booking-form scale-in">
                <div class="form-group">
                    <label class="form-label">Your Name</label>
                    <input type="text" class="form-input scale-in" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Contact Info</label>
                    <input type="text" class="form-input scale-in" required placeholder="Phone or Email">
                </div>
                <div class="form-group">
                    <label class="form-label">Date & Time</label>
                    <input type="datetime-local" class="form-input scale-in" required>
                </div>
                <input type="hidden" id="barbershopId">
                <button type="submit" class="submit-btn btn-primary">Confirm Appointment</button>
            </form>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <?php include 'partials/footer.php'; ?>
    <script src="assets/js/appointments.js"></script>
</body>

</html>