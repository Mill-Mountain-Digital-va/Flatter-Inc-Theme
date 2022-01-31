<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	
		<?php wp_head(); ?>

	
	</head>
	<body <?php body_class(); ?>>
	<a tabindex="1" href=   "#content"  class=  "skip-link  screen-reader-text" title=""><?php esc_html_e( 'Skip to content', 'millmountain' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
			
	<div class="site-branding">
	
		  <?php

			the_custom_logo();
			?>
			
			<a  href="/" tabindex="-1">
			<img class="custom-logo" alt="two roads logo" title="two roads logo" height="115" width='300' src="https://tworoadsleadership.com/wp-content/uploads/2021/05/TwoRoadsDark_Division-1024x273.png">
</a>
		
	
		 
	
	</div>
<div class="desktop-mobile open">

	
	<nav id="site-navigation" class="desktop-nav main-navigation" role="navigation">
	  <?php
		$args = array(
			'theme_location' => 'main-menu',
		);
		wp_nav_menu( $args );
		?>
	</nav>
  </div>

		
		
  <div class="mobile-menu-icon close" tabindex="0">
			<div class="hamburger-menu">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
		</div>

  </header>




	  
		<div id="content"   class="site-content">


