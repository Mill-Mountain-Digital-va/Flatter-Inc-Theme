<?php


function millmountain_assets() {
	wp_enqueue_style( 'millmountain-stylesheet', get_template_directory_uri() . '/assets/css/main.css', array('millmountain-fa-icons'), time(), 'all' );
	wp_enqueue_style( 'millmountain-fa-icons', "https://kit.fontawesome.com/ef97c3d056.js", array(), time(), 'all' );
}

add_action( 'wp_enqueue_scripts', 'millmountain_assets' );




