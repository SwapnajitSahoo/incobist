// FAQ functionality
const faqItems = document.querySelectorAll(".ir-faq-item");

faqItems.forEach((item) => {
  const question = item.querySelector(".ir-faq-question");
  question.addEventListener("click", () => {
    faqItems.forEach((otherItem) => {
      if (otherItem !== item && otherItem.classList.contains("active")) {
        otherItem.classList.remove("active");
      }
    });
    item.classList.toggle("active");
  });
});
