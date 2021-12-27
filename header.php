<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	
		
	
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<a  href=   "#content"  class=  "skip-link  screen-reader-text" title=""><?php esc_html_e( 'Skip to content', 'millmountain' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
			
	<div class="site-branding">
	
		  <?php
			the_custom_logo();
			?>
		
		
		
			<div class="mobile-menu-icon close">
			<div class="hamburger-menu">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
		</div>
		 
	
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

  </header>



	  
		<div id="content"   class="site-content">


