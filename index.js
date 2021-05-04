//Menu

window.addEventListener('scroll',function(){
    var header = document.querySelector('nav');

    header.classList.toggle('sticky',window.scrollY>0);
});

//carousel
const slides = document.getElementsByClassName("carousel-item");

let position = 0;
const totalSlides = slides.length;

const btnPrev = document.getElementById("carousel-button-prev");
const btnNext = document.getElementById("carousel-button-next");

function moveToPrevSlide() {
  hideAllSlides();

  if (position === 0) {
    position = totalSlides - 1;
  } else {
    position--;
  }

  slides[position].classList.add("carousel-item-visible");
}

function moveToNextSlide() {
  hideAllSlides();

  if (position === totalSlides - 1) {
    position = 0;
  } else {
    position++;
  }

  slides[position].classList.add("carousel-item-visible");
}

function hideAllSlides() {
  for (let slide of slides) {
    slide.classList.remove("carousel-item-visible");
    slide.classList.remove("carousel-item-hidden");
  }
}

btnPrev.addEventListener("click", moveToPrevSlide);

btnNext.addEventListener("click", moveToNextSlide);

//                     search                              


const icon = document.querySelector('.icon');
const search = document.querySelector('.search');

icon.onclick = function(){
  search.classList.toggle('active')
}