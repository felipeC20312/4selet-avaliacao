import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import "../../css/libraries/custom-swiper.css"

export function createResponsiveSwiper(selector, configCallback) {
  let swiper;

  const container = document.querySelector(selector);
  if (!container) return;

  function init() {
    if (swiper) swiper.destroy(true, true);

    const config = configCallback(window.innerWidth);

    swiper = new Swiper(container, {
      modules: [Navigation, Pagination, Autoplay],
      ...config,
    });
  }

  init();

  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      init();
    }, 200);
  });
}
