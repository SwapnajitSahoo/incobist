document.addEventListener("DOMContentLoaded", function () {
  const accordionItems = document.querySelectorAll(".about-us-accordion-item");
  const accordionColumn = document.querySelector(".about-us-accordion-column");
  const imageColumn = document.querySelector(
    ".about-us-accordion-image-column"
  );

  // Function to match image height to accordion height
  function matchHeight() {
    if (window.innerWidth > 768) {
      // Get the current height of the accordion column
      const accordionHeight = accordionColumn.offsetHeight;
    }
  }

  // Initial height match with a slight delay to ensure DOM is fully loaded
  setTimeout(matchHeight, 100);

  // Match height on window resize
  window.addEventListener("resize", matchHeight);

  // Handle accordion clicks
  accordionItems.forEach((item) => {
    const header = item.querySelector(".about-us-accordion-header");

    header.addEventListener("click", function () {
      // Toggle active class
      const wasActive = item.classList.contains("active");

      // Close all other items
      accordionItems.forEach((otherItem) => {
        if (otherItem !== item && otherItem.classList.contains("active")) {
          otherItem.classList.remove("active");
        }
      });

      // Toggle current item
      if (wasActive) {
        item.classList.remove("active");
      } else {
        item.classList.add("active");
      }

      // Update height after animation completes
      setTimeout(matchHeight, 5000);
    });
  });

  // Set up a resize observer to detect content changes
  if (typeof ResizeObserver !== "undefined") {
    const resizeObserver = new ResizeObserver((entries) => {
      matchHeight();
    });

    resizeObserver.observe(accordionColumn);
  } else {
    // Fallback for browsers without ResizeObserver
    setInterval(matchHeight, 5000); // Check every half second
  }

  // Also match height after images load
  window.addEventListener("load", function () {
    matchHeight();
    // Double-check after a slight delay to ensure everything is rendered
    setTimeout(matchHeight, 5000);
  });

  // Force height match when accordion content changes
  const accordionContents = document.querySelectorAll(
    ".about-us-accordion-content"
  );
  accordionContents.forEach((content) => {
    content.addEventListener("transitionend", matchHeight);
  });
});
