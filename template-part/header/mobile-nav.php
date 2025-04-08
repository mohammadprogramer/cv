<div class="mobile-nav" id="mobile-nav">
    <div class="mobile-nav-img-data">
    <?php
    wp_nav_menu([
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'mobile-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    ]);
    ?>
        <a class="magic-hover magic-hover__square" href="<?php echo esc_url(home_url('/')); ?>">
            <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/img/black-logo.png">
        </a>
    </div>
    
    <div class="mobile-nav">
    <a href="javascript:void(0)" class="mobile-nav-close"><i class="fa-solid fa-times"></i></a>
    <?php
    wp_nav_menu([
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'mobile-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    ]);
    ?>
</div>
   
    
    <a class="magic-hover magic-hover__square" href="javascript:void(0)" id="res-cross"></a>
    <a href="<?php echo get_template_directory_uri(); ?>/pdf/orix.pdf" class="magic-hover magic-hover__square button download button--moema button--text-thick button--text-upper button--size-s" target="_blank">
        <i class="fa-solid fa-download"></i>Download CV
    </a>
</div>