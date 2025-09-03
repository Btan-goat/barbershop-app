// Function to show the booking form
function showBookingForm(shopId) {
    document.getElementById("barbershopId").value = shopId;
    document.getElementById("bookingForm").style.display = "block";
    document
        .getElementById("bookingForm")
        .scrollIntoView({ behavior: "smooth" });
}

// Handle form submission
document
    .getElementById("appointmentForm")
    .addEventListener("submit", function (e) {
        e.preventDefault();
        alert("Appointment booked successfully!");
        this.reset();
        document.getElementById("bookingForm").style.display = "none";
    });
