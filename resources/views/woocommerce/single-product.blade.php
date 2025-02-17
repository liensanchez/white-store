{{--
The Template for displaying all single products

This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.

HOWEVER, on occasion WooCommerce will need to update template files and you
(the theme developer) will need to copy the new files to your theme to
maintain compatibility. We try to do this as little as possible, but it does
happen. When this occurs the version of the template file will be bumped and
the readme will list any important changes.

@see         https://docs.woocommerce.com/document/template-structure/
@package     WooCommerce\Templates
@version     1.6.4
--}}

@extends('layouts.app')

@section('content')
  <section class="single-product-container custom-container">
    @while(have_posts())
      @php
        the_post();
        global $product;
      @endphp

      <div class="single-product">
        <!-- Product Image -->
        <div class="product-images">
          @php
            $image_id = $product->get_image_id();
            $image_url = wp_get_attachment_image_url($image_id, 'full');
          @endphp
          <img src="{{ $image_url }}" alt="{{ get_the_title() }}" class="product-image">
        </div>

        <!-- Product Details -->
        <div class="product-details">
          <h1 class="product-title">{{ get_the_title() }}</h1>

          <!-- Product Rating -->
          <div class="product-rating">
            @php
              woocommerce_template_single_rating();
            @endphp
          </div>

          <!-- Product Price -->
          <p class="product-price">
            {!! wc_price($product->get_price()) !!}
          </p>

          <!-- Description -->
          <div class="product-description">
            @php
              the_content();
            @endphp
          </div>

          <!-- Add to Cart Form -->
          @if($product->is_type('variable'))
            @php
              woocommerce_variable_add_to_cart();
            @endphp
          @else
            <form action="{{ esc_url($product->add_to_cart_url()) }}" method="post" class="cart">
              <div class="quantity-wrapper">
                <button type="button" class="minus-button">-</button>
                @php
                  woocommerce_quantity_input([
                    'min_value' => 1,
                    'max_value' => $product->get_max_purchase_quantity(),
                    'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(),
                  ]);
                @endphp
                <button type="button" class="add-button">+</button>
              </div>

              <div class="button-wrapper">
                <button type="submit" name="add-to-cart" value="{{ esc_attr($product->get_id()) }}" class="single_add_to_cart_button button alt">
                  {{ esc_html($product->single_add_to_cart_text()) }}
                </button>
                <button type="submit" name="add-to-cart" value="{{ esc_attr($product->get_id()) }}" class="buy_now_button button">
                  Buy Now
                </button>
              </div>

              <input type="hidden" name="add-to-cart" value="{{ esc_attr($product->get_id()) }}" />
              <input type="hidden" name="product_id" value="{{ esc_attr($product->get_id()) }}" />
              <input type="hidden" name="variation_id" class="variation_id" value="0" />
            </form>
          @endif

          <!-- SKU -->
          <div class="product-sku">
            <strong>SKU:</strong> {{ $product->get_sku() ?: 'N/A' }}
          </div>

          <!-- Categories -->
          <div class="product-categories">
            <strong>Categories:</strong> {!! wc_get_product_category_list($product->get_id()) !!}
          </div>

          <!-- Tags -->
          <div class="product-tags">
            <strong>Tags:</strong> {!! wc_get_product_tag_list($product->get_id()) !!}
          </div>
        </div>
      </div>
    @endwhile
  </section>
@endsection