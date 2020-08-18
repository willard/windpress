<?php 

/**
 * Register and Enqueue Styles.
 */
function windpress_register_styles() {
	wp_enqueue_style( 'windpress-style', get_template_directory_uri() . '/dist/main.css', array(), '1' );
}

add_action( 'wp_enqueue_scripts', 'windpress_register_styles' );

/**
 * Register and Enqueue Scripts.
 */
function windpress_register_scripts() {
	wp_enqueue_script( 'windpress-js', get_template_directory_uri() . '/dist/main.js', array(), '1', false );
	wp_script_add_data( 'windpress-js', 'async', true );

}

add_action( 'wp_enqueue_scripts', 'windpress_register_scripts' );