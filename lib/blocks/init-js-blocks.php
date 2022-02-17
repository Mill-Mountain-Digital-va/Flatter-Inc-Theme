<?php
/**
 * Blocks Initializer
 *
 * Enqueue CSS/JS of all the blocks.
 *
 * @since   1.0.0
 * @package CGB
 */

// register js-blocks
function millmoutain_js_blocks_init() {
	if ( ! function_exists( 'register_block_type' ) ) {
		// Gutenberg is not active.
		return;
	}

	// automatically load dependencies and version
	$asset_file = include( '/js-blocks/build/index.asset.php' );

	// add additional dependencies outside of build process
	$deps   = $asset_file['dependencies'];
	$deps[] = 'hm-gb-tools-editor';

	wp_register_script(
		'millmountain-js',
		'/js-blocks/build/index.js',
		$deps,
		$asset_file['version']
	);

	register_block_type(
		'millmountain/block-millmountain-blocks',
		array(
			// Enqueue blocks.build.js in the editor only.
			'editor_script' => 'millmountain-js',
		)
	);
}
add_action( 'init', 'millmountain_js_blocks_init' );

require_once( '/js-blocks/build/slider/index.php' );
