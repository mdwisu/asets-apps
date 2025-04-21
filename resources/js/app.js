import "./bootstrap";
import "flowbite";

// ============= SLIDER SWIPER FOR CARD ====================
const swiper = new Swiper(".swiper-container", {
    loop: true,
    spaceBetween: 9,
    autoplay: {
        delay: 10000,
        disableOnInteraction: false,
    },
});

document
    .getElementById("next")
    .addEventListener("click", () => swiper.slideNext());
document
    .getElementById("prev")
    .addEventListener("click", () => swiper.slidePrev());

let currentIndex = 0;
const slider = document.getElementById("slider");
const totalSlides = slider.children.length;

const nextButton = document.getElementById("next");
const prevButton = document.getElementById("prev");
