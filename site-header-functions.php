<?php
function site_header_setup() {

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'aurora' ),
        'mobile-menu-1' => esc_html__( 'Mobile', 'aurora' ),
    ) );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

}
add_action( 'after_setup_theme', 'site_header_setup' );

/**
 * Enqueue scripts and styles.
 */
function site_header_scripts() {

    wp_enqueue_style( 'site-header-styles', get_template_directory_uri() . '/easy-navigation/css/site-header-style.css', '', '20171129v1' );

	wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/easy-navigation/js/vendor/jquery.mmenu.min.js', array('jquery'), '20170909', true );

	wp_enqueue_script( 'site-header', get_template_directory_uri() . '/easy-navigation/js/site-header.js', array('mmenu'), '20171129v3', true );

}
add_action( 'wp_enqueue_scripts', 'site_header_scripts' );
