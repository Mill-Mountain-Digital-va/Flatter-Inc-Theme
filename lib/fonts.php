<?php
function google_font_one() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_font_one' );

function google_font_two() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Oxygen&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_font_two' );

