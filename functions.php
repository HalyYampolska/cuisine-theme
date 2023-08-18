<?php

function cuisine_files() {
    wp_enqueue_script('main-cuisine-js', get_theme_file_uri('/js/cusine.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('fonts-googleapis', '//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i'); 
    wp_enqueue_style('cuisine_main_styles', get_theme_file_uri('/css/style.css'));  
}

add_action('wp_enqueue_scripts', 'cuisine_files');

// Title for page, optional build header menu
function cuisine_features () {
    register_nav_menu('headerMenuLocation', 'Header Menu Location'); 
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cuisine_features');