<?php

function mcocarton_srcipt_enqueue() {

    // wp_enqueue_style('tether',get_template_directory_uri().'/css/tether.min.css', array(),'4.0','all');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css', array(),'4.0','all');
    wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.min.css',array(), '2.0','all');
    wp_enqueue_style('main',get_template_directory_uri().'/css/main.css', array(), '1.0','all');
    wp_enqueue_style('mcocartoncss',get_template_directory_uri().'/css/mcocarton.css', array(), '1.0','all');
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js',array(), '1.11',true);
    // wp_enqueue_script('tetherjs',get_template_directory_uri().'/js/tether.min.js',array(), '1.11',true);
    wp_enqueue_script('modernizr',get_template_directory_uri().'/js/modernizr-2.8.3-respond-1.4.2.min.js',array(), '1.4',true);
    wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array(), '4.0',false);
    // wp_enqueue_script('appjs',get_template_directory_uri().'/js/apps.js',array(), '1.0',true);

}

add_action('wp_enqueue_scripts', 'mcocarton_srcipt_enqueue');

function mcocarton_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
}
add_action('init', 'mcocarton_theme_setup');
