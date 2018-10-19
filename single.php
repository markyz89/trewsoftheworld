<?php get_header(); ?>


<?php 
if ( have_posts() ) :
	while ( have_posts() ) : ?>
		<?php the_post(); ?> 
		<div>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?> </h2></a>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'big-story-thumb' ); ?></a>
			
			<p><?php the_content(); ?></p>
		</div>
		
		<?php
		endwhile;
	
	 endif;
?>



<?php get_footer(); ?>