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


	$wp_customize->add_setting('millmountain2022_shortcode_one', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	
	$wp_customize->add_control('millmountain2022_shortcode_one', array(
		'type' => 'text',
		'label' => esc_html__('Hero Headline is [hero-headline]', 'millmountain'),
		'section' => 'Custom Text',
	
	
	));

		// Custom Colors
	
	$wp_customize->add_section( 'Custom Color', array(
		'title' => esc_html__('Custom Color' ),
		'description' => esc_html__( 'Add Color here' ),
		'priority' => 120,
		'capability' => 'edit_theme_options',
		) );
		
			// Nav Background color
	$wp_customize->add_setting( 'nav_background_color', array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_background_color', array(
		'section' => 'colors',
		'label'   => esc_html__( 'Nav Background Color', 'millmountain' ),
	) ) );

}
// End theme customizer


add_action( 'customize_register', 'millmountain2022_customize_register' );

