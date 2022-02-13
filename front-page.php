<?php get_header(); ?>

<div id="primary-front" class="content-area extended">

<main id="main" class="site-main" role="main">

<div class='slider'>

	<div class='hero-slider-text-container'>
	  <h1>Excellence is our <span class="red-underline">Baseline<span></h1>
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
	<h2></h2>
	<h3></h3>
	<p></p>
	<div class="event-slider">
		<div class="cards">
			
		</div>

	<button></button>
	</div>
	
</div>
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
