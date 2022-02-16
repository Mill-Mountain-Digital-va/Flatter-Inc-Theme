<?php
// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
add_theme_support(  'wp-mail' );



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
		
			//underline color
	$wp_customize->add_setting( 'underline_color', array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'underline_color', array(
		'section' => 'colors',
		'label'   => esc_html__( 'Underline Color', 'millmountain' ),
	) ) );

}
// End theme customizer


add_action( 'customize_register', 'millmountain2022_customize_register' );

function theme_get_customizer_css() {
    ob_start();

	
	$underline_color = get_theme_mod( 'underline_color', '' );
	if ( ! empty( $underline_color ) ) {
	  ?>
	  .red-underline{
		  border-bottom: 1rem <?php echo sanitize_hex_color( $underline_color ); ?> solid !important;
	  }
	  <?php
	}

	$css = ob_get_clean();
    return $css;
}

function theme_enqueue_styles() {
	wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
	$custom_css = theme_get_customizer_css();
	wp_add_inline_style( 'theme-styles', $custom_css );
  }
  
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

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
