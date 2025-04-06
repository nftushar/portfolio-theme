<section class="section__container header__container" id="about">
    <div class="header__image">
        <?php if (get_theme_mod('about_image')): ?>
            <img src="<?php echo esc_url(get_theme_mod('about_image')); ?>" alt="header" />
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.png" alt="header" />
        <?php endif; ?>
    </div>
    <div class="header__content">
        <?php
        // Get the ACF field value
        $home_subheader = get_field('home_subheader', get_the_ID());
        ?>

        <!-- Output the home_subheader value properly -->
        <p class="section__subheader"><?php echo esc_html($home_subheader); ?></p> <!-- Fixed: Added esc_html for security -->

        <h1>
            <?php
            // Use get_theme_mod() with fallback and proper escaping
            echo get_theme_mod('about_title', get_field('home_title', get_the_ID()) . ' <span>' . get_field('home-subtitle', get_the_ID()) . '</span> Experience');
            ?>
        </h1>

        <p class="section__description">
            <?php
            // Escape the output to ensure safe HTML
            echo esc_html(get_theme_mod('about_description', get_field('home_description', get_the_ID())));
            ?>
        </p>

        <div class="header__btns">
            <button class="btn">
                <?php
                // Escape button text and display in the button
                echo esc_html(get_field('home_btn_text', get_the_ID()));
                ?>
            </button>
            <a href="#portfolio">
                <?php
                // Display the button text for the link with translation support
                echo esc_html(get_field('portfolio_btn_txt', get_the_ID()));
                ?>
                <span>
                    <i class="<?php echo get_field('btn_icon', get_the_ID()); ?>"></i>
                </span>
            </a>
        </div>


    </div>
</section>