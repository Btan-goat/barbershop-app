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
