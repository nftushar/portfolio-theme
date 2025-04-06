<?php
// Include ACF
if (!function_exists('get_field')) {
    // Check if ACF is installed as a plugin
    if (!class_exists('ACF')) {
        // If not, include ACF from theme
        // require_once get_template_directory() . '/includes/acf/acf.php';
    }
} 



function tagency_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tagency')
    ));
}
add_action('after_setup_theme', 'tagency_theme_setup');

// Enqueue styles and scripts
function tagency_scripts() {
    // Theme stylesheet
    wp_enqueue_style('tagency-style', get_stylesheet_uri());
    
    // Main CSS
    wp_enqueue_style('tagency-main-style', get_template_directory_uri() . '/assets/css/styles.css');
    
    // Google Fonts
    wp_enqueue_style('tagency-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    
    // Remixicon
    wp_enqueue_style('tagency-remixicon', 'https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css');
    
    // Swiper CSS
    wp_enqueue_style('tagency-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    
    // Main JS
    wp_enqueue_script('tagency-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    
    // ScrollReveal and Swiper JS
    wp_enqueue_script('tagency-scrollreveal', 'https://unpkg.com/scrollreveal', array(), '1.0', true);
    wp_enqueue_script('tagency-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'tagency_scripts');

function enqueue_dashicons() {
    wp_enqueue_style('dashicons', 'https://cdn.jsdelivr.net/npm/@icon/dashicons@0.9.0-alpha.4/dashicons.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_dashicons');



// Register Skills post type
function register_skills_post_type() {
    register_post_type('skills', array(
        'labels' => array(
            'name' => __('Skills'),
            'singular_name' => __('Skill'),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'register_skills_post_type');

// Register Testimonials post type
function register_testimonials_post_type() {
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials'),
            'singular_name' => __('Testimonial'),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'register_testimonials_post_type');

// Customizer settings
function tagency_customize_register($wp_customize) {
    // About Section
    $wp_customize->add_section('tagency_about_section', array(
        'title' => __('About Section', 'tagency'),
        'priority' => 30,
    ));
    
    // About Image
    $wp_customize->add_setting('about_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
        'label' => __('About Image', 'tagency'),
        'section' => 'tagency_about_section',
        'settings' => 'about_image',
    )));
    
    // About Title
    $wp_customize->add_setting('about_title', array(
        'default' => 'I have <span>Creative Design</span> Experience',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('about_title', array(
        'label' => __('About Title', 'tagency'),
        'section' => 'tagency_about_section',
        'type' => 'text',
    ));
    
    // About Description
    $wp_customize->add_setting('about_description', array(
        'default' => 'Welcome to my personal portfolio! With a passion for turning ideas into visually stunning digital experiences, I specialize in crafting unique, user-friendly designs.',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('about_description', array(
        'label' => __('About Description', 'tagency'),
        'section' => 'tagency_about_section',
        'type' => 'textarea',
    ));
    
    // Stats Section
    $wp_customize->add_section('tagency_stats_section', array(
        'title' => __('Stats Section', 'tagency'),
        'priority' => 31,
    ));
    
    // Clients Number
    $wp_customize->add_setting('clients_number', array(
        'default' => '80+',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('clients_number', array(
        'label' => __('Clients Number', 'tagency'),
        'section' => 'tagency_stats_section',
        'type' => 'text',
    ));
    
    // Projects Number
    $wp_customize->add_setting('projects_number', array(
        'default' => '200+',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('projects_number', array(
        'label' => __('Projects Number', 'tagency'),
        'section' => 'tagency_stats_section',
        'type' => 'text',
    ));
    
    // Reviews Number
    $wp_customize->add_setting('reviews_number', array(
        'default' => '99+',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('reviews_number', array(
        'label' => __('Reviews Number', 'tagency'),
        'section' => 'tagency_stats_section',
        'type' => 'text',
    ));
    
    // CV URL
    $wp_customize->add_setting('cv_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('cv_url', array(
        'label' => __('CV Download URL', 'tagency'),
        'section' => 'tagency_stats_section',
        'type' => 'url',
    ));
    
    // Social Media
    $wp_customize->add_section('tagency_social_section', array(
        'title' => __('Social Media', 'tagency'),
        'priority' => 32,
    ));
    
    // Facebook
    $wp_customize->add_setting('facebook_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('facebook_url', array(
        'label' => __('Facebook URL', 'tagency'),
        'section' => 'tagency_social_section',
        'type' => 'url',
    ));
    
    // Twitter
    $wp_customize->add_setting('twitter_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('twitter_url', array(
        'label' => __('Twitter URL', 'tagency'),
        'section' => 'tagency_social_section',
        'type' => 'url',
    ));
    
    // LinkedIn
    $wp_customize->add_setting('linkedin_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('linkedin_url', array(
        'label' => __('LinkedIn URL', 'tagency'),
        'section' => 'tagency_social_section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'tagency_customize_register');