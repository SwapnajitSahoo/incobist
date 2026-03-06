class InfiniteCarousel {
  constructor() {
    this.track = document.getElementById("carouselTrack");
    this.container = document.getElementById("carouselContainer");
    this.cards = [];
    this.scrollSpeed = 1; // pixels per frame
    this.isAnimating = true;
    this.cardWidth = 370; // card width + gap

    this.init();
  }

  init() {
    this.setupCards();
    this.addEventListeners();
    this.startAnimation();
  }

  setupCards() {
    const originalCards = this.track.querySelectorAll(".carousel-card");
    this.cards = Array.from(originalCards);

    // Clone cards multiple times for seamless infinite effect
    for (let i = 0; i < 3; i++) {
      this.cards.forEach((card) => {
        const clone = card.cloneNode(true);
        this.track.appendChild(clone);
      });
    }

    // Update cards array to include all cards
    this.cards = Array.from(this.track.querySelectorAll(".carousel-card"));

    this.updateCardWidth();
    this.positionCards();
  }

  positionCards() {
    // Position cards in a line starting from the left
    this.cards.forEach((card, index) => {
      const position = index * this.cardWidth;
      card.style.left = `${position}px`;
      card.style.top = "50%";
      card.style.transform = "translateY(-50%)";
    });
  }

  addEventListeners() {
    // Pause on hover
    this.container.addEventListener("mouseenter", () => {
      this.isAnimating = false;
    });

    this.container.addEventListener("mouseleave", () => {
      this.isAnimating = true;
    });

    // Handle window resize
    window.addEventListener("resize", () => {
      this.updateCardWidth();
      this.positionCards();
    });
  }

  updateCardWidth() {
    const card = this.cards[0];
    if (card) {
      const cardRect = card.getBoundingClientRect();
      const computedStyle = window.getComputedStyle(this.track);
      const gap = parseInt(computedStyle.gap) || 70;
      this.cardWidth = cardRect.width + gap;
    }
  }

  startAnimation() {
    const animate = () => {
      if (this.isAnimating) {
        this.cards.forEach((card) => {
          // Get current position
          const currentX = parseFloat(card.style.left) || 0;

          // Move card left
          const newX = currentX - this.scrollSpeed;

          // If card is out of view to the left, move it to the right end
          const containerRect = this.container.getBoundingClientRect();
          const cardRect = card.getBoundingClientRect();
          if (cardRect.right < containerRect.left) {
            const rightmostX = Math.max(
              ...this.cards.map((c) => {
                return parseFloat(c.style.left) || 0;
              })
            );
            card.style.transition = "none"; // Disable transition for instant reposition
            card.style.left = `${rightmostX + this.cardWidth}px`;
            // Re-enable transition after repositioning
            setTimeout(() => {
              card.style.transition =
                "left 0.1s linear, transform 0.5s ease, box-shadow 0.5s ease";
            }, 0);
          } else {
            card.style.left = `${newX}px`;
          }
        });

        this.updateCenterHighlight();
      }

      requestAnimationFrame(animate);
    };

    animate();
  }

  updateCenterHighlight() {
    const containerRect = this.container.getBoundingClientRect();
    const containerCenterX = containerRect.left + containerRect.width / 2;

    this.cards.forEach((card) => {
      const cardRect = card.getBoundingClientRect();
      const cardCenterX = cardRect.left + cardRect.width / 2;
      const distance = Math.abs(containerCenterX - cardCenterX);

      // Highlight if card center is within 100px of container center
      if (
        distance < 100 &&
        cardRect.left < containerRect.right &&
        cardRect.right > containerRect.left
      ) {
        card.classList.add("centered");
        card.style.transform = "translateY(-50%) scale(1.1) translateY(-10px)";
      } else {
        card.classList.remove("centered");
        card.style.transform = "translateY(-50%)";
      }
    });
  }
}

// Initialize carousel when page loads
document.addEventListener("DOMContentLoaded", () => {
  new InfiniteCarousel();
});

// service card code
document.addEventListener("DOMContentLoaded", function () {
  const labels = document.querySelectorAll(".service-item");
  const cards = document.querySelectorAll(".service-card");

  function showCard(index) {
    cards.forEach((card) => (card.style.display = "none"));
    cards[index].style.display = "block";
  }

  function isMobile() {
    return window.innerWidth < 768;
  }

  function attachEventListeners() {
    // Remove existing event listeners
    labels.forEach((label) => {
      label.replaceWith(label.cloneNode(true));
    });

    // Get fresh references after cloning
    const freshLabels = document.querySelectorAll(".service-item");

    freshLabels.forEach((label, index) => {
      if (isMobile()) {
        // Mobile: both click and hover events
        label.addEventListener("click", () => showCard(index));
        label.addEventListener("mouseenter", () => showCard(index));
      } else {
        // Desktop: both hover and click events
        label.addEventListener("mouseenter", () => showCard(index));
        label.addEventListener("click", () => showCard(index));
      }
    });
  }

  // Initial setup
  attachEventListeners();

  // Re-attach event listeners on window resize
  window.addEventListener("resize", attachEventListeners);

  // Show only the first card on page load
  showCard(0);
});
