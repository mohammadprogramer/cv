<?php
/**
 * Orix Theme Functions
 * 
 * @package Orix
 */

// اطمینان از عدم دسترسی مستقیم به فایل
if (!defined('ABSPATH')) {
    exit;
}


/**
 * Redirect empty searches to 404 page
 */
function orix_redirect_empty_search($query) {
    if ($query->is_main_query() && $query->is_search() && empty(get_search_query())) {
        wp_redirect(home_url('/404/'));
        exit();
    }
}
add_action('pre_get_posts', 'orix_redirect_empty_search');

/**
 * Custom 404 page title
 */
function orix_404_title($title) {
    if (is_404()) {
        $title = __('Orix - 404', 'orix');
    }
    return $title;
}
add_filter('pre_get_document_title', 'orix_404_title');

/**
 * Theme setup
 */
function orix_theme_setup() {
    // پشتیبانی از لوگوی سفارشی
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // پشتیبانی از تگ عنوان
    add_theme_support('title-tag');

    // پشتیبانی از تصویر شاخص
    add_theme_support('post-thumbnails');

    // پشتیبانی از HTML5
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));
    
    // پشتیبانی از ترجمه
    load_theme_textdomain('orix', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'orix_theme_setup');

/**
 * Custom Nav Menu Walker
 */
class Orix_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="sub-menu dropdown-menu">';
    }
    
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        
        // اضافه کردن کلاس dropdown برای آیتم‌های دارای زیرمنو
        if ($args->walker->has_children) {
            $classes[] = 'dropdown';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        
        $output .= '<li class="' . esc_attr($class_names) . '">';
        
        $attributes = '';
        $attributes .= !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        // اضافه کردن ویژگی‌های dropdown برای آیتم‌های دارای زیرمنو
        if ($args->walker->has_children) {
            $attributes .= ' class="nav-link dropdown-toggle magic-hover magic-hover__square" role="button" data-bs-toggle="dropdown" aria-expanded="false"';
        } else {
            $attributes .= ' class="nav-link magic-hover magic-hover__square"';
        }
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Register theme menus
 */
function orix_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('منوی اصلی', 'orix'),
            'mobile-menu'  => __('منوی موبایل', 'orix'),
            'footer-menu'  => __('منوی فوتر', 'orix')
        )
    );
}
add_action('init', 'orix_register_menus');

/**
 * Optimize jQuery loading
 */
function orix_optimize_jquery() {
    if (!is_admin()) {
        // حذف jQuery پیش‌فرض وردپرس
        wp_deregister_script('jquery');
        
        // ثبت jQuery از CDN با fallback به نسخه محلی
        wp_register_script(
            'jquery', 
            'https://code.jquery.com/jquery-3.6.0.min.js', 
            array(), 
            '3.6.0', 
            true
        );
        
        // اضافه کردن fallback
        add_filter('script_loader_tag', function($tag, $handle) {
            if ('jquery' === $handle) {
                $tag = str_replace(
                    '></script>',
                    ' onerror="jQueryFallback()"></script>',
                    $tag
                );
                $tag .= '<script>function jQueryFallback(){document.write(\'<script src="' . esc_url(get_template_directory_uri() . '/js/jquery-3.6.0.min.js') . '"><\/script>\');}</script>';
            }
            return $tag;
        }, 10, 2);
    }
}
add_action('wp_enqueue_scripts', 'orix_optimize_jquery');

/**
 * Enqueue theme assets
 */
function orix_enqueue_assets() {
    // استایل‌ها
    wp_enqueue_style(
        'bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', 
        array(), 
        '5.2.0'
    );

    // Magic Mouse CSS
wp_enqueue_style('magic-mouse', get_template_directory_uri() . '/css/magic-mouse.css', array(), '1.0');

// Magic Mouse JS
wp_enqueue_script('magic-mouse', get_template_directory_uri() . '/js/magic-mouse.js', array('jquery'), '1.0', true);
    
    wp_enqueue_style(
        'orix-main-style', 
        get_template_directory_uri() . '/css/style.css', 
        array('bootstrap'), 
        filemtime(get_template_directory() . '/css/style.css')
    );
    
    // اسکریپت‌ها
    wp_enqueue_script(
        'bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', 
        array('jquery'), 
        '5.2.0', 
        true
    );
    
    wp_enqueue_script(
        'orix-custom-js', 
        get_template_directory_uri() . '/js/custom.js', 
        array('jquery', 'bootstrap'), 
        filemtime(get_template_directory() . '/js/custom.js'), 
        true
    );
    
    // اضافه کردن داده‌های محلی برای اسکریپت‌ها
    wp_localize_script('orix-custom-js', 'orixData', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'home_url' => home_url('/'),
    ));
}
add_action('wp_enqueue_scripts', 'orix_enqueue_assets');

