<?php



// this is a hook to enqueue stylesheets into our project which hooks into wp_head and add stylesheets in there

function load_stylesheets()

{



    // args ('any name', uri function for root path, . dot to seperate php from text, 'file location', dependencies/stylesheet if no dep. then array(), version-true/false, media queries e.i text only or 'all')

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), 1, 'all');



    // next enqueue stylesheet/bootstrap

    $rand = rand( 1, 99999999999 );

    wp_enqueue_style('stylesheet', get_stylesheet_uri(), '', $rand );







    wp_register_style('custom', get_template_directory_uri() . '/app.css', array(), 1, 'all');

    wp_enqueue_style('custom');



}

// to run function and hook to header arg 2 is function name

add_action('wp_enqueue_scripts', 'load_stylesheets');









// function include_jquery()

// {





//     wp_deregister_script('jquery');



//     wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery_3.4.1.min.js', '', 1, true);





// }

// add_action('wp_enqueue_scripts', 'include_jquery');











function load_javascript()

{



    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);

    wp_enqueue_script('custom');

    



}

add_action('wp_enqueue_scripts', 'load_javascript');







// enables adding menu categories in gui

add_theme_support('menus');



// to enable adding images to posts in wordpress gui

add_theme_support('post-thumbnails');



// Register nav menus from WordPress

register_nav_menus(

    array(

        'top-menu' => __('Top Menu', 'theme'),

        'footer-menu' => __('Footer Menu', 'theme'),

    )

);


add_image_size('smallest', 300, 300, true);

add_image_size('largest', 1100, 800, false);