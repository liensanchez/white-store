<section class="lateral-bar-products">
    <h2>Filters</h2>
    
    @include('forms.search')

    {{-- Categories --}}
    @if ($categories = get_terms(['taxonomy' => 'product_cat', 'hide_empty' => false]))
        <div>
            <h2>Categories</h2>
            <div>
                {!! wp_list_categories([
                    'taxonomy' => 'product_cat',
                    'title_li' => '',
                    'show_count' => true,
                    'hide_empty' => false,
                ]) !!}
            </div>
        </div>
    @endif

    {{-- Brands --}}
    @if ($brands = get_terms(['taxonomy' => 'product_brand', 'hide_empty' => false]))
        <div>
            <h2>Brands</h2>
            <div>
                {!! wp_list_terms([
                    'taxonomy' => 'product_brand',
                    'title_li' => '',
                    'show_count' => true,
                    'hide_empty' => false,
                ]) !!}
            </div>
        </div>
    @endif

    {{-- Tags --}}
   {{--  @if ($tags = get_terms(['taxonomy' => 'product_tag', 'hide_empty' => false]))
        <div>
            <h2>Tags</h2>
            <div>
                {!! wp_list_terms([
                    'taxonomy' => 'product_tag',
                    'title_li' => '',
                    'show_count' => true,
                    'hide_empty' => false,
                ]) !!}
            </div>
        </div>
    @endif --}}
</section>