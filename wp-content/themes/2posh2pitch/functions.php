<?php

// Enqueue Styles/Scripts

function posh_enqueue_style() {
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/css/theme.css' );
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/min/theme-min.js' , array( 'jquery' ), null, true);
}

add_action( 'wp_enqueue_scripts', 'posh_enqueue_style' );

// Designedby Filter
function remove_footer_admin () {
    echo 'Designed & Developed By Thirdrail Creative';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Admin: Remove Admin Bar Items
function remove_admin_bar_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_logo');

// Hide ACF admin
// add_filter('acf/settings/show_admin', '__return_false');

// WordPress custom title script

function title_tag() {
    if(is_home()) {
        echo the_title(); echo ' - '; bloginfo('description');
    } else {
        bloginfo('name'); echo ' - '; bloginfo('description');
    }
}


// Register Nav
function posh_register_menus() {
    register_nav_menus(
        array(
	    'primary-menu' => __( 'Primary Menu', 'posh' ),
	)
    );
}
add_action( 'init', 'posh_register_menus' );

?>
