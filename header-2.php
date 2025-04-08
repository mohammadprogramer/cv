<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orix - Home 2</title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo-icon.png">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
  <!-- nice-select -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nice-select.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/perfect-scrollbar.css">
  <!-- aos -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aos.css">
  <!-- magic-mouse -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magic-mouse.css">
  <!-- simple-line-icons -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/simple-line-icons.css">
  <!-- style -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<!-- color -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/color.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/fontawesome/css/all.min.css">
	<!-- Font Awesome 5 -->
	<script src="https://kit.fontawesome.com/27a041baf1.js" crossorigin="anonymous"></script>
</head>
<body class="menu-layer">

<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
<!-- loader start-->
<div class="page-loader">
 <div class="spinner">
	<p>loading...</p>
	<div class="spinner-area spinner-first"></div>
	<div class="spinner-area spinner-second"></div>
	<div class="spinner-area spinner-third"></div>
</div>
</div>
<!-- loader end-->
<header class="two for" id="stickyHeader">
	<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-2">
				<div class="logo-icon">
    <?php if (has_custom_logo()) : ?>
        <a class="magic-hover magic-hover__square" href="<?php echo esc_url(home_url('/')); ?>">
            <?php the_custom_logo(); ?>
        </a>
    <?php else : ?>
        <a class="magic-hover magic-hover__square" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="light" src="<?php echo get_template_directory_uri(); ?>/img/orix-logo.png" alt="<?php bloginfo('name'); ?>">
            <img class="drak" src="<?php echo get_template_directory_uri(); ?>/img/black-logo.png" alt="<?php bloginfo('name'); ?>">
        </a>
    <?php endif; ?>
    <a href="javascript:void(0)" class="bar-menu magic-hover magic-hover__square"><i class="fa-solid fa-bars"></i></a>
