import { createResponsiveSwiper } from './baseSwiper';

export function initTestimonialsSwiper() {
  createResponsiveSwiper('.swiper-testimonials', (width) => ({
    slidesPerView: width < 950 ? 1 : 2.5,
    loop: true,
    centeredSlides: true,
    spaceBetween: 30,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
  }));
}
