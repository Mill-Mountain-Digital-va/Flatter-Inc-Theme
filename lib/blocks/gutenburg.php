<?php

function millmountain_allowed_block_types( $allowed_block_types, $post ) {
	// Add core blocks for all post types
	$blocks = array(
		'millmountain/slider',
	);

	// // For all other post types, use custom blocks
	// $theme_blocks = tux_get_acf_block_list();
	// foreach ( $theme_blocks as $block ) {
	//  // append path
	//  $blocks[] = 'acf/' . $block;
	// }

	return $blocks;
}

add_filter( 'allowed_block_types', 'millmountain_allowed_block_types', 10, 2 );

// add_action( 'wp_print_styles', 'tux_deregister_default_block_styles', 100 );
// function tux_deregister_default_block_styles() {
//  wp_dequeue_style( 'wp-block-library' );
// }
