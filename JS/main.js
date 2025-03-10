// console.log("connected");
const menuBar = document.querySelector(".menu-bar");
const nav = document.querySelector(".h-nav");
const close = document.querySelector(".close-btn");

menuBar.addEventListener("click", (event) => {
    nav.classList.add("open"); // Add the 'open' class to show the menu
});

close.addEventListener("click", (event) => {
    nav.classList.remove("open"); // Remove the 'open' class to hide the menu
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