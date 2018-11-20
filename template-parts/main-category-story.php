<!-- Custom Query for main story on a category page -->
		<!-- Consider using tags to choose the main stories in future -->


		<?php $args = array( 
			'posts_per_page' => 1,
			'category_name' => get_query_var('category_name'),
			'offset' => get_query_var('offset_value')
			 ) ?>
		

		<?php $main_category_story = new WP_Query($args);

		if ($main_category_story->have_posts() ) : ?>
		<div class="main_category_story">
			<?php while ($main_category_story->have_posts() ) : $main_category_story->the_post(); ?>
				
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'category-main' ); ?></a>
					<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
					<p><?php the_excerpt(); ?></p>

				



				
			 <?php 

			 // won't need this when can just use offsets, right?
			// $categories = get_the_category();
			// if($categories[0]->name == 'Sport') {
				// $sport_count += 1;
				// echo $sport_count;
			//}

			// print_r(get_the_category());


			endwhile; 
			endif;
			


			wp_reset_postdata();
			 ?>


		</div> <!-- two-main-stories -->