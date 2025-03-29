<section class="section__container skill__container" id="skill">
    <div class="skill__content">
        <p class="section__subheader">My Skills</p>
        <h2 class="section__header">
            <?php echo get_theme_mod('skills_title', 'Why Hire Me For Your Next <span>Project?</span>'); ?>
        </h2>
        <p class="section__description">
            <?php echo get_theme_mod('skills_description', 'My commitment to quality, attention to detail, and passion for innovation ensure that every project is a success.'); ?>
        </p>
        <div class="skill__btn">
            <button class="btn">Hire Me</button>
        </div>
    </div>
    <div class="skill__grid">
        <?php
        $skills = array(
            array(
                'icon' => 'ri-pulse-line',
                'title' => 'Visual Design',
                'description' => 'Creating stunning, user-friendly interfaces that captivate and engage.'
            ),
            array(
                'icon' => 'ri-pencil-ruler-2-line',
                'title' => 'Design Prototype',
                'description' => 'Developing interactive prototypes & designs to visualize and refine your ideas.'
            ),
            array(
                'icon' => 'ri-graduation-cap-line',
                'title' => 'UX Research',
                'description' => 'Conducting thorough research to ensure intuitive and effective user experiences.'
            )
        );
        
        foreach($skills as $skill) {
            echo '<div class="skill__card">';
            echo '<span><i class="' . esc_attr($skill['icon']) . '"></i></span>';
            echo '<h4>' . esc_html($skill['title']) . '</h4>';
            echo '<p>' . esc_html($skill['description']) . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</section>