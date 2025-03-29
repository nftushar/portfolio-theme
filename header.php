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
                <a href="<?php echo esc_url(home_url('/')); ?>"><span>t</span>Agency</a>
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