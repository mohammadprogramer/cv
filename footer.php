<footer class="gap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/footer.png)">
	<div class="container">
		<div class="footer-data">
			<img alt="log" src="<?php echo get_template_directory_uri(); ?>img/orix-logo.png">
			<p><?php dynamic_sidebar('footer-1'); ?></p>
					
                    <?php dynamic_sidebar('footer-3'); ?>
					
					<h6>© 2022 CV Resume<i class="fa-solid fa-heart"></i><?php dynamic_sidebar('footer-2'); ?></h6>
		</div>
	</div>
</footer> 



<!-- popup -->
<div class="backdrop"></div>
    <div class="box">
        <div class="flex-img">
          <img alt="popup-img" src="https://via.placeholder.com/291x530">
          <div class="your-name">
                    <h5>Have Question?</h5>
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
                            </select>
                            <textarea>Your Message *</textarea>
                            <button class="button button--moema button--text-thick button--text-upper button--size-s">Send Message</button>
                        </form>
                    </div>
                    <div class="close"><i class="fa-solid fa-xmark"></i></div>
        </div>
    </div>
<!-- popup end -->
<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
	<!-- owl.carousel -->
	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/animating.js"></script>
	
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/perfect-scrollbar.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nice-select.min.js"></script>
	<!-- cursor -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/cursor.js"></script>
	<!-- fancybox -->
    
	<!-- isotope -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/isotope-init-home-1.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
	<!-- custom -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>	
	<?php wp_footer(); ?>
</body>