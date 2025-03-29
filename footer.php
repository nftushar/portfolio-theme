<footer class="section__container footer__container">
        <p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        <ul class="footer__socials">
            <?php if(get_theme_mod('facebook_url')): ?>
                <li><a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>"><i class="ri-facebook-fill"></i></a></li>
            <?php endif; ?>
            <?php if(get_theme_mod('twitter_url')): ?>
                <li><a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>"><i class="ri-twitter-fill"></i></a></li>
            <?php endif; ?>
            <?php if(get_theme_mod('linkedin_url')): ?>
                <li><a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>"><i class="ri-linkedin-fill"></i></a></li>
            <?php endif; ?>
        </ul>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>