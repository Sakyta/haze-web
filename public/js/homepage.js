let slideIndex = 1;
let slideInterval;

document.addEventListener("DOMContentLoaded", function () {
  showSlides(slideIndex);
});

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("show");
  }
  slides[slideIndex - 1].classList.add("show");
}

function startSlideInterval() {
  slideInterval = setInterval(function () {
    plusSlides(1);
  }, 10000);
}

function stopSlideInterval() {
  clearInterval(slideInterval);
}

document.addEventListener("DOMContentLoaded", function () {
  showSlides(slideIndex);
  startSlideInterval();
});

document
  .querySelector(".container")
  .addEventListener("mouseover", stopSlideInterval);
document
  .querySelector(".container")
  .addEventListener("mouseout", startSlideInterval);
