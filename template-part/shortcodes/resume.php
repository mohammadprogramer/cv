<?php
function resume_timeline_shortcode($atts) {
    ob_start();
    
    // کوئری برای بخش Education
    $education = new WP_Query(array(
        'post_type' => 'resume_item',
        'tax_query' => array(
            array(
                'taxonomy' => 'resume_category',
                'field' => 'slug',
                'terms' => 'education'
            )
        ),
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    ));
    
    // کوئری برای بخش Experience
    $experience = new WP_Query(array(
        'post_type' => 'resume_item',
        'tax_query' => array(
            array(
                'taxonomy' => 'resume_category',
                'field' => 'slug',
                'terms' => 'experience'
            )
        ),
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    ));
    ?>
    
    <section class="my-resume gap">
        <div class="container">
            <div class="hading" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                <img alt="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.png">
                <p>Professional Experience</p>
                <h2>My Resume</h2>
            </div>
            
            <div class="row">
                <!-- بخش Education -->
                <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="resume-data">
                        <div class="headings resume">
                            <h3>Education</h3>
                        </div>
                        
                        <?php if ($education->have_posts()): ?>
                            <?php while ($education->have_posts()): $education->the_post(); ?>
                                <div class="education <?php echo ($education->current_post + 1 === $education->post_count) ? 'end' : ''; ?>">
                                    <?php if ($period = get_field('period')): ?>
                                        <h5><?php echo esc_html($period); ?></h5>
                                    <?php endif; ?>
                                    
                                    <?php if ($position = get_field('position')): ?>
                                        <p><?php echo esc_html($position); ?></p>
                                    <?php endif; ?>
                                    
                                    <div class="studies">
                                        <h6><?php the_title(); ?></h6>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No education items found.</p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- بخش Experience -->
                <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="resume-data">
                        <div class="headings resume">
                            <h3>Experience</h3>
                        </div>
                        
                        <?php if ($experience->have_posts()): ?>
                            <?php while ($experience->have_posts()): $experience->the_post(); ?>
                                <div class="education <?php echo ($experience->current_post + 1 === $experience->post_count) ? 'end' : ''; ?>">
                                    <?php if ($period = get_field('period')): ?>
                                        <h5><?php echo esc_html($period); ?></h5>
                                    <?php endif; ?>
                                    
                                    <?php if ($position = get_field('position')): ?>
                                        <p><?php echo esc_html($position); ?></p>
                                    <?php endif; ?>
                                    
                                    <div class="studies">
                                        <h6><?php the_title(); ?></h6>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No experience items found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('resume_timeline', 'resume_timeline_shortcode');