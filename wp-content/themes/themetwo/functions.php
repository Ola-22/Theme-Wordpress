<?php
require __DIR__ . '/inc/widgets/about-widget.php';
require __DIR__ . '/inc/widgets/services-widget.php';
require __DIR__ . '/inc/widgets/testimonial-widget.php';

require __DIR__ . '/inc/customize.php';

function mytheme_theme_setup() {
    load_theme_textdomain( 'theme-two', get_template_directory() . '/languages' );
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support( 'customize-selective-refresh-widgets' );

    register_nav_menu( 'primary', 'Primary Menu' );
    register_nav_menu( 'social', 'Social Menu' );
    register_nav_menu( 'clients', 'Clients Menu' );
    //add_image_size('mytheme-thumbnail', 600, 600, false);
    //set_post_thumbnail_size(600, 600);
}
add_action('after_setup_theme', 'mytheme_theme_setup');


function mytheme_header_image() {
    echo '<style>
        .s-home{
            background-image:url(' . get_header_image() . ' );
            data-parallax="scroll";
            width=3000;
            height=2000;
               data-position-y=center;
        }
        .s-homeimg  {
            margin: 7px 9px 0; 
            width=3000;
            height=2000; }
    </style>';
}
add_action('wp_head', 'mytheme_header_image');


function mytheme_enqueue_scripts() {
    if(is_rtl()) {
        wp_enqueue_style(
            'base-rtl',
            get_theme_file_uri( '/assets/css/base-rtl.css' ),
            [],
            '',
            'all'
        );
        wp_enqueue_style(
            'vendor-rtl',
            get_theme_file_uri( '/assets/css/vendor-rtl.css' ),
            [],
            '',
            'all'
        );
        wp_enqueue_style(
            'main-rtl',
            get_theme_file_uri( '/assets/css/main-rtl.css' ),
            [],
            '',
            'all'
        );
        }
    else{
    wp_enqueue_style(
        'base',
        get_theme_file_uri( '/assets/css/base.css' ),
        [],
        '',
        'all'
    );
    wp_enqueue_style(
        'vendor',
        get_theme_file_uri( '/assets/css/vendor.css' ),
        [],
        '',
        'all'
    );
    wp_enqueue_style(
        'main',
        get_theme_file_uri( '/assets/css/main.css' ),
        [],
        '',
        'all'
    );
}
    wp_enqueue_script(
        'modernizr',
        get_theme_file_uri( '/assets/js/modernizr.js' ),
        [],
        '',
        'all'
    );
    wp_enqueue_script(
        'jquery',
        get_theme_file_uri( '/assets/js/jquery-3.2.1.min.js' ),
        [],
        '',
        'all'
    );
    wp_enqueue_script(
        'plugins',
        get_theme_file_uri( '/assets/js/plugins.js' ),
        [],
        '',
        'all'
    );
    wp_enqueue_script(
        'main',
        get_theme_file_uri( '/assets/js/main.js' ),
        [],
        '',
        'all'
    );

}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


function mytheme_register_sidebars() {
    register_sidebar([
        'id' => 'left-sidebar',
        'title' => 'Left Sidebar',
        'description' => 'The Main Sidebar On The Page Left',
    ]);
    register_sidebar([
        'id' => 'services-sidebar',
        'title' => 'services Sidebar',
        'description' => 'The Main Sidebar On The Page Services',
    ]);

    register_sidebar([
        'id' => 'testimonial-sidebar',
        'title' => 'Testimonial Sidebar',
        'description' => 'The Main Sidebar On The Page Services',
    ]);
    register_widget( 'Mythme_About_Widget' );
    register_widget( 'Mythme_Services_Widget' );
    register_widget( 'Mythme_Testimonial_Widget' );
}

add_action('widgets_init', 'mytheme_register_sidebars');