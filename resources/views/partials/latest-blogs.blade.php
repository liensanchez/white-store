<?php
    $blogs = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 3, // Adjust as needed
    ]);
?>

@if ($blogs->have_posts())
    <section class="latest-posts custom-container">
        <div class="latest-posts-top">
            <h2>Latest Post</h2>

            <a href="{{home_url('/blogs')}}">Read blogs</a>
        </div>

        
        <div class="latest-post-swiper swiper">
            <div class="swiper-wrapper">
                @while ($blogs->have_posts()) 
                    @php $blogs->the_post(); global $blog; @endphp
                    <div class="swiper-slide ">
                        <div class="latest-posts-item">
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                <div class="latest-posts-info">
                                    <div class="latest-post-date">
                                        <p><?php echo get_the_date('F j, Y'); ?></p>
                                        <p><?php echo strip_tags(get_the_category_list(', ')); ?></p>
                                    </div>
                                    <h3><?php echo get_the_title(); ?></h3>
                                </div>
                            </a>                            
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
