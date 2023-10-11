// scroll to top button
function scrollToTop() {
    window.scroll({
        top: 0,
        behavior: "smooth",
    });
}

window.addEventListener("scroll", function () {
    const scrollToTopButton = document.getElementById("scrollToTop");
    if (scrollY >= 100) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
});

const scrollToTopButton = document.getElementById("scrollToTop");
scrollToTopButton.addEventListener("click", scrollToTop);
