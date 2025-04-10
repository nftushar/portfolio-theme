<footer class="section__container footer__container">
    <!-- Display ACF copyright text -->
    <p>
        <?php
        // Get the copyright text from ACF
        $copyright_text = get_field('copyright_text');
        if ($copyright_text) {
            echo esc_html($copyright_text); // Display the ACF copyright text
        } else {
            // Default fallback if the field is not set
            echo 'Copyright &copy; ' . date('Y') . ' ' . get_bloginfo('name') . '. All rights reserved.';
        }
        ?>
    </p>

    <!-- Display ACF email address -->
    <?php
    // Get the email from ACF
    $email = get_field('email');
    if ($email) :
    ?>
        <p>Email: <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></p>
    <?php endif; ?>

    <!-- Social Media Links from Theme Customizer -->
    <ul class="footer__socials">
        <?php if (get_theme_mod('facebook_url')): ?>
            <li><a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="_blank"><i class="ri-facebook-fill"></i></a></li>
        <?php endif; ?>
        <?php if (get_theme_mod('twitter_url')): ?>
            <li><a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>" target="_blank"><i class="ri-twitter-fill"></i></a></li>
        <?php endif; ?>
        <?php if (get_theme_mod('linkedin_url')): ?>
            <li><a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
        <?php endif; ?>
    </ul>
</footer>

<?php wp_footer(); ?>
</body>
</html>
