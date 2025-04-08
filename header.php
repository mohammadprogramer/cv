<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo-icon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/fontawesome/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class('menu-layer'); ?>>

<!-- loader -->


<header class="two three" id="stickyHeader">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
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
                    <a href="javascript:void(0)" class="bar-menu magic-hover magic-hover__square mobile-menu-toggle d-lg-none"><i class="fa-solid fa-bars"></i></a>
                </div>
            </div>
            
            <div class="col-xl-7 col-lg-7 d-none d-lg-block">
                <div class="menu-bar">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary-menu',
                        'container' => false,
                        'menu_class' => 'main-menu',
                        'items_wrap' => '<nav><ul id="%1$s" class="%2$s">%3$s</ul></nav>'
                    ]);
                    ?>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="extras">
                    <a href="javascript:void(0)" id="desktop-menu" class="magic-hover magic-hover__square menu-btn d-none d-lg-inline-block">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/orix.pdf" class="magic-hover magic-hover__square button download button--moema button--text-thick button--text-upper button--size-s" target="_blank">
                        <i class="fa-solid fa-download"></i>Download CV
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- منوی موبایل -->
    <div class="mobile-nav d-lg-none">
        <div class="mobile-nav-inner">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary-menu',
                'container' => false,
                'menu_class' => 'mobile-menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            ]);
            ?>
        </div>
    </div>
    
    <?php get_template_part('template-parts/header/menu-wrap'); ?>
</header>




<?php
if ( function_exists('hfe_render_header') ) {
    hfe_render_header();
} else {
    // هدر پیش‌فرض
    get_template_part('template-parts/header/default-header');
}
?>