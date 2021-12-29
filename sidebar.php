<?php

function millmountain_sidebar_widgets() {
	register_sidebar(
		array(
			'id'            => 'primary-sidebar',
			'name'          => esc_html__( 'Primary Sidebar', millmountain ),
			'description'   => esc_html__( 'description' ),
			'before_widget' => '<section id="%1$s" class="" >',
			'after_widget'  => '</section>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
		)
	);
}

add_action( 'widgets_init', 'millmountain_sidebar_widgets' );



