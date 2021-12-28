<?php


function millmountain_assets() {
	wp_enqueue_style( 'millmountain-stylesheet', get_template_directory_uri() . '/assets/css/main.css', array(), time(), 'all' );
}

add_action( 'wp_enqueue_scripts', 'millmountain_assets' );




