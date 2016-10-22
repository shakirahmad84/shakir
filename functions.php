<?php

// Theme Features
function shakir_features() {
    load_theme_textdomain( 'shakir', get_template_directory_uri().'/languages' );
    
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header' );
    
    register_nav_menus(array(
        'header-menu'       =>  __( 'Header Menu', 'shakir' )
    ));
}
add_action( 'after_setup_theme', 'shakir_features' );

// Enqueue Styles And Scripts
function shakir_css_js() {
    wp_enqueue_style( 'bootstrap',    get_template_directory_uri().'/css/bootstrap.min.css', null, 'v3.3.7', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', null, 'v4.6.3', 'all' );
    wp_enqueue_style( 'animate',      get_template_directory_uri().'/css/animate.css', null, 'v3.5.1', 'all' );
    wp_enqueue_style( 'main',         get_template_directory_uri().'/css/main.css', null, 'v0.1', 'all' );
    wp_enqueue_style( 'style',        get_stylesheet_uri() );
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap',   get_template_directory_uri().'/js/bootstrap.min.js', array( 'jquery' ), 'v3.3.7', true );
    wp_enqueue_script( 'main',        get_template_directory_uri().'/js/main.js', array( 'jquery' ), 'v0.1', true );
}
add_action( 'wp_enqueue_scripts', 'shakir_css_js' );

// Register Widgets
function shakir_widgets() {
    register_sidebar(array(
        'id'            =>  'right-sidebar',
        'name'          =>  __( 'Right Sidebar', 'shakir'),
        'description'   =>  __( 'Add Right Sidebar Here', 'shakir' ),
    ));
}
add_action( 'widgets_init', 'shakir_widgets' );

// Register Custom Post
function shakir_custom_posts() {
    register_post_type( 'portfolio', array(
        'labels'        =>  array(
            'name'          =>  __( 'Portfolios', 'shakir' ),
            'menu_name'     =>  __( 'Portfolios', 'shakir' ),
            'all_items'     =>  __( 'All Portfolios', 'shakir' ),
            'add_new'       =>  __( 'Add New Portfolio', 'shakir' ),
            'add_new_item'  =>  __( 'Add New Portfolio', 'shakir' ),
        ),
        'public'        =>  true,
        'supports'      =>  array( 'title', 'thumbnail', 'excerpt', 'revisions', 'custom-fields', 'page-attributes' ),
    ));
}
add_action( 'init', 'shakir_custom_posts' );


// Include Files
include_once( 'inc/cmb2.php' );