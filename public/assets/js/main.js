// Mobile menu toggle functionality
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    menuToggle.addEventListener("click", function () {
        navLinks.classList.toggle("active");

        // Change icon based on menu state
        const icon = this.querySelector("i");
        if (navLinks.classList.contains("active")) {
            icon.classList.remove("fa-bars");
            icon.classList.add("fa-times");
        } else {
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
        }
    });

    // Close menu when clicking on links (mobile)
    const navItems = document.querySelectorAll(".nav-links a");
    navItems.forEach((item) => {
        item.addEventListener("click", () => {
            navLinks.classList.remove("active");
            menuToggle.querySelector("i").classList.remove("fa-times");
            menuToggle.querySelector("i").classList.add("fa-bars");
        });
    });

    // Header scroll effect
    const header = document.querySelector("header");
    let lastScroll = 0;

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll <= 0) {
            header.style.background = "rgba(0, 0, 0, 0.6);";
            return;
        }

        if (currentScroll > lastScroll && currentScroll > 100) {
            // Scroll down
            header.style.transform = "translateY(-100%)";
        } else {
            // Scroll up
            header.style.transform = "translateY(0)";
            header.style.background = "rgba(0, 0, 0, 0.6);";
        }

        lastScroll = currentScroll;
    });
});

//Scorlling animation
document.addEventListener("DOMContentLoaded", () => {
    // Select all elements that should animate
    const animElements = document.querySelectorAll(
        ".fade-in, .scale-in, .slide-in-left, .slide-in-right"
    );

    // Create IntersectionObserver
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible"); // trigger animation
                } else {
                    entry.target.classList.remove("visible"); // reset for re-animation
                }
            });
        },
        { threshold: 0.1 } // trigger when 10% of element is visible
    );

    // Observe each element
    animElements.forEach((el) => observer.observe(el));
});
