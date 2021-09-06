// TailwindCSS
import "tailwindcss/tailwind.css";

// Fontawesome
import "@fortawesome/fontawesome-free/js/brands";
import "@fortawesome/fontawesome-free/js/solid";
import "@fortawesome/fontawesome-free/js/fontawesome";

// Alpine JS
import Alpine from 'alpinejs';

// SwiperJS
import Swiper, { Navigation, Pagination } from 'swiper';

import "./sass/main.scss";
window.Alpine = Alpine
Alpine.start()

Swiper.use([Navigation, Pagination]);
const swiper = new Swiper('.swiper', {
    loop: true,
    speed: 400,
    spaceBetween: 100,
});