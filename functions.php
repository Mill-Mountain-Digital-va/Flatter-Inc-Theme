<?php

require_once( 'lib/helpers.php' );
require_once( 'lib/enqueue-styles.php' );
require_once( 'lib/sidebars.php' );
require_once( 'lib/customize.php' );
// require_once('template-parts/footer/info.php');
require_once( 'template-parts/header/font.php' );
require_once( 'template-parts/header/nav.php' );
// require_once('template-parts/content/front-page.php');

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
add_theme_support( 'wp-mail' );


function millmountain2022_enqueue_styles() {

	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', array( '' ), time(), 'all' );

}
  add_action( 'wp_enqueue_scripts', 'millmountain2022_enqueue_styles' );

  // Load in our JS
function millmountain2022_enqueue_scripts() {

	wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', array(), time(), true );

}
  add_action( 'wp_enqueue_scripts', 'millmountain2022_enqueue_scripts' );

  //Contact Form



function process_contact_form() {

	$name     = $_POST['name'];
	$message  = $_POST['message'];
	$business = $_POST['business'];
	$jobType  = $_POST['jobtype'];
	$theEmail = $_POST['theemail'];
	$phone    = $_POST['phone'];
	$to       = array( 'mike@millmountaindigital.com' );
	$subject  = '' . $business;
	$mybody   = '';
	$mybody  .= '<table>';
	$mybody  .= '';
	$mybody  .= '<p>Flatter Inc Test</p>';
	$mybody  .= '<tr><td><b>Name:</b></td><td>' . $name . '</td></tr>';
	$mybody  .= '<tr><td><b>Job:</b></td><td>' . $jobType . '</td></tr>';
	$mybody  .= '<tr><td><b>Company Email:</b></td><td>' . $theEmail . '</td></tr>';
	$mybody  .= '<tr><td><b>Phone:</b></td><td>' . $phone . '</td></tr>';
	$mybody  .= '<tr><td><b>Business:</b></td><td>' . $business . '</td></tr>';
	$mybody  .= '<tr><td><b>Message:</b></td><td>' . $message . '</td></tr>';

	$mybody .= '<p>Thank you,</p>';
	$mybody .= '<p></p>';
	$mybody .= '</table>';
	$body    = $mybody;
	$headers = array( 'Content-Type: text/html; charset=UTF-8' );

	$sendStatus = wp_mail( $to, $subject, $body, $headers );

	if ( $sendStatus ) {
		wp_redirect( '/about-us/', 301 );
		exit;
	}

}
	  add_action( 'wp_ajax_process_contact_form', 'process_contact_form' );
	  add_action( 'wp_ajax_nopriv_process_contact_form', 'process_contact_form' );





	  add_action( 'wp_ajax_nopriv_custom_register', 'custom_register' );
  add_action( 'wp_ajax_custom_register', 'custom_register' );

  // Register Menu Locations
register_nav_menus(
	array(
		'main-menu' => esc_html__( 'Main Menu', 'millmountain' ),
	)
);

// Setup Widget Areas
function millmountain2022_widgets_init() {

		register_sidebar(
			array(
				'name'          => esc_html__( 'Blog Heading Keyword', 'millmountain' ),
				'id'            => 'blog-keyword',
				'description'   => esc_html__( 'Add widgets for Blog Heading Keyword here', 'millmountain' ),
				'before_widget' => '<section class="blog-widget">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
}
		add_action( 'widgets_init', 'millmountain2022_widgets_init' );
/*--------------------------------------------------------------
# Footer JS Hooks
--------------------------------------------------------------*/


function wpb_hook_javascript_footer() {
	?>
		 <script></script>
	<?php
}
add_action( 'wp_footer', 'wpb_hook_javascript_footer' );


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
		'millmountain2022_shortcode_one',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

}
// End theme customizer


add_action( 'customize_register', 'millmountain2022_customize_register' );



?>
