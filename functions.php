<?php 

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/public/css/main.min.css' );
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css' );


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	

	wp_enqueue_script( 'main', get_template_directory_uri() . '/public/js/main.js', array('jquery'), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>