<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav>
        <div class="nav__header">
            <div class="nav__logo">
                <?php
                // Get the logo text from ACF
                $logo_text_one = get_field('header_logo_text_one'); // The ACF field name
                $logo_text_two = get_field('header_logo_text_two'); // The ACF field name

                // Check if either of the text fields is set
                if ($logo_text_one || $logo_text_two): ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <span><?php echo esc_html($logo_text_one); ?></span>
                        <?php echo esc_html($logo_text_two); ?>
                    </a>
                <?php else: ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>"><span>t</span>Agency</a>
                <?php endif; ?>
            </div>


            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-line"></i>
            </div>
        </div>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'items_wrap' => '<ul class="nav__links" id="nav-links">%3$s</ul>',
            'fallback_cb' => false
        ));
        ?>
        <div class="nav__btn">
            <a href="<?php echo esc_url(get_theme_mod('cv_url', '#')); ?>" download="">Download CV</a>
        </div>
    </nav>