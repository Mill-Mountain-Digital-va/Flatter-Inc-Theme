<?php

function keyword_footer_one_function() {

	$shortcode_footer_one = get_theme_mod( 'millmountain2022_shortcode_footer_one', '' );
	return $shortcode_footer_one;

}

add_shortcode( 'keyword-footer-one', 'keyword_footer_one_function' );


