<?php
/**
 * Template Name: Home
 */
get_header("header"); // فراخوانی هدر اختصاصی
?>

<section  class="hero-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
				<div class="user-data">
				<h1>Willimes Parker</h1>
					<h2><?php the_title();?></h2>
					
					<p>Graphic Designer, HTML Coder, PHP Programmer 
						 and Project Manager</p>
						<a href="javascript:void(0)" class="lightbox-toggle magic-hover magic-hover__square button button--moema button--text-thick button--text-upper button--size-s">Start Consulting</a>
						<span>Available for Freelance</span>
				</div>
			</div>
			<div class="col-lg-6 col-md-12" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="500">
				<div class="hero-section-img">
					<img alt="hero-girl-img" src="<?php echo get_template_directory_uri(); ?>/https://via.placeholder.com/630x630">
					<div class="happy-satisfied">
						<h2>10K</h2>
						<p>Happy Satisfied 
							Customers</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
				<div class="about-mee">
					<h2>About Me</h2>
					<p>I like creating a cool design project.</p>
					
					<ul class="social-media-icon"><li><a href="pdf/orix.pdf" class="magic-hover magic-hover__square button button--moema button--text-thick button--text-upper button--size-s"><i class="fa-solid fa-download" target="_blank"></i>Download CV</a></li>
						<li><a class="f magic-hover magic-hover__square" href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a class="in magic-hover magic-hover__square" href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a></li>
						<li><a class="t magic-hover magic-hover__square" href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a></li>
					</ul>
					<ul class="age">
						<li><h6>Age:<span>29</span></h6></li>
						<li><h6>Residence:<span>USA</span></h6></li>
						<li><h6>Address:<span>88 Some Street, Some Town</span></h6></li>
						<li><h6>E-mail:<span>email@example.com</span></h6></li>
						<li><h6>Phone:<span>+0123 123 456 789</span></h6></li>
						<li><h6>Freelance:<span>Available</span></h6></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
				<div class="progress-data">
					<p>Vestibulum vitae lorim tellus nec dui dictum lorim viverra
						ac, place uilm rat Lorse viverra a eros ac, pl 
						rat Lorse ipsom lorimes aul erdum. erdum.  Vestibulum vi
						rat Lorse ipsom lorimes aul erdum. erdum. </p>
						<img alt="sine" src="<?php echo get_template_directory_uri(); ?>/img/sine.png">
						<div class="progress-bara-data">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="home-one-progress">
										<div class="count-time">
										<h2 class="timer count-title count-number" data-to="50" data-speed="2000">50</h2><span>%</span>
										</div>
										<h5>Graphic Design</h5>
										<div class="meter cadetblue">
											  <span data-progress="50" style="width:0;"></span>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="home-one-progress">
										<div class="count-time">
										<h2 class="timer count-title count-number" data-to="75" data-speed="2000">75</h2><span>%</span>
										</div>
										<h5>Development</h5>
										<div class="meter cadetblue">
											  <span data-progress="75" style="width:0;"></span>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="home-one-progress">
										<div class="count-time">
										<h2 class="timer count-title count-number" data-to="38" data-speed="2000">38</h2><span>%</span>
										</div>
										<h5>Marketing Ideas</h5>
										<div class="meter cadetblue">
											  <span data-progress="38" style="width:0;"></span>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="home-one-progress">
										<div class="count-time">
										<h2 class="timer count-title count-number" data-to="63" data-speed="2000">63</h2><span>%</span>
										</div>
										<h5>Web Management</h5>
										<div class="meter cadetblue">
											  <span data-progress="63" style="width:0;"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>

			</div>
		</div>
	</div>
