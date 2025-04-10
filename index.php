<?php
/*
Theme Name: tAgency
Theme URI: https://example.com/tagency-theme
Author: Your Name
Author URI: https://example.com
Description: A creative portfolio theme for designers and agencies.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: tagency
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


 get_header(); ?>

<main>
    <?php
    // About Section
    get_template_part('template-parts/content', 'about');
    
    // Stats Section
    get_template_part('template-parts/content', 'stats');
    
    // Skills Section
    get_template_part('template-parts/content', 'skills');
    
    // Portfolio Section
    get_template_part('template-parts/content', 'portfolio');
    
    // Testimonials Section
    get_template_part('template-parts/content', 'testimonials');
    
    // Contact Section
    get_template_part('template-parts/content', 'contact');
    ?>
</main>

<?php get_footer(); ?>