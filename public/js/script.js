document.addEventListener('DOMContentLoaded', ()=>{

    const slider = document.querySelector('#slider');
    const sliderLine = slider.querySelector('.slider-line');
    const slide = sliderLine.querySelectorAll('.slide');

    let currentSlide = 1;

    setInterval(() => {
        if(currentSlide + 1 > slide.length){
            sliderLine.style.left = 0;
            currentSlide = 1
        }else{
            sliderLine.style.left = -700 * currentSlide + 'px'
            currentSlide++
        }
    }, 2000);
});