<?php
    $products_mobile = new WP_Query([
        'post_type'      => 'product',
        'posts_per_page' => 8, // Adjust as needed
        'tax_query'      => [
            [
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => 'phones', // Category slug
            ],
        ],
    ]);
?>

@if ($products_mobile->have_posts())
    <section class="mobile-phones custom-container">
        <div class="mobile-top">
            <h2>Phones</h2>

            <a href="{{home_url('/shop')}}">Go to Shop</a>
        </div>
        
        <div class="mobile-product-swiper swiper">
            <div class="swiper-wrapper">
                @while ($products_mobile->have_posts()) 
                    @php $products_mobile->the_post(); global $product; @endphp
                    <div class="swiper-slide hero-slide">
                        <div class="product-item">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                            <div class="product-info">
                                <h3>{{ get_the_title() }}</h3>
                                <p>${{ $product->get_price() }}</p>
                            </div>
                            <div class="product-actions">
                                <a class="see-details" href="<?php echo get_permalink(); ?>">See details</a>
                                <a class="add-to-cart" href="{{home_url('/?add-to-cart=PRODUCT_ID&quantity=QUANTITY')}}">Add to Cart</a>
                            </div>
                            
                        </div>
                    </div>
                @endwhile
                @php wp_reset_postdata(); @endphp
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
@else

@endif
