<div class="menu-wrap">
    <div class="menu-inner ps ps--active-x ps--active-y">
        <span class="menu-cls-btn"><i class="cls-leftright"></i><i class="cls-rightleft"></i></span>
        <div class="contact-info">
            <a class="magic-hover magic-hover__square" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/black-logo.png" alt="logo">
            </a>
            <h5><?php echo get_bloginfo('description'); ?></h5>
            
            <ul class="recent-news gallery-photos">
                <?php 
                // گالری تصاویر - می‌توانید از کاستم فیلد استفاده کنید
                for ($i = 1; $i <= 6; $i++) {
                    echo '<li><a class="magic-hover magic-hover__square" href="https://via.placeholder.com/97x97" data-fancybox="gallery"><img alt="girl" src="https://via.placeholder.com/97x97"></a></li>';
                }
                ?>
            </ul>

            <div class="e-mail">
                <div class="icon-box"><i class="fa-solid fa-envelope"></i></div>
                <div>
                    <h6>Phone No</h6>
                    <a class="magic-hover magic-hover__square" href="mailto:<?php echo antispambot('username@domain.com'); ?>"><?php echo antispambot('username@domain.com'); ?></a>
                </div>
            </div>
            
            <div class="e-mail">
                <div class="icon-box"><i class="fa-solid fa-phone"></i></div>
                <div>
                    <h6>Email Address</h6>
                    <a class="magic-hover magic-hover__square" href="tel:+(123)4567890">+(123) 456 7890</a>
                </div>
            </div>
        </div>
    </div>
</div>