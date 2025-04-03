<section class="section__container review__container" id="review">
    <p class="section__subheader">Reviews</p>
    <h2 class="section__header">
        Our Customer Say Something <span>About Us</span>
    </h2>
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php
            $testimonials_query = new WP_Query(array(
                'post_type' => 'testimonials',
                'posts_per_page' => 5,
            ));

            if ($testimonials_query->have_posts()) :
                while ($testimonials_query->have_posts()) : $testimonials_query->the_post(); ?>
                    <div class="swiper-slide">
                        <div class="review__card">
                            <div class="review__ratings">
                                <?php for($i = 0; $i < 5; $i++) {
                                    echo '<span><i class="ri-star-fill"></i></span>';
                                } ?>
                            </div>
                            <p><?php the_content(); ?></p>
                            <div class="review__details">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="review" />
                                <?php endif; ?>
                                <div>
                                    <h4><?php the_title(); ?></h4>
                                    <h5><?php echo get_post_meta(get_the_ID(), 'position', true); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            endif; wp_reset_postdata();
            ?>
        </div>
    </div>
</section>