<header class="custom-container navbar">
  <a class="brand" href="{{ home_url('/') }}">
    <img src="@asset('/images/global/mini-store-logo.webp')" alt="">
  </a>

  
  <div class="right-navbar">
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => '', 'echo' => false]) !!}
      </nav>
    @endif


    <div class="woocommerce-navbar">
      <a href="{{home_url('/my-account')}}">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.6944 2.27039C11.0103 1.53176 10.0547 1.125 9.00002 1.125C7.93971 1.125 6.98099 1.5293 6.30002 2.26336C5.61166 3.00551 5.27627 4.01414 5.35502 5.10328C5.51111 7.25203 7.14623 9 9.00002 9C10.8538 9 12.4861 7.25238 12.6447 5.10398C12.7245 4.02469 12.387 3.01816 11.6944 2.27039ZM15.1875 16.875H2.81252C2.65054 16.8771 2.49013 16.8431 2.34296 16.7754C2.19579 16.7077 2.06555 16.6081 1.96174 16.4837C1.73322 16.2105 1.64111 15.8375 1.70931 15.4603C2.00603 13.8143 2.93205 12.4316 4.38752 11.4609C5.68056 10.5993 7.31849 10.125 9.00002 10.125C10.6815 10.125 12.3195 10.5996 13.6125 11.4609C15.068 12.4312 15.994 13.8139 16.2907 15.46C16.3589 15.8372 16.2668 16.2102 16.0383 16.4834C15.9345 16.6078 15.8043 16.7075 15.6571 16.7752C15.51 16.843 15.3495 16.8771 15.1875 16.875Z" fill="#272727"/>
        </svg>
      </a>
      <a href="{{home_url('/cart')}}">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.1875 15.75C6.80882 15.75 7.3125 15.2463 7.3125 14.625C7.3125 14.0037 6.80882 13.5 6.1875 13.5C5.56618 13.5 5.0625 14.0037 5.0625 14.625C5.0625 15.2463 5.56618 15.75 6.1875 15.75Z" fill="#272727"/>
          <path d="M14.0625 15.75C14.6838 15.75 15.1875 15.2463 15.1875 14.625C15.1875 14.0037 14.6838 13.5 14.0625 13.5C13.4412 13.5 12.9375 14.0037 12.9375 14.625C12.9375 15.2463 13.4412 15.75 14.0625 15.75Z" fill="#272727"/>
          <path d="M16.0594 4.24617C15.9803 4.14951 15.8808 4.07166 15.7679 4.01827C15.6551 3.96487 15.5317 3.93729 15.4069 3.9375H4.70707L4.49156 2.71477C4.46858 2.58452 4.40045 2.46654 4.29912 2.38154C4.19779 2.29655 4.06976 2.24997 3.9375 2.25H1.6875C1.53832 2.25 1.39524 2.30926 1.28975 2.41475C1.18426 2.52024 1.125 2.66332 1.125 2.8125C1.125 2.96168 1.18426 3.10476 1.28975 3.21025C1.39524 3.31574 1.53832 3.375 1.6875 3.375H3.4657L5.07094 12.4727C5.09392 12.603 5.16205 12.721 5.26338 12.806C5.36471 12.891 5.49274 12.9375 5.625 12.9375H14.625C14.7742 12.9375 14.9173 12.8782 15.0227 12.7727C15.1282 12.6673 15.1875 12.5242 15.1875 12.375C15.1875 12.2258 15.1282 12.0827 15.0227 11.9773C14.9173 11.8718 14.7742 11.8125 14.625 11.8125H6.0968L5.89852 10.6875H14.3944C14.5894 10.6873 14.7784 10.6196 14.9294 10.496C15.0803 10.3725 15.1839 10.2005 15.2227 10.0093L16.2352 4.94684C16.2596 4.82432 16.2564 4.69791 16.226 4.57674C16.1956 4.45557 16.1387 4.34266 16.0594 4.24617Z" fill="#272727"/>
        </svg>
        (<?php
          echo WC()->cart->get_cart_contents_count();
        ?>)
      </a>
    </div>
 </div>

  <button class="mobile-option-open">
    <svg width="36px" height="36px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 7C20.75 7.41421 20.4142 7.75 20 7.75L4 7.75C3.58579 7.75 3.25 7.41421 3.25 7C3.25 6.58579 3.58579 6.25 4 6.25L20 6.25C20.4142 6.25 20.75 6.58579 20.75 7Z" fill="#1C274C"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 12C20.75 12.4142 20.4142 12.75 20 12.75L4 12.75C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25L20 11.25C20.4142 11.25 20.75 11.5858 20.75 12Z" fill="#1C274C"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 17C20.75 17.4142 20.4142 17.75 20 17.75L4 17.75C3.58579 17.75 3.25 17.4142 3.25 17C3.25 16.5858 3.58579 16.25 4 16.25L20 16.25C20.4142 16.25 20.75 16.5858 20.75 17Z" fill="#1C274C"></path> </g></svg>
  </button>
</header>
