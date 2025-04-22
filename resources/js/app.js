import './bootstrap';
import "./utils/search.js"
import './utils/articlesCarousel.js';
import * as bootstrap from "bootstrap";

import { initProductsSwiper } from './swiper/productsSwiper';
import { initTestimonialsSwiper } from './swiper/testimonialsSwiper';

initProductsSwiper();
initTestimonialsSwiper();