</section> 
<section class="services gap no-top">
    <div class="container">
        <div class="hading" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
            <img alt="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.png">
            <p>What We Do</p>
            <h2>Our Services</h2>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => 6,
                'order' => 'ASC',
                'post_status' => 'publish' // فقط پست‌های منتشر شده
            );
            
            $services = new WP_Query($args);
            
            if ($services->have_posts()) :
                $delay = 200;
                while ($services->have_posts()) : $services->the_post();
                    $icon = get_field('service_icon');
                    $excerpt = get_field('service_short_description');
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="300">
                        <div class="service-data">
                            <div class="service-icon">
                                <?php if ($icon) : ?>
                                    <?php echo $icon; ?>
                                <?php elseif (has_post_thumbnail()) : ?>
                                    <?php
                                    $thumb = get_the_post_thumbnail_url(get_the_ID(), 'service-icon');
                                    echo '<img src="' . esc_url($thumb) . '" alt="' . get_the_title() . '" style="width:60px;height:60px;object-fit:cover;">';
                                    ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/default-icon.png" alt="Service" style="width:60px;height:60px;">
                                <?php endif; ?>
                            </div>
                            
                            <h5>
                                <a class="magic-hover magic-hover__square" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h5>
                            
                            <?php if ($excerpt) : ?>
                                <p><?php echo $excerpt; ?></p>
                            <?php else : ?>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                    $delay += 100;
                endwhile;
                wp_reset_postdata();
            else : ?>
                <div class="col-12">
                    <p class="text-center">در حال حاضر خدمتی برای نمایش وجود ندارد.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
// تست نمایش پست‌ها

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
?>

<?php echo do_shortcode('[resume_timeline]'); ?>

