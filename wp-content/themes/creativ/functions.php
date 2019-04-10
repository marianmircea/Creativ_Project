<?php
/*
    add_action( 'wp_enqueue_scripts', function (){
        wp_register_style( 'parent_theme_css', get_template_directory_uri() . '/style.css' );
	    wp_register_style( 'child_theme_css', get_stylesheet_uri() );

	    wp_enqueue_style( 'parent_theme_css' );
	    wp_enqueue_style( 'child_theme_css' );

    } );
*/

	add_action( 'wp_enqueue_scripts', function () {

		$parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style ),
			wp_get_theme()->get('Version')
		);
	} );
?>