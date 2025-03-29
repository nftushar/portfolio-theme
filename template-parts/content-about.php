<section class="section__container header__container" id="about">
    <div class="header__image">
        <?php if(get_theme_mod('about_image')): ?>
            <img src="<?php echo esc_url(get_theme_mod('about_image')); ?>" alt="header" />
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.png" alt="header" />
        <?php endif; ?>
    </div>
    <div class="header__content">
        <p class="section__subheader">Welcome</p>
        <h1><?php echo get_theme_mod('about_title', 'I have <span>Creative Design</span> Experience'); ?></h1>
        <p class="section__description">
            <?php echo get_theme_mod('about_description', 'Welcome to my personal portfolio! With a passion for turning ideas into visually stunning digital experiences, I specialize in crafting unique, user-friendly designs.'); ?>
        </p>
        <div class="header__btns">
            <button class="btn">Contact Me</button>
            <a href="#portfolio">
                View Portfolio
                <span><i class="ri-arrow-right-up-line"></i></span>
            </a>
        </div>
    </div>
</section>