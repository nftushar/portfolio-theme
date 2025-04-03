<section id="stats">
    <div class="stats__container">
        <?php 
        $stats = get_field('stats'); // Get the textarea field
        if ($stats) :
            $stats_lines = explode("\n", $stats); // Split by lines
            foreach ($stats_lines as $line) :
                list($stat_value, $stat_name) = array_map('trim', explode('|', $line)); // Split by "|"
                if ($stat_value && $stat_name) : ?>
                    <div class="stats__card">
                        <h4><?php echo esc_html($stat_value); ?></h4>
                        <p><?php echo esc_html($stat_name); ?></p>
                    </div>
                <?php endif;
            endforeach;
        else : ?>
            <div class="stats__no-data">
                <p>No stats available. Please add some in the WordPress admin.</p>
            </div>
        <?php endif; ?>
    </div>
</section>