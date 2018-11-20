<!-- Custom Query for four stories to the right on a category page -->
		<!-- Consider using tags to choose the main stories in future -->
		<?php $args = array( 
			'posts_per_page' => 4,
			'category_name' => get_query_var('category_name'),
			'offset' => get_query_var('offset_value')
			 ) ?>
		

		<?php $four_stories = new WP_Query($args);

		if ($four_stories->have_posts() ) : ?>
		<div class="four-stories-category">
			<?php while ($four_stories->have_posts() ) : $four_stories->the_post(); ?>
				
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'category-side' ); ?></a>
					<div class="textual">
						<a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
					</div>
					
				



				
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