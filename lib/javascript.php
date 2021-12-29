<?php

// Load in JS
function millmountain2022_enqueue_scripts() {

	wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', array(), time(), true );

}
  add_action( 'wp_enqueue_scripts', 'millmountain2022_enqueue_scripts' );


/*--------------------------------------------------------------
# Footer JS Hooks
--------------------------------------------------------------*/


function wpb_hook_javascript_footer() {
	?>
		 <script></script>
	<?php
}
add_action( 'wp_footer', 'wpb_hook_javascript_footer' );





?>
