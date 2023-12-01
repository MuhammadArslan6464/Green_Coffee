const header = document.querySelector('header');
function fixedNavbar(){
    header.classList.toggle('scroll', window.pageYOffset > 0)
}
fixedNavbar();
window.addEventListener('scroll', fixedNavbar);

let menu = document.querySelector('#menu-btn');
let userBtn = document.querySelector('#user-btn');

menu.addEventListener('click', function(){
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
})
userBtn.addEventListener('click', function(){
    let userBtn = document.querySelector('.user-box');
    userBtn.classList.toggle('active');
})
// --------------Home page slider----------------
"use strict"
const leftArrow = document.querySelector('.left-arrow .bxs-left-arrow'),
    rightArrow = document.querySelector('.right-arrow .bxs-right-arrow'),
      slider = document.querySelector('.slider');

// --------------Scroll to rigth-----------------
function scrollRight(){
    if(slider.scrollWidth - slider.clientWidth === slider.scrollLeft) {
        slider.scrollTo({
            left: 0,
            behavior: "smooth"
        });
    }
    else{
        slider.scrollBy({
            left: window.innerWidth,
            behavior: "smooth"
        })
    }
}

// ------------Scroll to left---------------
function scrollLeft(){
    slider.scrollBy({
        left: -window.innerWidth,
        behavior: "smooth"
    })
}
let timerId = setInterval(scrollRight, 7000);

// -------Reset timer to scrool right--------------
function resetTimer(){
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 7000);
}
// -----------Scroll Event----------
slider.addEventListener("click", function(ev){
    if(ev.target === leftArrow){
        scrollLeft();
        resetTimer();
    }
})

slider.addEventListener("click", function(ev){
    if(ev.target === rightArrow){
        scrollRight();
        resetTimer();
    }
})

// -------------testimonial slider---------
// let slides = document.querySelector(".testimonail-item");
// let index = 0;

// function nextSlide(){
//     slides[index].classList.remove('active');
//     index = (index + 1) % slides.length;
//     slides[index].classList.add('active');
// }
// function prevSlide(){
//     slides[index].classList.remove('active');
//     index = (index - 1 + slides.length) % slides.length;
//     slides[index].classList.add('active');
// }