// Color classes for each item
const colorClasses = [
  "solv-purple",
  "solv-green",
  "solv-red",
  "solv-blue",
  "solv-orange",
];

// Show solution content based on item click
function solvShowSolution(num) {
  // Hide all solution content items (both desktop and mobile)
  document.querySelectorAll(".solv-content-box").forEach((item) => {
    item.classList.remove("solv-active");
  });

  document.querySelectorAll(".solv-mobile-content").forEach((item) => {
    item.classList.remove("solv-active");
  });

  // Reset all paragraph text colors
  document.querySelectorAll(".solv-item-text").forEach((item) => {
    item.className = "solv-item-text"; // Remove all color classes
  });

  // Remove active class from all solution items
  document.querySelectorAll(".solv-item").forEach((item) => {
    item.classList.remove("solv-active");
  });

  // Show selected solution content (both desktop and mobile)
  document.getElementById(`solv-content-${num}`).classList.add("solv-active");
  document
    .getElementById(`solv-mobile-content-${num}`)
    .classList.add("solv-active");

  // Add active class to clicked solution item
  const clickedItem = document.querySelectorAll(".solv-item")[num - 1];
  clickedItem.classList.add("solv-active");

  // Change the color of the clicked item's paragraph text
  clickedItem
    .querySelector(".solv-item-text")
    .classList.add(colorClasses[num - 1]);
}

// Initialize with first solution active when page loads
window.addEventListener("DOMContentLoaded", () => {
  solvShowSolution(1);
});
