<?php get_header(); ?>

<div class="story-container">
	<div class="story-wrapper">
		<div class="story">
					<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : ?>
					<?php the_post(); ?> 
					<div>
						<h2><?php the_title(); ?> </h2>
						<hr>
						<p><?php the_time('F j, Y'); ?></p>
						<?php the_post_thumbnail( 'big-story-thumb' ); ?>
						
						<p><?php the_content(); ?></p>
					</div>
					
					<?php
				endwhile;	
			 endif;
					?>
		</div> <!-- story -->
		
		<div class="story-sidebar">
			<?php get_sidebar() ?>
		</div>


	</div>

	


</div>





<?php get_footer(); ?>