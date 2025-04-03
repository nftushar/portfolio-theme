<section class="section__container skill__container" id="skill">
    <div class="skill__content">
        <!-- Skill Section Header -->
        <p class="section__subheader">
            <?php
            // Fetching ACF field for skill section header
            $skills_subheader = get_field('skill_section_header', get_the_ID()); // Updated field name
            if (!$skills_subheader) {
                echo "No skill section header"; // Fallback message
            } else {
                echo esc_html($skills_subheader); // Display the skill section header
            }
            ?>
        </p>

        <!-- Skill Section Title -->
        <h2 class="section__header">
            <?php
            // Fetching ACF field for section title
            $section_title = get_field('skill_section_title', get_the_ID());
            if (!$section_title) {
                $section_title = 'Default Section Title'; // Fallback value if no title is found
            }
            echo wp_kses_post($section_title); // Display section title
            ?>
            <span><?php echo esc_html(get_field('skill_section_subtitle', get_the_ID())); ?></span>
        </h2>

        <!-- Skill Section Subtitle -->
        <p class="section__description">
            <?php
            $section_subtitle = get_field('skill_section_description', get_the_ID());
            echo esc_html($section_subtitle ?: 'My commitment to quality, attention to detail.'); // Default fallback
            ?>
        </p>

        <!-- Skill Button Section -->
        <div class="skill__btn">
            <?php
            $skill_section_btn_label = get_field('skill_section_btn_label', get_the_ID()) ?: 'Hire Me'; // Default button text
            $skill_section_btn_link = get_field('skill_section_btn_link', get_the_ID()) ?: '#'; // Default button link
            ?>
            <a href="<?php echo esc_url($skill_section_btn_link); ?>" class="btn"><?php echo esc_html($skill_section_btn_label); ?></a>
        </div>
    </div>

    <!-- Skills Grid (Display Skills Posts) -->
    <div class="skill__grid">
        <?php
        $skills_query = new WP_Query(array(
            'post_type'      => 'skills',
            'posts_per_page' => -1,
        ));

        if ($skills_query->have_posts()) : 
            while ($skills_query->have_posts()) : $skills_query->the_post();
                $skill_icon = get_field('skill_icon');
        ?>
                <div class="skill__card">
                    <?php if (!empty($skill_icon)) : ?>
                        <span class="dashicons <?php echo esc_attr($skill_icon); ?> skill__icon"></span>
                    <?php endif; ?>
                    <h4><?php the_title(); ?></h4>
                    <p><?php echo wp_kses_post(get_the_content()); ?></p>
                </div>
        <?php endwhile;
            wp_reset_postdata();
        else :
            echo 'No skills found.'; // If no posts are found
        endif;
        ?>
    </div>
</section>