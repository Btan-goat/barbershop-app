// Handle form submission
document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();
    alert(
        "Thank you for your message! We will get back to you as soon as possible."
    );
    this.reset();
});
