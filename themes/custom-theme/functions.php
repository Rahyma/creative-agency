<?php

function customtheme_theme_support(){
    //adds dynamic title tag support
    add_theme_support('title-tag'); // for title change
    add_theme_support('custom-logo'); // for change logo in wp automatically change 
}
add_action('after_setup_theme','customtheme_theme_support');

function customtheme_menus(){
    $locations = array(
        'primary'=> "Desktop Menu",
        'footer' => "Footer Menu"
    );
    register_nav_menus($locations);
}

add_action('init','customtheme_menus');


function customtheme_register_styles(){

    $version =wp_get_theme()->get('Version');

    wp_enqueue_style('customtheme-style',get_template_directory_uri() . "/style.css", array
    ("customtheme-bootstrap") , $version,'all');
    wp_enqueue_style('customtheme-bootstrap',get_template_directory_uri() . "/assets/css/m-style.css", 
    array() , '4.0.0','all');
    wp_enqueue_style('customtheme-fontawesome',
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array() , '4.7.0','all');

}
add_action('wp_enqueue_scripts', 'customtheme_register_styles');


function customtheme_register_scripts(){

    $version =wp_get_theme()->get('Version');

    wp_enqueue_script('customtheme-functions',get_template_directory_uri() . "/assets/js/functions.js", array
    ("customtheme-mlib") , $version,true);
    wp_enqueue_script('customtheme-mlib',get_template_directory_uri() . "/assets/js/mlib.js", 
    array() , '3.3.1',true);
 

}
add_action('wp_enqueue_scripts', 'customtheme_register_scripts');


?>