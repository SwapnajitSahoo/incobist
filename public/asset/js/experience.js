// Color classes for each item
const colorClasses = [
  "experience-purple",
  "experience-green",
  "experience-red",
  "experience-blue",
  "experience-orange",
];

const bgColorClasses = [
  "experience-purple-active",
  "experience-green-active",
  "experience-red-active",
  "experience-blue-active",
  "experience-orange-active",
];

// Show solution content based on item click
function experienceShowSolution(num) {
  const clickedMobileContent = document.getElementById(
    `experience-mobile-content-${num}`
  );
  const clickedItem = document.querySelectorAll(".experience-item")[num - 1];
  const isAlreadyActive = clickedItem.classList.contains("experience-active");

  // If the clicked item is already active, close it
  if (isAlreadyActive) {
    clickedItem.classList.remove("experience-active");
    clickedItem.classList.remove(bgColorClasses[num - 1]);
    clickedMobileContent.classList.remove("experience-active");
    clickedItem
      .querySelector(".experience-item-text")
      .classList.remove(colorClasses[num - 1]);
    clickedItem.querySelector(".experience-bar").style.height = "0";
    return;
  }

  // Reset all paragraph text colors
  document.querySelectorAll(".experience-item-text").forEach((item) => {
    item.className = "experience-item-text"; // Remove all color classes
  });

  // Remove active class from all solution items
  document.querySelectorAll(".experience-item").forEach((item, index) => {
    item.classList.remove("experience-active");
    bgColorClasses.forEach((bgClass) => {
      item.classList.remove(bgClass);
    });
  });

  // Hide all mobile content sections
  document.querySelectorAll(".experience-mobile-content").forEach((item) => {
    item.classList.remove("experience-active");
  });

  // Reset all bars
  document.querySelectorAll(".experience-bar").forEach((bar) => {
    bar.style.height = "0";
  });

  // Show selected mobile content
  clickedMobileContent.classList.add("experience-active");

  // Add active class to clicked solution item
  clickedItem.classList.add("experience-active");
  clickedItem.classList.add(bgColorClasses[num - 1]);

  // Change the color of the clicked item's paragraph text
  clickedItem
    .querySelector(".experience-item-text")
    .classList.add(colorClasses[num - 1]);

  // Make the bar visible for the active item
  const bar = clickedItem.querySelector(".experience-bar");
  if (bar) {
    bar.style.height = "70%";
  }
}

// Select option function
function selectOption(element, sectionNum) {
  // Get all options in the same section
  const parentSection = element.closest(".experience-option-list");
  const options = parentSection.querySelectorAll(".experience-option");

  // Toggle selected state
  if (element.classList.contains("selected")) {
    element.classList.remove("selected");
  } else {
    // If it's not a multi-select section, deselect others
    options.forEach((option) => {
      option.classList.remove("selected");
    });
    element.classList.add("selected");
  }
}

// Generate persona function
function generatePersona() {
  // Get all selected options by section
  const selections = {
    industry: null,
    customerType: null,
    productStage: null,
    improvement: null,
    painPoints: document.querySelector(".experience-textarea").value,
  };

  // Get selected option from section 1
  const section1Selected = document.querySelector(
    "#experience-mobile-content-1 .experience-option.selected"
  );
  if (section1Selected) {
    selections.industry = section1Selected.textContent;
  }

  // Get selected option from section 2
  const section2Selected = document.querySelector(
    "#experience-mobile-content-2 .experience-option.selected"
  );
  if (section2Selected) {
    selections.customerType = section2Selected.textContent;
  }

  // Get selected option from section 3
  const section3Selected = document.querySelector(
    "#experience-mobile-content-3 .experience-option.selected"
  );
  if (section3Selected) {
    selections.productStage = section3Selected.textContent;
  }

  // Get selected option from section 4
  const section4Selected = document.querySelector(
    "#experience-mobile-content-4 .experience-option.selected"
  );
  if (section4Selected) {
    selections.improvement = section4Selected.textContent;
  }

  // Check if all required fields are filled
  let missingFields = [];
  if (!selections.industry) missingFields.push("Industry");
  if (!selections.customerType) missingFields.push("Customer Type");
  if (!selections.productStage) missingFields.push("Product Stage");
  if (!selections.improvement) missingFields.push("Improvement Area");

  if (missingFields.length > 0) {
    alert(
      "Please complete the following sections:\n- " + missingFields.join("\n- ")
    );
    return;
  }

  // Here you would typically send this data to a backend or process it
  // For now, we'll just show an alert with the collected data
  alert(
    "Generating persona with the following information:\n\n" +
      "Industry: " +
      selections.industry +
      "\n" +
      "Customer Type: " +
      selections.customerType +
      "\n" +
      "Product Stage: " +
      selections.productStage +
      "\n" +
      "Improvement Area: " +
      selections.improvement +
      "\n\n" +
      "Pain/Gain Points: " +
      (selections.painPoints || "Not specified")
  );
}

// Initialize with first section active when page loads
window.addEventListener("DOMContentLoaded", () => {
  experienceShowSolution(1);
});
