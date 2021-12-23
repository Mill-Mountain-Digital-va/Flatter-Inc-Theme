<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php get_template_part( 'template-parts/header/font' ); ?>
		<title>Blank WordPress Theme | Flatter Inc</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<a  href=   "#content"  class=  "skip-link  screen-reader-text" title=""><?php esc_html_e( 'Skip to content', 'millmountain' ); ?></a>
		<header>
		<?php

		$header_text_one = get_theme_mod( 'millmountain_header_text_one', '' );
		$header_text_two = get_theme_mod( 'millmountain_header_text_two', '' );

		?>


			<div class="upper-bar">
				<div><?php get_template_part( 'template-parts/header/nav' ); ?></div>
				<div></div>
				<div></div>
				<div></div>

				

			<div>
		</header>


	  
		<div id="content"   class="site-content">

	

<section id="slider" class="">


<div class="slider-bg-img pos-abs"><?php echo $background; ?></div>

   <div class= "slider-text-container" >

	<div class="button-one-container pos-rel"><button> <?php echo esc_html( $header_text_one ); ?></button></div>

	<div class="button-two-container pos-rel"><button><?php echo esc_html( $header_text_two ); ?></button></div>

<div>
</section>
<section id="under-header">

	<div>
		
	</div>


</section>
