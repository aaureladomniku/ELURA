
const burger = document.getElementById("burger");
const menu = document.getElementById("menu");
const a=document.querySelectorAll(".l a")
burger.addEventListener("click", () => {
  menu.classList.toggle("show");
   a.forEach(a=>{

      a.classList.toggle("b");
   })
});


  let index = 0;
  const slider = document.querySelector(".slider");
  const posts = document.querySelectorAll(".slider .post");

  const cardWidth = 300;
  const maxIndex = posts.length - 4;
  
  

  setInterval(() => {
    index++;

    if (index > maxIndex) {
      index = 0;
    }

    slider.style.transform = `translateX(-${index * cardWidth}px)`;
  }, 2500);

  
  

const toggleBtns = document.querySelectorAll(".darkModeToggle");
const icImages = document.querySelectorAll(".ic:not(.hide) img");
const icHideImages = document.querySelectorAll(".ic.hide img");

toggleBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");

    icImages.forEach((img, index) => {
      if (document.body.classList.contains("dark-mode")) {
       
        img.dataset.originalSrc = img.src;
        if (icHideImages[index]) img.src = icHideImages[index].src;
      } else {
       
        if (img.dataset.originalSrc) img.src = img.dataset.originalSrc;
      }
    });
  });
});


  