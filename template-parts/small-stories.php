<!-- Custom Query for two main stories -->
		<!-- Consider using tags to choose the main stories in future -->
		<?php $args = array( 
			'posts_per_page' => 2,
			'offset' => 2 
		) ?>

		<?php $main_stories = new WP_Query($args);

		if ($main_stories->have_posts() ) : ?>
		<div class="small-stories">
			<?php while ($main_stories->have_posts() ) : $main_stories->the_post(); ?>
				<div class="small-story">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-story-thumb' ); ?></a>
					<div class="small-story-text">
						<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>



				
			<?php endwhile; 
			endif;

			wp_reset_postdata();
			 ?>


		</div> <!-- two-main-stories -->