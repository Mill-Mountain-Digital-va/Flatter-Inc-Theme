<?php


function millmountain_assets() {
	wp_enqueue_style( 'millmountain-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'millmountain_assets' );


function millmountain_admin_assets() {
	wp_enqueue_style( 'millmountain-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all' );
}

add_action( 'admin_enqueue_scripts', 'millmountain_assets' );


