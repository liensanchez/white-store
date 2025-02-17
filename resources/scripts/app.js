import domReady from '@roots/sage/client/dom-ready';
import $ from 'jquery';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  const homeSwiper = new Swiper('.hero-swiper', {
    loop: true,
    autoplay: {
      delay: 3000, // Change slide every 3 seconds
      disableOnInteraction: false, // Keeps autoplay running even after user interaction
    },
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
    pagination: {
      clickable: true,
      el: '.swiper-pagination',
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
    },
  });

  const latestPostsSwiper = new Swiper('.latest-post-swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
      clickable: true,
      el: '.swiper-pagination',
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  $('.mobile-option-open').on('click', function () {
    $('.right-navbar').toggleClass('mobile-open');
  });

  $('.menu-item-has-children').on('click', function () {
    $(this).find('.sub-menu').toggleClass('sub-menu-open');
  });

  $('.filters-mobile').on('click', function () {
    console.log('Here we are');
    $('.lateral-bar-products').toggleClass('lateral-bar-products-open');
  });

  /* Add/Reduce uttons */
  document.addEventListener('DOMContentLoaded', function () {
    // Quantity increment and decrement
    document
      .querySelector('.minus-button')
      .addEventListener('click', function () {
        const quantityInput = document.querySelector(
          '.quantity-wrapper input.qty'
        );
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
          quantityInput.value = currentValue - 1;
        }
      });

    document
      .querySelector('.add-button')
      .addEventListener('click', function () {
        const quantityInput = document.querySelector(
          '.quantity-wrapper input.qty'
        );
        let currentValue = parseInt(quantityInput.value);
        const maxValue =
          parseInt(quantityInput.getAttribute('max')) || Infinity;
        if (currentValue < maxValue) {
          quantityInput.value = currentValue + 1;
        }
      });

    // Buy Now button redirect
    document
      .querySelector('.buy_now_button')
      .addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector('input[name="add-to-cart"]').value = this.value;
        document.querySelector('form.cart').action =
          '{{ wc_get_checkout_url() }}';
        document.querySelector('form.cart').submit();
      });
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
