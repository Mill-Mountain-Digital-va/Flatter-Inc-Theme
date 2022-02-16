<?php

function keyword_footer_one_function() {

	$shortcode_footer_one = get_theme_mod( 'millmountain2022_shortcode_footer_one', '' );
	return $shortcode_footer_one;


}

add_shortcode( 'keyword-footer-one', 'keyword_footer_one_function' );

function hero_headline_function(){

	$shortcode_one = get_theme_mod('millmountain2022_shortcode_one', '');
	return $shortcode_one;
	
	}
	
add_shortcode('hero-heading', 'hero_headline_function');


