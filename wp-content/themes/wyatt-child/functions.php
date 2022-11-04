<?php

if ( ! function_exists( 'wyatt_child_theme_enqueue_scripts' ) ) {
	/**
	 * Function that enqueue theme's child style
	 */
	function wyatt_child_theme_enqueue_scripts() {
		$main_style = 'wyatt-main';

		wp_enqueue_style( 'wyatt-child-style', get_stylesheet_directory_uri() . '/style.css', array( $main_style ) );
	}

	add_action( 'wp_enqueue_scripts', 'wyatt_child_theme_enqueue_scripts' );
}
