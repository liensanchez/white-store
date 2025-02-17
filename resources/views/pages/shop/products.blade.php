<section class="shop custom-container">
    <div class="shop-top">
        <p>
            Showing {{ $start }}-{{ $end }} of {{ $total_products }} results
        </p>
        <form method="GET" action="{{ wc_get_page_permalink('shop') }}" class="form-sort">
            <label for="orderby">Sort </label>
            <select name="orderby" id="orderby" onchange="this.form.submit()">
                <option value="menu_order" {{ (isset($_GET['orderby']) && $_GET['orderby'] == 'menu_order') ? 'selected' : '' }}>Default</option>
                <option value="popularity" {{ (isset($_GET['orderby']) && $_GET['orderby'] == 'popularity') ? 'selected' : '' }}>Popularity</option>
                <option value="rating" {{ (isset($_GET['orderby']) && $_GET['orderby'] == 'rating') ? 'selected' : '' }}>Average Rating</option>
                <option value="date" {{ (isset($_GET['orderby']) && $_GET['orderby'] == 'date') ? 'selected' : '' }}>Latest</option>
                <option value="price" {{ (isset($_GET['orderby']) && $_GET['orderby'] == 'price') ? 'selected' : '' }}>Price: Low to High</option>
                <option value="price-desc" {{ (isset($_GET['orderby']) && $_GET['orderby'] == 'price-desc') ? 'selected' : '' }}>Price: High to Low</option>
            </select>
        </form>
    </div>

    <button class="filters-mobile">
        Filters
        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Menu / Hamburger_MD"> <path id="Vector" d="M5 17H19M5 12H19M5 7H19" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
    </button>

    <div class="product-container">
        @if (have_posts())
            <div class="product-grid">
                @while(have_posts()) @php the_post() @endphp
                    @php 
                        $product = wc_get_product(get_the_ID()); // Get the WooCommerce product object
                    @endphp
                    <div class="product-display">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                        <div class="product-info">
                            <h3>{{ get_the_title() }}</h3>
                            <p>${{ $product->get_price() }}</p>
                        </div>
                        <div class="product-actions">
                            <a class="see-details" href="<?php echo get_permalink(); ?>">See details</a>
                            <a class="add-to-cart" href="<?php echo $product->add_to_cart_url(); ?>">Add to Cart</a>
                        </div>
                    </div>
                @endwhile
            </div>
    
            {{-- Pagination --}}
            <div class="pagination-container">
                <?php woocommerce_pagination(); ?>
            </div>
        @else
            <p class="text-center text-gray-500">No products found.</p>
        @endif
    </div>

    @include('pages.shop.categories')
</section>