</div>

				 </div>
				 <div class="col-xl-7">
					 <div class="menu-bar">
						<nav>
						  <ul>
							<li class="menu-item-has-children"><a class="magic-hover magic-hover__square" href="#">Home</a>
									
								<ul>
										<li><a class="magic-hover magic-hover__square" href="index.html">Home 1</a></li> 
										<li><a class="magic-hover magic-hover__square" href="index-2.html">Home 2 </a></li>
										<li><a class="magic-hover magic-hover__square" href="index-3.html">Home 3 </a></li>
											
								</ul>
									</li>
									
								
								<li><a class="magic-hover magic-hover__square" href="services.html">services</a></li>
									
								<li class="menu-item-has-children"><a class="magic-hover magic-hover__square" href="#">Portfolio</a>
								<ul>
									<li><a class="magic-hover magic-hover__square" href="portfolio-details-1.html">Portfolio 1</a></li> 
									<li><a class="magic-hover magic-hover__square" href="portfolio-details-2.html">Portfolio 2</a></li>
									<li><a class="magic-hover magic-hover__square" href="portfolio-details-3.html">Portfolio 3</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a class="magic-hover magic-hover__square" href="#">Blog</a>
									<ul>
										<li><a class="magic-hover magic-hover__square" href="blog-details-1.html">Blog Details 1</a></li> 
										<li><a class="magic-hover magic-hover__square" href="blog-details-2.html">Blog Details 2</a></li>
												
									</ul>
								</li>
								<li class="menu-item-has-children"><a class="magic-hover magic-hover__square" href="#">Pages</a>
									<ul>
										<li><a class="magic-hover magic-hover__square" href="about.html">About</a></li>
										<li><a class="magic-hover magic-hover__square" href="404.html">404</a></li>
									</ul>
								</li>
									<li><a class="magic-hover magic-hover__square" href="contact.html">Contact</a></li>
								
							</ul>
						</nav>
					 </div>
				 </div>
				 <div class="col-xl-3">
	          <div class="extras">
	           <a href="javascript:void(0)" class="bar-menu magic-hover magic-hover__square"><i class="fa-solid fa-bars"></i></a>
	          
	          <a href="pdf/orix.pdf" class="magic-hover magic-hover__square button download  button--moema button--text-thick button--text-upper button--size-s" target="_blank"><i class="fa-solid fa-download"></i>Download CV</a>
	          </div>
          
		    	</div>
				    <div class="menu-wrap">
		           <div class="menu-inner ps ps--active-x ps--active-y">
		                 <span class="menu-cls-btn"><i class="cls-leftright"></i><i class="cls-rightleft"></i></span>
		              <div class="contact-info">
		                 	<a class="magic-hover magic-hover__square" href="index.html">
							            <img src="<?php echo get_template_directory_uri(); ?>/img/black-logo.png" alt="logo">
							        </a>
										<h5>I use animation as a third dimension by which to simplify experiences and kuiding thro each and every interaction.</h5>

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
							</div>
		        </div>
		</div>
		</div>

		<div class="mobile-nav" id="mobile-nav" style="display: block;">
			<div class="<?php echo get_template_directory_uri(); ?>/mobile-nav-img-data">
				<a class="magic-hover magic-hover__square" href="index.html">
            	<img alt="logo" src="<?php echo get_template_directory_uri(); ?>/img/black-logo.png">
            </a>
            </div>
            <ul>

                  <li class="menu-item-has-children">

                    <a class="magic-hover magic-hover__square" href="JavaScript:void(0)"><i class="icon-home"></i> Home</a>

                  <ul class="sub-menu">

                      <li><a class="magic-hover magic-hover__square" href="index.html">Home 1</a>

                      <li><a class="magic-hover magic-hover__square" href="index-2.html">Home 2</a></li>

                      <li><a class="magic-hover magic-hover__square" href="index-3.html">Home 3</a></li>

                      <li><a class="magic-hover magic-hover__square" href="index-4.html">Home 4 ( Light )</a></li>
					  					<li><a class="magic-hover magic-hover__square" href="index-4-dark.html">Home 4 ( Dark )</a></li>

                     </ul>

                  </li>

                  <li><a class="magic-hover magic-hover__square" href="about.html"><i class="icon-user"></i> About</a></li>

                    <li class="menu-item-has-children"><a class="magic-hover magic-hover__square" href="JavaScript:void(0)"><i class="icon-briefcase"></i> Portfolio</a>

                    <ul class="sub-menu">

                      <li><a class="magic-hover magic-hover__square" href="portfolio-details-1.html">Portfolio Details 1</a>

                      <li><a class="magic-hover magic-hover__square" href="portfolio-details-2.html">Portfolio Details 2</a></li>

                      <li><a class="magic-hover magic-hover__square" href="portfolio-details-3.html">Portfolio Details 3</a></li>

                     </ul>

                  </li>

                  <li class="menu-item-has-children"><a class="magic-hover magic-hover__square" href="JavaScript:void(0)"><i class="icon-layers"></i>Blog</a>

                    <ul class="sub-menu">

                    	<li><a class="magic-hover magic-hover__square" href="our-blog.html">Our Blog</a>

                      <li><a class="magic-hover magic-hover__square" href="blog-details-1.html">Blog Details 1</a>

                      <li><a class="magic-hover magic-hover__square" href="blog-details-2.html">Blog Details 2</a></li>

                     </ul>

                  </li>

                  <li class="menu-item-has-children"><a class="magic-hover magic-hover__square" href="JavaScript:void(0)"><i class="icon-folder"></i> Pages</a>

                    <ul class="sub-menu">

                      <li><a class="magic-hover magic-hover__square" href="services.html">Services</a>

                      <li><a class="magic-hover magic-hover__square" href="services-details.html">Services Details</a></li>

                      <li><a class="magic-hover magic-hover__square" href="pricing-plans.html">Pricing Plans</a>

                      <li><a class="magic-hover magic-hover__square" href="404.html">404</a></li>

                     </ul>

                  </li>

                  <li><a class="magic-hover magic-hover__square" href="contact.html"><i class="icon-envelope-open"></i> Contact</a></li>

                </ul>

          <a  class="magic-hover magic-hover__square" href="JavaScript:void(0)" id="res-cross"></a>

           <a href="pdf/orix.pdf" class="magic-hover magic-hover__square button download  button--moema button--text-thick button--text-upper button--size-s" target="_blank"><i class="fa-solid fa-download"></i>Download CV</a>

      </div>
</header>