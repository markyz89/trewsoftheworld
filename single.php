<?php get_header(); ?>


<?php 
if ( have_posts() ) :
	while ( have_posts() ) : ?>
		<?php the_post(); ?> 
		<div>
			<h2><?php the_title(); ?> </h2>
			<hr>
			<p><?php the_time(); ?></p>
			<?php the_post_thumbnail( 'big-story-thumb' ); ?>
			
			<p><?php the_content(); ?></p>
		</div>
		
		<?php
		endwhile;
	
	 endif;
?>



<?php get_footer(); ?>