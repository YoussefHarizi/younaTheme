<?php
/*
**Include navwalker class for bootstrap navigation menu
** added by @youna
**
*/
require_once('wp-bootstrap-navwalker.php');
/*
**add featured images
** added by @youna
**
*/
add_theme_support( 'post-thumbnails');


/*
**Function to add my dependecies styles
** added by @youna
**
*/
function youna_bt_style(){
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/all.min.css');
    wp_enqueue_style('style',get_template_directory_uri().'/style.css');
    
}
/*
**Function to add my dependecies scripts
** added by @youna
**
*/
function youna_scripts(){
    // remove default registration for jquery
    wp_deregister_script( 'jquery' );
    // register new jquery
    wp_register_script( 'jquery',includes_url('js/jquery/jquery.js' ), array(),false, true );
    // enqueue the new jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js', array(),false,true);
    wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js', array(),false,true);
    wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.min.js');
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.min.js');
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
    
}

/*
**Function to add menu
** added by @youna
**
*/
function add_menu(){
    register_nav_menus( array(
        "youna_menu"=> "Navigation Bar",
        "youna-footer-menu"=> "Footer Menu",

        
        ) );
}

function youna_bootstrap_menu(){
    wp_nav_menu( array(
        'theme_location' => 'youna_menu',
        'menu_class'=>'navbar-nav ml-auto',
        'container' => 'false',
        'depth' => 4,
        'walker' => new wp_bootstrap_navwalker()
    ) );
}

/*
**Function to add action
** added by @youna
**
*/
add_action('wp_enqueue_scripts','youna_bt_style');
add_action('wp_enqueue_scripts','youna_scripts');
add_action( 'init', 'add_menu' );