<section class="my-project gap">
	<div class="container">
		<div class="hading" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
			<img alt="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.png">
			<p>Collection of my project</p>
			<h2>Work Showcase</h2>
		</div>
		<div class="portfolios">
			<div class="filters portfolio-controllers-container" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
                <div class=" portfolio-controllers wow fadeLeft button-group js-radio-button-group" data-wow-duration="1s" data-wow-delay=".1s" data-filter-group="color">
                    <button type="button" class="magic-hover magic-hover__square button is-checked filter-btn active-work" data-filter="">Show All</button>
                    <button type="button" class="magic-hover magic-hover__square filter-btn" data-filter=".Design">Design</button>                         
                    <button type="button" class="magic-hover magic-hover__square filter-btn" data-filter=".Branding">Branding</button>
                    <button type="button" class="magic-hover magic-hover__square filter-btn" data-filter=".Development">Development</button>
                    <button type="button" class="magic-hover magic-hover__square filter-btn" data-filter=".UI-Design">UX/UI Design</button>
                </div>
        	</div>
       
			<div class="grid row align-items-center" data-aos="fade-up"  data-aos-delay="400" data-aos-duration="500">
				<div class="col-lg-4  UI-Design Branding">	
					<div class="portfolio-detail">
						<div class="portfolio-img">
							<figure class="gap-img">
									<img class="one hove" alt="profile img" src="https://via.placeholder.com/250x250">
									<div class="hover-data">
									  <a class="magic-hover magic-hover__square" href="#">List of Brands</a>
									  <p>Digital Web</p>
									 </div>
							</figure>
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 UX/UI-Design Branding">
					<div class="portfolio-detail">
						<div class="portfolio-img">
							<figure class="gap-top">
									<img alt="profile img" src="https://via.placeholder.com/366x366">
									<div class="hover-data">
										  <a class="magic-hover magic-hover__square" href="#">App UX UI Design</a>
										  <p>Website Design & Development</p>
										 </div>
							</figure>
							  
						</div>
					</div>
				</div>
				<div class="col-lg-4 Design Development">	
					<div class="portfolio-detail">
						<div class="portfolio-img">
							<figure class="gap-img">
									<img class="one" alt="profile img" src="https://via.placeholder.com/250x250">
									<div class="hover-data">
									  	<a class="magic-hover magic-hover__square" href="#">List of Brands</a>
									  	<p>Digital Web</p>
									 </div>
							</figure>
							  
						</div>
					</div>
				</div>
				<div class="col-lg-4 Branding Design">	
					<div class="portfolio-detail">
						<div class="portfolio-img">
							<figure class="gap-top">
									<img alt="profile img" src="https://via.placeholder.com/250x250">
									 <div class="hover-data">
									  	<a class="magic-hover magic-hover__square" href="#">List of Brands</a>
									  	<p>Digital Web</p>
									 </div>
							</figure>
							  <div class="hover-data">
							  	<a class="magic-hover magic-hover__square" href="#">List of Brands</a>
							  	<p>Digital Web</p>
							 </div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 Branding  UI-Design Design">
					<div class="portfolio-detail">
						<div class="portfolio-img">
							<figure class="gap-top">
									<img  alt="profile img" src="https://via.placeholder.com/366x366">
									 <div class="hover-data">
									  	<a class="magic-hover magic-hover__square" href="#">Presentation Mockup</a>
									  	<p>Website Design & Development</p>
									 </div>
							</figure>
						</div>
					</div>
				</div>
				<div class="col-lg-4 Design Development">
					<div class="portfolio-detail">
						<div class="portfolio-img">
							<figure class="gap-img">
									<img class="one" alt="profile img" src="https://via.placeholder.com/250x250">
									 <div class="hover-data">
									  	<a class="magic-hover magic-hover__square" href="#">List of Brands</a>
									  	<p>Digital Web</p>
									 </div>
							</figure>
							  
						</div>
					</div>
				</div>
				<div class="col-lg-4 UX/UI UI-Design Design">
					<div class="portfolio-detail">
						<div class="portfolio-img">
							<figure class="gap-img">
									<img class="one" alt="profile img" src="https://via.placeholder.com/366x366">
									 <div class="hover-data">
									  	<a class="magic-hover magic-hover__square" href="#">List of Brands</a>
									  	<p>Digital Web</p>
									 </div>
							</figure>
							  
						</div>
					</div>
				</div>
				<div class="col-lg-4 Design Development Branding Design">
					<div class="portfolio-detail">
						<div class="portfolio-img">
							<figure  class="gap-top">
									<img alt="profile img" src="https://via.placeholder.com/250x250">
									 <div class="hover-data">
									  	<a class="magic-hover magic-hover__square" href="#">Website Design</a>
									  	<p>Website Design & Development</p>
									 </div>
							</figure>
							 
						</div>
					</div>
				</div>
				<div class="col-lg-4 UI-Design Design">
					<div class="portfolio-detail">
						<div class="portfolio-img">
							<figure class="gap-img">
								<img class="one" alt="profile img" src="https://via.placeholder.com/366x366">
								 <div class="hover-data">
									  	<a class="magic-hover magic-hover__square" href="#">List of Brands</a>
									  	<p>Digital Web</p>
									 </div>	
							</figure>
							  
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="load-button">
					<a href="#" class="magic-hover magic-hover__square button button--moema button--text-thick button--text-upper button--size-s"><i class="fa-solid fa-spinner"></i> Load More</a>
				</div>
	  </div>	
</section>
 <section class="satisfied gap" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
	<div class="container">
		<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="customers gap">
							<h2>1M+ Satisfied Customers</h2>
							<p>Vestibulum vitae lorim tellus nec dui dictum lorim
									ac, place uilm rat Lorse ipsom</p>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="custome owl-carousel owl-theme">
							<div class="edison item">
								<p>We help our clients from the definition of 
										their strategy to the realization of their digital 
										ecosystem. At the heart of our approach is 
										the constant search for the juncture between 
										aesthetic.</p>
										<div class="quote-img">
											<img alt="quote" src="<?php echo get_template_directory_uri(); ?>/img/quote-1.png">
											<div>
												<h4>Edison Cavani</h4><span>
												Product Management at Spotify</span>
											</div>
											</div>
							</div>
							<div class="edison item">
								<p>We help our clients from the definition of 
										their strategy to the realization of their digital 
										ecosystem. At the heart of our approach is 
										the search for the juncture between 
										aesthetic.</p>
										<div class="quote-img">
											<img alt="quote" src="<?php echo get_template_directory_uri(); ?>/img/quote-1.png">
											<div>
												<h4>thomas smith</h4><span>
												Product Management at Spotify</span>
											</div>
											</div>
							</div>
							<div class="edison item">
								<p>We help our clients from the definition of 
										their strategy to the realization of their digital 
										ecosystem. At the heart of our approach is 
										the constant search for the juncture between 
										aesthetic.</p>
										<div class="quote-img">
											<img alt="quote" src="<?php echo get_template_directory_uri(); ?>/img/quote-1.png">
											<div>
												<h4>willimes mazkar</h4><span>
												Product Management at Spotify</span>
											</div>
											</div>
							</div>
					</div>
				</div>
		</div>
	</div>
