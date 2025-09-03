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
    <link rel="stylesheet" href="assets/css/register.css">
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
            <h1>Register Your Barbershop</h1>
            <p class="subtitle">Join our platform and reach more customers online. Get your barbershop listed and let clients book appointments directly with you.</p>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <!-- Why Register Section -->
    <section class="benefits-section">
        <div class="container fade-in">
            <h2 class="section-title">Why Join Us?</h2>
            <div class="benefits-grid">
                <div class="benefit-item slide-in-left">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="benefit-title">Increase Visibility</h3>
                    <p>Get discovered by new clients searching for quality barbershops in your area.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3 class="benefit-title">Showcase Services</h3>
                    <p>Highlight your specialties and attract clients looking for your specific expertise.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="benefit-title">Manage Appointments</h3>
                    <p>Streamline your booking process with our easy-to-use appointment system.</p>
                </div>
                <div class="benefit-item slide-in-right">
                    <div class="benefit-icon">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <h3 class="benefit-title">Grow Your Business</h3>
                    <p>Expand your client base and increase revenue with our platform.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- Form Section -->
    <section class="form-section">
        <div class="container fade-in">
            <div class="instructions-content">
                <h2 class="section-title">How to Register</h2>
                <p>Fill out the form below with your barbershop details. Once submitted, your shop will appear on our platform and be ready for clients to book appointments.</p>
            </div>
        </div>
        <div class="container fade-in">
            <form class="registration-form scale-in" id="registrationForm">
                <div class="form-group">
                    <label class="form-label">Barbershop Name *</label>
                    <input type="text" class="form-input scale-in" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Owner Name</label>
                    <input type="text" class="form-input scale-in" placeholder="Optional">
                </div>
                <div class="form-group">
                    <label class="form-label">Location/Address *</label>
                    <input type="text" class="form-input scale-in" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Services Offered *</label>
                    <textarea class="form-input" required placeholder="List the services you provide (e.g., Haircuts, Beard Trimming, Shaves)"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Contact Info *</label>
                    <input type="text" class="form-input" required placeholder="Phone number or email">
                </div>
                <button type="submit" class="btn-primary submit-btn">Register My Shop</button>
            </form>
        </div>
    </section>

    <div class="red-x">
        <img src="../storage/uploads/red-x.svg" alt="">
    </div>

    <!-- Closing CTA Section -->
    <section class="cta-section">
        <div class="container fade-in">
            <h2 class="section-title">Already registered?</h2>
            <p>Browse barbershops and start booking appointments today.</p>
            <a href="#" class="btn-primary scale-in">View Barbershops</a>
        </div>
    </section>

    <div class="section-seal">
        <img src="assets/img/seal.png" alt="S">
    </div>

    <?php include 'partials/footer.php'; ?>
</body>

</html>