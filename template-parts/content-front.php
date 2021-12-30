
<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

 

<div class="entry-content">

  <?php the_content(); ?>

</div>

<?php if ( comments_open() ) : ?>

	<?php comments_template(); ?>

<?php endif; ?>




</article>
