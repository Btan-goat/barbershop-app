// JS Parallax Effect
window.addEventListener("scroll", function () {
  const hero = document.querySelector(".hero");
  let scrollY = window.scrollY;

  // Move background slightly as user scrolls
  hero.style.backgroundPositionY = `${scrollY * 0.2}px`;
});

function scrollToSection(sectionId) {
  document.getElementById(sectionId).scrollIntoView({
    behavior: "smooth",
  });
}

//Appointment Form Message
document
  .getElementById("appointmentForm")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    alert(
      "Thank you! Your appointment request has been received. We will confirm shortly."
    );
    this.reset();
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
