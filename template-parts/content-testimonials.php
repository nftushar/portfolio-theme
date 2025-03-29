<section class="section__container review__container" id="review">
    <p class="section__subheader">Reviews</p>
    <h2 class="section__header">
        Our Customer Say Something <span>About Us</span>
    </h2>
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php
            $testimonials = array(
                array(
                    'name' => 'John Doe',
                    'position' => 'CEO at Tech Innovations',
                    'image' => 'review-1.jpg',
                    'content' => 'Working with them was a game-changer. Their creative vision and technical expertise brought our website to life, exceeding all expectations.'
                ),
                array(
                    'name' => 'Jane Smith',
                    'position' => 'Manager at Creative Solutions',
                    'image' => 'review-2.jpg',
                    'content' => 'The project was delivered on time and within budget. Their design skills are top-notch, and their attention to detail is impeccable.'
                ),
                array(
                    'name' => 'Alice Brown',
                    'position' => 'Freelance Graphic Designer',
                    'image' => 'review-3.jpg',
                    'content' => 'I\'ve collaborated with many web developers, but they stands out for their exceptional creativity and professional approach.'
                )
            );
            
            foreach($testimonials as $testimonial) {
                echo '<div class="swiper-slide">';
                echo '<div class="review__card">';
                echo '<div class="review__ratings">';
                for($i = 0; $i < 5; $i++) {
                    echo '<span><i class="ri-star-fill"></i></span>';
                }
                echo '</div>';
                echo '<p>' . esc_html($testimonial['content']) . '</p>';
                echo '<div class="review__details">';
                echo '<img src="' . get_template_directory_uri() . '/assets/images/' . $testimonial['image'] . '" alt="review" />';
                echo '<div>';
                echo '<h4>' . esc_html($testimonial['name']) . '</h4>';
                echo '<h5>' . esc_html($testimonial['position']) . '</h5>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>