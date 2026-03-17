let currentSlide = 0;
const totalSlides = 7;
let autoSlideInterval;

function createDots() {
  const dotContainers = document.querySelectorAll(
    ".testimonial-dots-container"
  );

  dotContainers.forEach((container) => {
    container.innerHTML = "";
    for (let i = 0; i < totalSlides; i++) {
      const dot = document.createElement("button");
      dot.className = "carousel-navigation-dot";
      dot.onclick = () => goToSlide(i);
      if (i === 0) dot.classList.add("dot-active");
      container.appendChild(dot);
    }
  });
}

function showSlide(index) {
  const slides = document.querySelectorAll(".testimonial-carousel-card");
  const dots = document.querySelectorAll(".carousel-navigation-dot");

  slides.forEach((slide, i) => {
    if (i === index) {
      slide.classList.remove("carousel-inactive");
      slide.classList.add("carousel-active");
    } else {
      slide.classList.remove("carousel-active");
      slide.classList.add("carousel-inactive");
    }
  });

  // Update all dots across all breakpoints (desktop, tablet, mobile)
  dots.forEach((dot, i) => {
    // Calculate which slide this dot represents (i % totalSlides)
    const slideIndex = i % totalSlides;
    if (slideIndex === index) {
      dot.classList.add("dot-active");
    } else {
      dot.classList.remove("dot-active");
    }
  });
}

function goToSlide(index) {
  currentSlide = index;
  showSlide(currentSlide);
  resetAutoSlide();
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  showSlide(currentSlide);
}

function startAutoSlide() {
  autoSlideInterval = setInterval(nextSlide, 3000);
}

function resetAutoSlide() {
  clearInterval(autoSlideInterval);
  startAutoSlide();
}

// Initialize carousel
createDots();
showSlide(0);
startAutoSlide();

// Pause auto-slide on hover
const carousel = document.querySelector(".carousel-container");
carousel.addEventListener("mouseenter", () => {
  clearInterval(autoSlideInterval);
});

carousel.addEventListener("mouseleave", () => {
  startAutoSlide();
});