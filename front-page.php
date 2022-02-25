<?php get_header(); ?>

<div id="primary-front" class="content-area extended">

<main id="main" class="site-main" role="main">

<div class='slider'>

	<div class='hero-slider-text-container'>
	  <h1> <?php echo do_shortcode( '[hero-heading]' );?>  <span class="underline">Baseline<span></h1>
	  <p>lorem ipsum</p>
	  <div class= 'hero-button-container'> 
	  <button alt="contact us" title="contact us" onclick="window.location.href='/contact-us'" class="first-button">button one</button> <button alt="about us" title="about us" onclick="window.location.href='/about-us'" class="second-button">button two</button>
</div>

<?php dynamic_sidebar( 'search-header-sidebar' ); ?>
	</div>

	<!-- Hero Image -->
		  <div class='hero-slider-image-container'>
			  <img src="https://flatterinc.millmountaindigital.com/wp-content/uploads/2022/02/hero.png" alt="hero image" title="hero image">
</div>
  </div>
<div id="section-one">
<div class="image-slider">
	<div class="image"><img src="https://flatterinc.millmountaindigital.com/wp-content/uploads/2022/02/MicrosoftTeams-image-2.png" title="" alt=""></div>	
</div>

</div>
<div id="section-two">
<div class="section-header">
	<h2>
	</h2>
</div>
<!-- Event Slider -->
<!-- <div class="heading-section-two">
	<h2>Meet The Team</h2>
	<h3> Tag line</h3>
</div> -->
	
	<!-- <div class="event-slider">

	


		
		<div id='slider'>

		
		<div class="tab-container">

		<div class="tabs tab-one">
				<div class="tab-content">
					<div><img src="#" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
</div>
		
			<div class="tabs">
				<div class="tab-content">
					<div><img src="#" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
</div>
<div class="tabs">
				<div class="tab-content">
					<div><img src="#" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
</div>
<div class="tabs">
				<div class="tab-content">
					<div><img src="#" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
</div>
<div class="tabs">
				<div class="tab-content">
					<div><img src="#" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
</div>
<div class="tabs">
				<div class="tab-content">
					<div><img src="#" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
</div>	
			<div class="tabs">
			<div class="tab-content">
					<div><img src="#" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
	
	</div>

		</div>
	
</div> -->


<!-- </div>
</div>
</div> -->
<!-- end event slider -->
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

			<?php get_template_part( 'template-parts/content', 'front' ); ?>

	<?php endwhile; else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

</main>

</div>


<?php get_footer(); ?>
