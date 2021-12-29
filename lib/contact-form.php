<?php
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


