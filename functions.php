<?php

//Page demo
add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array(
        'main-nav' => __('huvudmeny'),
        //hittar enbart sidor under denna meny eller gäller för dess
    ));
}

//active support for dynamic header
$args = array(
    'width' => 1920,
    'height' => 400,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'uploads' => true
);

add_theme_support('custom-header', $args);

//active wdiget area
add_action('widgets_init', 'cool_widget_init');

function cool_widget_init()
{
    register_sidebar(array(
        'mame' => 'footer1',
        'id' => 'footer1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        //'before_tite' => '<h2>',
        //'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'mame' => 'footer2',
        'id' => 'footer2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        //'before_tite' => '<h2>',
        //'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'mame' => 'footer3',
        'id' => 'footer3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        //'before_tite' => '<h2>',
        //'after_title' => '</h2>'
    ));
}

//featured image
add_theme_support('post-thumbnails');