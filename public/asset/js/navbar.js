document.addEventListener("DOMContentLoaded", function () {
  const dropdownToggles = document.querySelectorAll(".dropdown-toggle");
  const navMenu = document.getElementById("navMenu");
  const menuToggle = document.getElementById("menuToggle");

  // Function to close all submenus
  function closeAllSubmenus() {
    document.querySelectorAll(".nav-links > li").forEach((li) => {
      li.classList.remove("show-submenu", "hovering");
      const icon = li.querySelector(".dropdown-toggle i");
      if (icon) icon.style.transform = "rotate(0deg)";
    });
  }

  // Desktop hover behavior
  function handleHoverBehavior() {
    document.querySelectorAll(".nav-links > li").forEach((item) => {
      item.addEventListener("mouseenter", () => {
        if (window.innerWidth >= 768) {
          closeAllSubmenus();
          item.classList.add("show-submenu", "hovering");

          const icon = item.querySelector(".dropdown-toggle i");
          if (icon) icon.style.transform = "rotate(180deg)";
        }
      });

      item.addEventListener("mouseleave", () => {
        if (window.innerWidth >= 768) {
          item.classList.remove("show-submenu", "hovering");

          const icon = item.querySelector(".dropdown-toggle i");
          if (icon) icon.style.transform = "rotate(0deg)";
        }
      });
    });
  }

  // Mobile click behavior
  function handleMobileDropdownClick() {
    dropdownToggles.forEach((toggle) => {
      toggle.addEventListener("click", (e) => {
        if (window.innerWidth < 768) {
          e.stopPropagation();
          const parentLi = toggle.closest("li");

          // Close others
          document.querySelectorAll(".nav-links > li").forEach((li) => {
            if (li !== parentLi)
              li.classList.remove("show-submenu", "hovering");
            const icon = li.querySelector(".dropdown-toggle i");
            if (icon) icon.style.transform = "rotate(0deg)";
          });

          const isOpen = parentLi.classList.contains("show-submenu");
          if (isOpen) {
            parentLi.classList.remove("show-submenu", "hovering");
            const icon = toggle.querySelector("i");
            if (icon) icon.style.transform = "rotate(0deg)";
          } else {
            parentLi.classList.add("show-submenu", "hovering");
            const icon = toggle.querySelector("i");
            if (icon) icon.style.transform = "rotate(180deg)";
          }
        }
      });
    });
  }

  // Close menu and submenus when clicking outside (mobile)
  document.addEventListener("click", (event) => {
    const isInsideMenu =
      navMenu.contains(event.target) || menuToggle.contains(event.target);
    if (!isInsideMenu) {
      navMenu.classList.remove("mobile-open");
      closeAllSubmenus();
    }
  });

  // Toggle mobile menu on hamburger icon click
  menuToggle.addEventListener("click", (e) => {
    e.stopPropagation();
    navMenu.classList.toggle("mobile-open");
  });

  // Close menu on link click (mobile)
  document.querySelectorAll(".nav-links a").forEach((link) => {
    link.addEventListener("click", () => {
      navMenu.classList.remove("mobile-open");
    });
  });

  // Initialize hover and mobile click behavior
  handleHoverBehavior();
  handleMobileDropdownClick();

  // Re-apply behavior on window resize (optional)
  window.addEventListener("resize", () => {
    closeAllSubmenus();
  });
});
