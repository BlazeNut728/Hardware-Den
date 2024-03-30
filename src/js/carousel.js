let carousel = document.querySelector('.carousel-inner');
let carouselItems = carousel.querySelectorAll('.carousel-item');
let currentIndex = 0;

function setActiveItem(index) {
    // Remove active class from all items
    carouselItems.forEach(item => item.classList.remove('active'));
    // Add active class to the specified index
    carouselItems[index].classList.add('active');
}

function carouselNext() {
    currentIndex++;
    if (currentIndex >= carouselItems.length) {
        currentIndex = 0;
    }
    carousel.style.transform = 'translateX(-' + (currentIndex * 100) + '%)';
    setActiveItem(currentIndex);
}

function carouselPrev() {
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = carouselItems.length - 1;
    }
    carousel.style.transform = 'translateX(-' + (currentIndex * 100) + '%)';
    setActiveItem(currentIndex);
}
