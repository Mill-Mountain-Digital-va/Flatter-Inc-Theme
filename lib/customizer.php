<?php
/*--------------------------------------------------------------
# TEXT CUSTOMIZE SECTION
--------------------------------------------------------------*/

function millmountain2022_customize_register( $wp_customize ) {

	$wp_customize->add_section(
		'Custom Text',
		array(
			'title'       => esc_html__( 'Custom Text' ),
			'description' => esc_html__( 'Add custom Text here' ),
			'priority'    => 160,
			'capability'  => 'edit_theme_options',
		)
	);

	$wp_customize->add_setting(
		'millmountain2022_shortcode_footer_one',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain2022_shortcode_footer_one',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Footer One Shortcode is [keyword-footer-one]', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

}
// End theme customizer


add_action( 'customize_register', 'millmountain2022_customize_register' );

