
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

  