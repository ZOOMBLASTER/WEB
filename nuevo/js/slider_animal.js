document.addEventListener("DOMContentLoaded", function () {
//step 1: get DOM
let dev_nextDom = document.getElementById('dev_next');
let dev_prevDom = document.getElementById('dev_prev');

let dev_carouselDom = document.querySelector('.dev_carousel');
let dev_SliderDom = dev_carouselDom.querySelector('.dev_carousel .dev_list');
let dev_thumbnailBorderDom = document.querySelector('.dev_carousel .dev_thumbnail');
let dev_thumbnailItemsDom = dev_thumbnailBorderDom.querySelectorAll('.dev_item');
let dev_timeDom = document.querySelector('.dev_carousel .dev_time');

dev_thumbnailBorderDom.appendChild(dev_thumbnailItemsDom[0]);
let dev_timeRunning = 3000;
let dev_timeAutoNext = 7000;

dev_nextDom.onclick = function(){
    dev_showSlider('next');    
}

dev_prevDom.onclick = function(){
    dev_showSlider('prev');    
}
let dev_runTimeOut;
let dev_runNextAuto = setTimeout(() => {
    dev_nextDom.click();
}, dev_timeAutoNext)
function dev_showSlider(type){
    let  dev_SliderItemsDom = dev_SliderDom.querySelectorAll('.dev_carousel .dev_list .dev_item');
    let dev_thumbnailItemsDom = document.querySelectorAll('.dev_carousel .dev_thumbnail .dev_item');
    
    if(type === 'next'){
        dev_SliderDom.appendChild(dev_SliderItemsDom[0]);
        dev_thumbnailBorderDom.appendChild(dev_thumbnailItemsDom[0]);
        dev_carouselDom.classList.add('dev_next');
    }else{
        dev_SliderDom.prepend(dev_SliderItemsDom[dev_SliderItemsDom.length - 1]);
        dev_thumbnailBorderDom.prepend(dev_thumbnailItemsDom[dev_thumbnailItemsDom.length - 1]);
        dev_carouselDom.classList.add('dev_prev');
    }
    clearTimeout(dev_runTimeOut);
    dev_runTimeOut = setTimeout(() => {
        dev_carouselDom.classList.remove('dev_next');
        dev_carouselDom.classList.remove('dev_prev');
    }, dev_timeRunning);

    clearTimeout(dev_runNextAuto);
    dev_runNextAuto = setTimeout(() => {
        dev_nextDom.click();
    }, dev_timeAutoNext)
}

});