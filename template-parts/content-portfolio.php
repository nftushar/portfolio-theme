<section class="portfolio__container" id="portfolio">
    <div class="portfolio__content">
        <?php 
            // Get the post ID only once
            $post_id = get_the_ID();

            // Retrieve ACF fields
            $portfolio_subheader = get_field('portfolio_subheader', $post_id);
            $portfolio_title = get_field('portfolio_title', $post_id);
            $portfolio_subtitle = get_field('portfolio_subtitle', $post_id);
            $portfolio_btn_text = get_field('portfolio_btn_text', $post_id);

            // Use get_theme_mod as fallback for ACF fields
            $portfolio_subheader = $portfolio_subheader ?: get_theme_mod('portfolio_subheader', 'Default Subheader');
            $portfolio_title = $portfolio_title ?: get_theme_mod('portfolio_title', 'Default Portfolio Title');
            $portfolio_subtitle = $portfolio_subtitle ?: get_theme_mod('portfolio_subtitle', 'Default Portfolio Subtitle');
            $portfolio_btn_text = $portfolio_btn_text ?: get_theme_mod('portfolio_btn_text', 'View Portfolio');
        ?>

        <p class="section__subheader"><?php echo esc_html($portfolio_subheader); ?></p>
        <h2 class="section__header">
            <?php echo esc_html($portfolio_title); ?>
            <span><?php echo esc_html($portfolio_subtitle); ?></span>
        </h2>
        <p class="section__description"><?php echo esc_html($portfolio_subtitle); ?></p>

        <div class="portfolio__btn">
            <button class="btn"><?php echo esc_html($portfolio_btn_text); ?></button>
        </div>
    </div>

    <div class="portfolio__image__wrapper">
        <div class="portfolio__image">
            <?php
            // Loop through portfolio images (1 to 5 fields)
            for ($i = 1; $i <= 5; $i++) {
                $image = get_field('portfolio_image_' . $i, $post_id);

                // Check if the image exists, if so, display it
                if ($image) {
                    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                }
            }
            ?>
        </div>
    </div>
</section>
