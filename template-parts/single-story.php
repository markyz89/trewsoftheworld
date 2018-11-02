<?php $args = array( 
	'posts_per_page' => 1,
	'offset' => get_query_var('offset_value')  
	) 
	?>

		<?php $main_story = new WP_Query($args);

		if ($main_story->have_posts() ) : ?>
			<?php while ($main_story->have_posts() ) : $main_story->the_post(); ?>
				<div class="main-story">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'big-story-thumb' ); ?></a>
					<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
					<p><?php the_excerpt(); ?></p>
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

