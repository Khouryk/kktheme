<?php
/*=================================
stylesheets and javascript files
=================================*/

function custom_theme_scripts(){
    //Bootstrap CSS
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

    //main stylesheet
     wp_enqueue_style('main-styles', get_stylesheet_uri());

     //javascript files
     wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
     wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');


}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*=================================
adds featured images
=================================*/


add_theme_support('post-thumbnails');


/*=================================
custom header image
=================================*/

$custom_image_header = array(
    'width' => 520,
    'height' => 150,
    'uplaods' => true,
);

add_theme_support('custom-header',$custom_image_header);

/*=================================
feature images set
=================================*/

add_theme_support('post-thumbnails');

/*=================================
create widget area
=================================*/

function blank_widgets_init(){
        register_sidebar(array(
        'name'              => ('Sidebar Widget'),
        'id'                => 'sidebar-widget',
        'description'       => 'Area in the sidebar for content',
        'before-widget'     => '<div class="sidebar-widget-container">',
        'after-widget'      => '</div>',
        'before-title'      => '<h2>',
        'after-title'       => '</h2>'
    ));

    register_sidebar(array(
        'name'              => ('Right Footer Widget'),
        'id'                => 'right-footer-widget',
        'description'       => 'Area in right footer for content',
        'before-widget'     => '<div class="right-footer-widget-container">',
        'after-widget'      => '</div>',
        'before-title'      => '<h2>',
        'after-title'       => '</h2>'
    ));
}

add_action('widgets_init' , 'blank_widgets_init');



?>