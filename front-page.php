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
	</div>
		  <div class='hero-slider-image-container'>
			  <img src="#" alt="hero image" title="hero image">
</div>
  </div>
<div id="section-one">
	<h2>This is a <a href="/" class="link">test</a></h2>
	<div class="event-slider">
		<img src="#" alt=""> <img src="#" alt=""> <img src="#" alt=""> <img src="#" alt="">

	</div>
</div>
<div id="section-two">
	
	<div class="event-slider">

	

		<button class='leftArrow'>&lt;</button>
		<div id='slider'>
		<div class="tabs">
				<div class="content">
					<div><img src="Koala.jpg" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
</div>
		
			<div class="tabs">
				<div class="content">
					<div><img src="Koala.jpg" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
</div>
		
			<div class="tabs">
			<div class="content">
					<div><img src="Koala.jpg" alt="Koala"></div>
					<h3>important person</h3>
					<h4>does important thing</h4>
					<p>about the super important stuff</p>
</div>
	
	</div>
	
</div>
<button class='rightArrow'>&gt;</button>

</div>
</div>
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
