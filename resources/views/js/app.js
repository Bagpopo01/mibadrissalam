// Toggle mobile menu
import 'aos/dist/aos.css';
import AOS from 'aos';

// Inisialisasi AOS
AOS.init({
    duration: 1000, // Durasi animasi dalam milidetik
    once: true, // Animasi hanya terjadi sekali saat scroll pertama
});

document.getElementById('mobile-menu-button').addEventListener('click', () => {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});

// Toggle desktop profile menu
document.getElementById('profile-button').addEventListener('click', (event) => {
    event.stopPropagation();
    const menu = document.getElementById('profile-menu');
    menu.classList.toggle('hidden');
});

// Toggle desktop e-perpus menu
document.getElementById('eperpus-button').addEventListener('click', (event) => {
    event.stopPropagation();
    const menu = document.getElementById('eperpus-menu');
    menu.classList.toggle('hidden');
});

// Toggle mobile profile menu
document.getElementById('mobile-profile-button').addEventListener('click', () => {
    const menu = document.getElementById('mobile-profile-menu');
    menu.classList.toggle('hidden');
});

// Toggle mobile e-perpus menu
document.getElementById('mobile-eperpus-button').addEventListener('click', () => {
    const menu = document.getElementById('mobile-eperpus-menu');
    menu.classList.toggle('hidden');
});

// Close any open dropdowns when clicking outside
document.addEventListener('click', (event) => {
    const profileMenu = document.getElementById('profile-menu');
    const eperpusMenu = document.getElementById('eperpus-menu');
    if (!event.target.closest('#profile-button')) {
        profileMenu.classList.add('hidden');
    }
    if (!event.target.closest('#eperpus-button')) {
        eperpusMenu.classList.add('hidden');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.slide');
    const slideContainer = document.getElementById('slide-container');
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');
    const paginationDots = document.querySelectorAll('#pagination span');
    let currentIndex = 0;
    const totalSlides = slides.length;

    // Function to go to a specific slide
    const goToSlide = (index) => {
        slideContainer.style.transform = `translateX(-${index * 100}%)`;
        currentIndex = index;
        updatePagination();
    };

    // Function to update pagination
    const updatePagination = () => {
        paginationDots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('bg-lime-500');
            } else {
                dot.classList.remove('bg-lime-500');
            }
        });
    };

    // Function for the next button
    nextButton.addEventListener('click', () => {
        if (currentIndex < totalSlides - 1) {
            goToSlide(currentIndex + 1);
        } else {
            goToSlide(0); // Loop back to the first slide
        }
    });

    // Function for the previous button
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            goToSlide(currentIndex - 1);
        } else {
            goToSlide(totalSlides - 1); // Loop to the last slide
        }
    });

    // Function for pagination dots
    paginationDots.forEach((dot) => {
        dot.addEventListener('click', () => {
            const index = parseInt(dot.getAttribute('data-index'));
            goToSlide(index);
        });
    });

    // Autoplay Function
    setInterval(() => {
        if (currentIndex < totalSlides - 1) {
            goToSlide(currentIndex + 1);
        } else {
            goToSlide(0);
        }
    }, 5000); // Change slide every 5 seconds

    // Initial setup
    goToSlide(currentIndex);
});


document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-lime-600', 'shadow-lg');
        } else {
            navbar.classList.remove('bg-lime-600', 'shadow-lg');
        }
    });
});