/**
 * Disable Gutenberg editor
 */
function orix_disable_gutenberg() {
    // غیرفعال‌سازی برای همه انواع پست‌ها
    add_filter('use_block_editor_for_post_type', '__return_false', 10);
    
    // غیرفعال‌سازی برای ویجت‌ها
    remove_theme_support('widgets-block-editor');
    
    // غیرفعال‌سازی استایل‌های گوتنبرگ
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('init', 'orix_disable_gutenberg');

/**
 * Register footer widget areas
 */
function orix_register_footer_widgets() {
    register_sidebar(array(
        'name'          => __('فوتر بخش ۱', 'orix'),
        'id'            => 'footer-1',
        'description'   => __('ابزارک‌های این قسمت در ستون اول فوتر نمایش داده می‌شوند', 'orix'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('فوتر بخش ۲', 'orix'),
        'id'            => 'footer-2',
        'description'   => __('ابزارک‌های این قسمت در ستون دوم فوتر نمایش داده می‌شوند', 'orix'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('فوتر بخش ۳', 'orix'),
        'id'            => 'footer-3',
        'description'   => __('ابزارک‌های این قسمت در ستون سوم فوتر نمایش داده می‌شوند', 'orix'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'orix_register_footer_widgets');

/**
 * Add editor styles
 */
function orix_add_editor_styles() {
    add_editor_style(array(
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css',
        get_template_directory_uri() . '/css/editor-style.css',
    ));
}
add_action('admin_init', 'orix_add_editor_styles');

/**
 * Security enhancements
 */
function orix_security_enhancements() {
    // حذف نسخه وردپرس از head و feeds
    remove_action('wp_head', 'wp_generator');
    add_filter('the_generator', '__return_empty_string');
    
    // غیرفعال کردن XML-RPC
    add_filter('xmlrpc_enabled', '__return_false');
    
    // جلوگیری از نمایش خطاها به کاربران
    if (!current_user_can('manage_options')) {
        ini_set('display_errors', 'Off');
        error_reporting(0);
    }
}
add_action('init', 'orix_security_enhancements');

/**
 * Performance optimizations
 */
function orix_performance_optimizations() {
    // حذف emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    
    // حذف REST API link tag
    remove_action('wp_head', 'rest_output_link_wp_head');
    
    // حذف لینک های اضافی
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'orix_performance_optimizations');


function theme_customizer_settings($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'your-theme'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Willimes Parker',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control('hero_title_control', array(
        'label' => __('Hero Title', 'your-theme'),
        'section' => 'hero_section',
        'settings' => 'hero_title',
        'type' => 'text',
    ));
    
    // سایر تنظیمات...
}
add_action('customize_register', 'theme_customizer_settings');


function register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_location( 'header' );
}
add_action( 'elementor/theme/register_locations', 'register_elementor_locations' );

// اجازه آپلود فایل SVG در وردپرس
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

add_action('after_setup_theme', 'custom_image_sizes');
function custom_image_sizes() {
    add_image_size('service-icon', 50, 50, true); // 50x50 پیکسل، برش داده شود
}



//time line resume 

// Register Resume Post Type
function register_resume_post_type() {
    $labels = array(
        'name' => 'Resume Items',
        'singular_name' => 'Resume Item',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',
    );

    register_post_type('resume_item', $args);
}
add_action('init', 'register_resume_post_type');

// Register Resume Category Taxonomy
function register_resume_category() {
    $labels = array(
        'name' => 'Resume Categories',
        'singular_name' => 'Resume Category',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_in_rest' => true,
    );

    register_taxonomy('resume_category', 'resume_item', $args);
}
add_action('init', 'register_resume_category');