const menuBar = document.querySelector(".menu-bar");
const nav = document.querySelector(".h-nav");
const close = document.querySelector(".close-btn");

menuBar.addEventListener("click", (event) => {
    nav.classList.add("open"); 
});

close.addEventListener("click", (event) => {
    nav.classList.remove("open"); 
});

// accordian
document.querySelectorAll('.accordion-header').forEach(header => {
  header.addEventListener('click', () => {
      const content = header.nextElementSibling;
      content.classList.toggle('show');
      header.classList.toggle('show');
      if (content.classList.contains('show')) {
          content.style.maxHeight = content.scrollHeight + 'px'; 
      } else {
          content.style.maxHeight = null; 
      }
  });
});

//rise up when scroll
document.addEventListener("DOMContentLoaded", function () {
    const appCards = document.querySelectorAll(".app-card");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.5, 
        }
    );

    // Observe each card
    appCards.forEach((card) => {
        observer.observe(card);
    });
});