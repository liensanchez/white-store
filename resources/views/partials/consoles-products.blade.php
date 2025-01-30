<?php
    $products_consoles = new WP_Query([
        'post_type'      => 'product',
        'posts_per_page' => 8, // Adjust as needed
        'tax_query'      => [
            [
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => 'consoles', // Category slug
            ],
        ],
    ]);
?>

@if ($products_consoles->have_posts())
    <section class="mobile-phones custom-container">
        <div class="mobile-top">
            <h2>Consoles</h2>

            <a href="{{home_url('/shop')}}">Go to Shop</a>
        </div>

        
        <div class="mobile-product-swiper swiper">
            <div class="swiper-wrapper">
                @while ($products_consoles->have_posts()) 
                    @php $products_consoles->the_post(); global $product; @endphp
                    <div class="swiper-slide hero-slide">
                        <div class="product-item">
                            <a href="{{ get_permalink() }}">
                                <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_title() }}">
                                <div class="product-info">
                                    <h3>{{ get_the_title() }}</h3>
                                    <p>${{ $product->get_price() }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endwhile
                @php wp_reset_postdata(); @endphp
            </div>
        </div>
    </section>
@else

@endif