</section> 
<section class="recent-articles gap">
    <div class="container">
        <div class="hading" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
            <img alt="dots" src="<?php echo get_template_directory_uri(); ?>/img/dots.png">
            <p>News & Blog</p>
            <h2>Recent Articles</h2>
        </div>
        <div class="row">
            <?php
            // ایجاد کوئری برای دریافت آخرین پست‌ها
            $recent_posts = new WP_Query(array(
                'post_type' => 'post', // فقط پست‌ها را بگیرد
                'posts_per_page' => 3, // تعداد پست‌های نمایش داده شده
                'ignore_sticky_posts' => 1 // پست‌های چسبنده را نادیده بگیرد
            ));
            
            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                        <div class="blog-data">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('blog-thumbnail', ['style' => 'width:100px;height:100px;object-fit:cover;']); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/path-to-default-image.jpg" alt="Default blog image">
                            <?php endif; ?>
                            
                            <div class="message-icon">
                               
                                
                            </div>
                            
                            <h6>
                                <?php echo get_the_date('F j, Y'); ?> 
                                <span>|</span> 
                                <?php echo get_the_author(); ?>
                            </h6>
                            
                            <h4>
                                <a class="magic-hover magic-hover__square" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                            



                            
                            <a class="magic-hover magic-hover__square" href="<?php the_permalink(); ?>">
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); // بازنشانی کوئری
            else: ?>
                <p>هیچ مقاله‌ای یافت نشد.</p>
            <?php endif; ?>
        </div>
        
        <div class="load-button" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="magic-hover magic-hover__square button button--moema button--text-thick button--text-upper button--size-s">View All News</a>
        </div>
    </div>
</section>
<section  class="from-you gap no-top">
	<div class="container">
		<div class="hading" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
			<p>Have Question Contact Us?</p>
			<h2>Love to Hear From You, 
				Get in Touch!</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
				<div class="e-mail">
					<div class="icon-box"><i class="fa-solid fa-envelope"></i></div>
					<div><h6>Phone No</h6>
							<a class="magic-hover magic-hover__square" href="mailto:username@domain.com">username@domain.com</a>
					</div>
				</div>
				<div class="e-mail">
					<div class="icon-box"><i class="fa-solid fa-phone"></i></div>
					<div><h6>Email Address</h6>
							<a class="magic-hover magic-hover__square" href="callto:+(123)4567890">+(123) 456 7890</a>
					</div>
				</div>
				<div class="e-mail">
					<div class="icon-box"><i class="fa-solid fa-location-dot"></i></div>
					<div><h6>Location</h6>
							<a class="magic-hover magic-hover__square" href="javascript:void(0)">Block Street No 2101 USA</a>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-sm-12" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
				<div class="your-name" style="background-image: url(<?php echo get_template_directory_uri(); ?>/./img/blur-1.png)">
					<form class="one">
						<input type="text" name="YourName" placeholder="Your Name *">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<input type="text" name="Email" placeholder="Your Email *">
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">
								<input type="text" name="Phone" placeholder="Phone No *">
							</div>
						</div>
						<select class="nice-select Advice">
							  <option>Select Topic</option>
							  <option>Select Topic 1</option>
							  <option>Select Topic 2</option>
							  <option>Select Topic 3</option>
							  <option>Select Topic 4</option>
						</select>
						<textarea placeholder="Your Message *"></textarea>
						<button class="magic-hover magic-hover__square button button--moema button--text-thick button--text-upper button--size-s">Send Message</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>	
<?php get_footer('footer');?>