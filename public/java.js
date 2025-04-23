const items = document.getElementsByClassName('buskar');

function initSlider(container) {
    const slides = Array.from(container.children);
    let currentSlide = 0;
    const SLIDE_DELAY = (Math.floor(Math.random() * 10000) + 1000);
    
    if (slides.length === 0) return;

    function showNextSlide() {
        slides[currentSlide].classList.remove('active');
        
        currentSlide = (currentSlide + 1) % slides.length;
        
        slides[currentSlide].classList.add('active');
        
        setTimeout(showNextSlide, SLIDE_DELAY);
    }

    slides[0].classList.add('active');
    
    setTimeout(showNextSlide, SLIDE_DELAY);
}

Array.from(items).forEach(container => {
    initSlider(container);
});
