<!-- Custom Query for two main stories -->
		<!-- Consider using tags to choose the main stories in future -->
		<?php $args = array( 
			'posts_per_page' => 2,
			'offset' => get_query_var('offset_value') 
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

				
			<?php 

			$categories = get_the_category();
			if($categories[0]->name == 'Sport') {
				$sport_count += 1;
				// echo $sport_count;
			}

			endwhile; 
			endif;



			wp_reset_postdata();
			 ?>


		</div> <!-- two-main-stories -->