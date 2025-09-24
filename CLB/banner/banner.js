let list = document.querySelector('.slider .list-slide');
let slides = document.querySelectorAll('.slider .list-slide .slide');
let dots = document.querySelectorAll('.slider .slide-dots li');
let prev = document.getElementById('prev');
let next = document.getElementById('next');

let active = 0;
let lengthSlides = slides.length - 1;

next.onclick = function() {
    if(active + 1 > lengthSlides) {
        active = 0;
    }
    else{
        active = active + 1;
    }
    reloadSlider();
}

prev.onclick = function() {
    if(active - 1 < 0) {
        active = lengthSlides;
    }
    else {
        active = active - 1;
    }
    reloadSlider();
}

let refreshSlider = setInterval(() => {next.click()}, 5000);
function reloadSlider() {
    let checkLeft = slides[active].offsetLeft;
    list.style.left = -checkLeft + 'px';

    let lastActiveDot = document.querySelector('.slider .slide-dots li.active');
    lastActiveDot.classList.remove('active');
    dots[active].classList.add('active');
    clearInterval(refreshSlider);

    refreshSlider = setInterval(() => { next.click() }, 5000);
}

dots.forEach((li,key) => {
    li.addEventListener('click', function() {
        active = key;
        reloadSlider();
    })
})