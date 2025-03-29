<section class="portfolio__container" id="portfolio">
    <div class="portfolio__content">
        <p class="section__subheader">Portfolio</p>
        <h2 class="section__header">
            My Creative Works Latest <span>Projects</span>
        </h2>
        <p class="section__description">
            From sleek web applications to dynamic user interfaces, these works highlight my ability to bring unique ideas to life.
        </p>
        <div class="portfolio__btn">
            <button class="btn">Show More</button>
        </div>
    </div>
    <div class="portfolio__image__wrapper">
        <div class="portfolio__image">
            <?php
            $portfolio_images = array(
                'portfolio-1.jpg',
                'portfolio-2.png',
                'portfolio-3.png',
                'portfolio-4.png',
                'portfolio-5.png',
                'portfolio-6.png'
            );
            
            foreach($portfolio_images as $image) {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/' . $image . '" alt="portfolio" />';
            }
            ?>
        </div>
    </div>
</section>