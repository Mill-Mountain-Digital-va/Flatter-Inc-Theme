<?php

function millmountain_post_meta() {
	/* translators: %s: Post Date*/

	printf(
		esc_html__( 'Posted On %s', 'millmountain' ),
		'<a href="' . esc_url( get_permalink() ) . '"> <time datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . ' </time></a>'
	);

	/* translators: %s: Post Author*/

	printf(
		esc_html__( 'By %s', 'millmountain' ),
		'<a href="' . esc_url( get_the_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
	);

	echo ' By <a href="' . esc_url( get_the_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>';

}

function millmountain_readmore_link() {

	echo '<a href="' . esc_url( get_permalink() ) . '" title = "' . the_title_attribute( array( 'echo' => false ) ) . '">';

	  /* translators: %s: Post Title*/

	printf(
		wp_kses(
			__( 'Read More <span class = "screen-reader-text">About %s </span>', 'millmountain' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		get_the_title()
	);

	echo '</a>';
}


/*--------------------------------------------------------------
# Sanitization Customization Helpers
--------------------------------------------------------------*/

function millmountain2022_sanitize_link_one($input){
    $allowed = array('link' => array(
        'href' => array(),
        'title' => array(),
        'rel' => array(),
    ));
    return wp_kses($input, $allowed);
}

function millmountain2022_sanitize_link_two($input){
$allowed = array('iframe' => array(
    'src' => array(),
   
));
}
function millmountain2022_sanitize_h_one($input){
$allowed_hone = array('h1' => array(
));
}

function millmountain2022_sanitize_h_two($input){
$allowed_htwo = array('h2' => array(
  'h1' => array(),
  
));
}

