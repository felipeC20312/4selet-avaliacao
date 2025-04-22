import { createResponsiveSwiper } from './baseSwiper';

export function initProductsSwiper() {
  createResponsiveSwiper('.swiper-products', (width) => ({
    slidesPerView: width < 950 ? 1.5 : 3.5,
    loop: true,
    centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  }));
}
