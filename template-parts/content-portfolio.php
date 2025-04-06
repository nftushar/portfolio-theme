<section class="portfolio__container" id="portfolio">
    <div class="portfolio__content">
        <?php 
            // Retrieve values only once to reduce function calls
            $portfolio_subheader = get_field('portfolio_subheader', get_the_ID());
            $portfolio_title = get_field('portfolio_title', get_the_ID());
            $portfolio_subtitle = get_field('portfolio_subtitle', get_the_ID());
            $portfolio_btn_text = get_field('portfolio_btn_text', get_the_ID());

            // Fallback to theme mod if ACF field is empty
            $about_description = esc_html(get_theme_mod('about_description', $portfolio_subheader));
            $portfolio_title = esc_html(get_theme_mod('portfolio_title', $portfolio_title));
            $portfolio_subtitle = esc_html(get_theme_mod('portfolio_subtitle', $portfolio_subtitle));
            $portfolio_btn_text = esc_html(get_theme_mod('portfolio_btn_text', $portfolio_btn_text));
        ?>

        <p class="section__subheader"><?php echo $about_description; ?></p>
        <h2 class="section__header">
            <?php echo $portfolio_title; ?>
            <span><?php echo $portfolio_subtitle; ?></span>
        </h2>
        <p class="section__description"><?php echo $portfolio_subtitle; ?></p>

        <div class="portfolio__btn">
            <button class="btn"><?php echo $portfolio_btn_text; ?></button>
        </div>
    </div>

    <div class="portfolio__image__wrapper">
        <div class="portfolio__image">
            <?php
            // Loop through portfolio images (1 to 5 fields)
            for ($i = 1; $i <= 5; $i++) {
                $image = get_field('portfolio_image_' . $i, get_the_ID());

                // Check if the image exists, if so, display it
                if ($image) {
                    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                }
            }
            ?>
        </div>
    </div>
</section>
