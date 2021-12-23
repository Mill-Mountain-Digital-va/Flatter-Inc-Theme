<?php



function millmountain_customize_register( $wp_customize ) {
	/*--------------------------------------------------------------
	# MARGIN SECTION
	--------------------------------------------------------------*/

	/*--------------------------------------------------------------
	# IMAGES SECTION
	--------------------------------------------------------------*/

	/*--------------------------------------------------------------
	# Font
	--------------------------------------------------------------*/

	$wp_customize->add_section(
		'Font',
		array(
			'title'       => esc_html__( 'Font' ),
			'description' => esc_html__( 'Add Font From Google here with the template href="https://yourfontlink.com"' ),
			'priority'    => 110,
			'capability'  => 'edit_theme_options',
		)
	);

	$wp_customize->add_setting(
		'millmountain_font_type_one',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_font_type_one',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Font Type One', 'millmountain' ),
			'section' => 'Font',

		)
	);

	$wp_customize->add_setting(
		'millmountain_font_type_two',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_font_type_two',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Font Type Two', 'millmountain' ),
			'section' => 'Font',

		)
	);

	/*--------------------------------------------------------------
	# TEXT SECTION
	--------------------------------------------------------------*/

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
		'millmountain_header_text_one',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_header_text_one',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Header Text One', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

	$wp_customize->add_setting(
		'millmountain_header_text_two',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_header_text_two',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Header Text Two', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

	$wp_customize->add_setting(
		'millmountain_bar_text_one',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_bar_text_one',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Bar Text One', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

	$wp_customize->add_setting(
		'millmountain_bar_text_two',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_bar_text_two',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Bar Text Two', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

	$wp_customize->add_setting(
		'millmountain_slider_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_slider_text',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Slider Text', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

	$wp_customize->add_setting(
		'millmountain_middle_text_one',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_middle_text_one',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Middle Text One', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

	$wp_customize->add_setting(
		'millmountain_middle_text_two',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_middle_text_two',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Middle Text Two', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);
	$wp_customize->add_setting(
		'millmountain_middle_text_three',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_middle_text_three',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Middle Text Three', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

	$wp_customize->add_setting(
		'millmountain_footer_text_one',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_footer_text_one',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Footer Text One', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

	$wp_customize->add_setting(
		'millmountain_footer_text_two',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'millmountain_footer_text_two',
		array(
			'type'    => 'text',
			'label'   => esc_html__( 'Footer Text Two', 'millmountain' ),
			'section' => 'Custom Text',

		)
	);

}

add_action( 'customize_register', 'millmountain_customize_register' );

function millmountain_sanitize_font_one( $input ) {
	$allowed = array(
		'link' => array(
			'href'  => array(),
			'title' => array(),
			'rel'   => array(),
		),
	);
	return wp_kses( $input, $allowed );
}



