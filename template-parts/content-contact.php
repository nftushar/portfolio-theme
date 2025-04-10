<section class="section__container contact__container">
    <p class="section__subheader"> 
        <?php echo esc_html(get_field('contact_subheader', get_the_ID())); ?>
    </p>
    <h2 class="section__header"> 
        <?php echo esc_html(get_field('contact_title', get_the_ID())); ?> 
        <span> 
            <?php echo esc_html(get_field('contact_subheader', get_the_ID())); ?>
        </span>
    </h2>
    <p class="section__description">
        <?php echo esc_html(get_field('contact_subheader', get_the_ID())); ?>
    </p>

    <?php 
    // Retrieve the ACF field with the shortcode
    $form_shortcode = get_field('form_short_code', get_the_ID());
var_dump($form_shortcode);
    // Execute the shortcode if it exists
    if ($form_shortcode) {
        echo do_shortcode($form_shortcode);
    }
    ?>
</section>
