import domReady from '@roots/sage/client/dom-ready';
import $ from 'jquery';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  const homeSwiper = new Swiper('.hero-swiper', {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  const mobileProductsSwiper = new Swiper('.mobile-product-swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 4,
    spaceBetween: 20,
  });


  const latestPostsSwiper = new Swiper('.latest-post-swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,
  });


  $('.menu-item-has-children').on('click', function () {
      $(this).find('.sub-menu').toggleClass('sub-menu-open');
  });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
