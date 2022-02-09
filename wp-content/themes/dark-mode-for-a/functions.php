<?php
define( 'darkmfa_version', '1.0' );
add_action( 'wp_enqueue_scripts', 'darkmfa_enqueue_styles', 15 );
function darkmfa_enqueue_styles() {
wp_enqueue_style( 'darkmfa-css', get_stylesheet_directory_uri() . '/style.css', array( 'astra-theme-css' ), darkmfa_version, 'all' );
}