<!-- Custom Query for category stories on main page -->
		<!-- Consider using tags to choose the main stories in future -->
		<?php 
		

		$args = array( 
			'offset' => $offset_value,
			'posts_per_page' => 4,
			'category_name' => $chosen_category 
		) ?>

		<?php $cat_stories = new WP_Query($args);

		if ($cat_stories->have_posts() ) : ?>
		<div class="two-main-stories">
			
			<?php while ($cat_stories->have_posts() ) : $cat_stories->the_post(); ?>
				<div class="main-story">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'big-story-thumb' ); ?></a>
					<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
					<p><?php the_excerpt(); ?></p>
				</div>



				
			<?php endwhile; 
			endif;

			wp_reset_postdata();
			 ?>


		</div> <!-- two-main-stories -->