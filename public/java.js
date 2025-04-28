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


document.addEventListener('DOMContentLoaded', function() {
    const mainFigure = document.querySelector('.figure-first img');
    const originalSrc = mainFigure.src;
    const scrollingContainer = document.querySelector('.figure-scrolling');
    const upBtn = document.querySelector('.up-btn');
    const downBtn = document.querySelector('.down-btn');
    const prevBtn = document.querySelector('.up-btn'); // Те же кнопки, но с другим функционалом
    const nextBtn = document.querySelector('.down-btn');

    // Определяем направление скролла
    function isHorizontalScroll() {
        return window.getComputedStyle(scrollingContainer).flexDirection === 'row';
    }

    // Обработчики для смены изображения
    document.querySelectorAll('.figure-other img').forEach(figure => {
        figure.addEventListener('mouseenter', () => {
            mainFigure.src = figure.src;
        });

        figure.addEventListener('mouseleave', () => {
            mainFigure.src = originalSrc;
        });

        figure.addEventListener('click', () => {
            mainFigure.src = figure.src;
            // Сохраняем новое изображение как оригинальное
            originalSrc = figure.src;
        });
    });

    // Общая функция обновления состояния кнопок
    function updateButtons() {
        if (isHorizontalScroll()) {
            // Горизонтальный режим
            prevBtn.disabled = scrollingContainer.scrollLeft <= 0;
            nextBtn.disabled = scrollingContainer.scrollLeft + scrollingContainer.clientWidth >= scrollingContainer.scrollWidth;
        } else {
            // Вертикальный режим
            upBtn.disabled = scrollingContainer.scrollTop === 0;
            downBtn.disabled = scrollingContainer.scrollTop + scrollingContainer.clientHeight >= scrollingContainer.scrollHeight;
        }
    }

    // Обработчики для кнопок
    function handleScroll(direction) {
        if (isHorizontalScroll()) {
            // Горизонтальный скролл
            scrollingContainer.scrollBy({
                left: direction === 'prev' ? -110 : 110,
                behavior: 'smooth'
            });
        } else {
            // Вертикальный скролл
            scrollingContainer.scrollBy({
                top: direction === 'prev' ? -100 : 100,
                behavior: 'smooth'
            });
        }
    }

    // Назначаем обработчики
    upBtn.addEventListener('click', () => handleScroll('prev'));
    downBtn.addEventListener('click', () => handleScroll('next'));
    prevBtn.addEventListener('click', () => handleScroll('prev'));
    nextBtn.addEventListener('click', () => handleScroll('next'));

    // Следим за изменениями
    scrollingContainer.addEventListener('scroll', updateButtons);
    window.addEventListener('resize', updateButtons);

    // Инициализация
    updateButtons();

    // Переключаем стили кнопок при изменении направления
    function updateButtonStyles() {
        if (isHorizontalScroll()) {
            // Горизонтальный режим
            upBtn.style.transform = 'rotate(-90deg)';
            downBtn.style.transform = 'rotate(-90deg)';
            upBtn.style.left = '5px';
            upBtn.style.right = '';
            downBtn.style.right = '150px';
            downBtn.style.left = '';
        } else {
            // Вертикальный режим
            upBtn.style.transform = '';
            downBtn.style.transform = '';
            upBtn.style.top = '5px';
            downBtn.style.bottom = '5px';
        }
    }

    // Следим за изменением размера окна
    window.addEventListener('resize', updateButtonStyles);
    updateButtonStyles();
});