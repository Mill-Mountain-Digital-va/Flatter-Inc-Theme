<?php
function google_font_one() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_font_one' );

function google_font_two() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet', false );
}
add_action( 'wp_enqueue_scripts', 'google_font_two' );

