const boxes = document.querySelectorAll(".about-page-box");
const images = document.querySelectorAll(".about-page-image-section img");
const placeholder = document.querySelector(".placeholder");
const arrows = document.querySelectorAll(".about-arrow");

function updateArrowPosition(boxIndex) {
  const box = boxes[boxIndex];
  const imageContainer = document.querySelector(".about-page-image-section");
  const arrow = arrows[boxIndex];
  const containerRect = document
    .querySelector(".about-page-container")
    .getBoundingClientRect();
  const boxRect = box.getBoundingClientRect();
  const imageRect = imageContainer.getBoundingClientRect();
  const startX = boxRect.right - containerRect.left;
  const startY = boxRect.top + boxRect.height / 2 - containerRect.top;
  const endX = imageRect.left - containerRect.left - 10;
  const endY = imageRect.top + imageRect.height / 2 - containerRect.top;
  arrow.setAttribute("x1", startX);
  arrow.setAttribute("y1", startY);
  arrow.setAttribute("x2", endX);
  arrow.setAttribute("y2", endY);
}

// Initialize first image and arrow on page load
window.addEventListener("DOMContentLoaded", () => {
  // Show first image (already has active class in HTML)
  const firstImage = document.getElementById("image1");
  if (firstImage) {
    firstImage.classList.add("active");
  }

  // Show first arrow
  updateArrowPosition(0);
  arrows[0].classList.add("active");
});

boxes.forEach((box, index) => {
  box.addEventListener("click", () => {
    // Reset
    boxes.forEach((b) => b.classList.remove("active"));
    images.forEach((img) => img.classList.remove("active"));
    arrows.forEach((arrow) => arrow.classList.remove("active"));
    // Activate clicked box
    box.classList.add("active");
    // Show correct image
    const targetImage = document.getElementById(`image${index + 1}`);
    if (targetImage) {
      if (placeholder) placeholder.style.display = "none"; // hide placeholder
      targetImage.classList.add("active");
    }
    // Arrow
    updateArrowPosition(index);
    arrows[index].classList.add("active");
  });
});

window.addEventListener("resize", () => {
  const activeBox = document.querySelector(".about-page-box.active");
  if (activeBox) {
    const activeIndex = Array.from(boxes).indexOf(activeBox);
    updateArrowPosition(activeIndex);
  }
});
