<?php
/**
 * Server-side rendering of the `millmountain/tab` block.
 *
 * @package WordPress
 */

/**
 * Renders the `millmountain/tab` block on server.
 *
 * @param array $attributes The block attributes.
 * @param array $content innerBlocks HTML.
 *
 * @return string Returns the compiled twig template.
 */
function tux_block_tab_render_callback( $attributes, $content, $block ) {
	$html = '<section id="panel-block-' . $attributes['id'] . '" aria-labelledby="tab-block-' . $attributes['id'] . '" class="millmountain-c-tabs__panel millmountain-l-flow-copy">' . $content . '</section>';

	return $html;
}

function millmountain_register_block_tab() {
	register_block_type_from_metadata(
		__DIR__,
		array(
			'render_callback' => 'millmountain_block_tab_render_callback',
		)
	);
}
add_action( 'init', 'millmountain_register_block_tab' );
