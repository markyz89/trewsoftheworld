<?php get_header(); ?>




<div class="container">
	<?php
		$offset_value = 0;
		$sport_count = 0;
		$politics_count = 0;
		$science_count = 0;
		$showbiz_count = 0;
		$special_inv_count = 0;
		// counting posts with the category sport. Incremented in every custom post loop below which produces a sports story.
		// implement for other categories later.		
		 ?>

	<div class="news-wrapper">
		<?php include(locate_template('template-parts/main-stories.php'));
		 ?>

		<?php 
			set_query_var('ad_message', 'Advert that stretches width of news section');
			get_template_part('template-parts/wide','advert'); ?>

		
		<?php 
		set_query_var('offset_value', 2);
		include(locate_template('template-parts/small-stories.php')); ?>

		<div class="tall-story">
			<?php get_template_part('template-parts/tall','tale'); ?>

			<div class="two-main small-story-text">
			<?php
				 set_query_var('offset_value', 4);
				 include(locate_template('template-parts/single-story.php'));
				
				 set_query_var('offset_value', 5);
				 include(locate_template('template-parts/single-story.php'));
				 
			 ?>
			</div>

						
		</div>

		<?php 
		set_query_var('offset_value', 6);
		include(locate_template('template-parts/small-stories.php')); ?>

		<div class="sports-category each-category">
			<div class="sports-banner">
				<!--  alternative means of linking -->
				<!-- <a href="<?php // echo home_url() ?>/category/politics">Politics</a> -->
				<!-- <a href="<?php // echo get_site_url() ?>/category/showbiz">Showbiz</a> -->

				<a href="<?php echo get_category_link(6) ?>"><h2>The Latest Sports</h2></a>
			</div>
			<?php 
				$chosen_category = 'sport';
				$offset_value = $sport_count;
				include(locate_template('template-parts/four-stories-category.php'));
			?>


			<?php
			set_query_var('ad_message', 'Another bloody advert'); 
			get_template_part('template-parts/wide','advert'); ?>

		</div> <!-- sports-category -->



		<div class="politics-category each-category">
			<div class="politics-banner">
				

				<a href="<?php echo get_category_link(8) ?>"><h2>Completely Impartial Politics</h2></a>
			</div>
			<?php 

				$chosen_category = 'politics';
				$offset_value = $politics_count;
				// this is currently just zero because count hasn't been implemented like the sports one has. Do so when there is more posts.
				
				include(locate_template('template-parts/four-stories-category.php'));
			?>


			<?php
			set_query_var('ad_message', 'Another bloody advert'); 
			get_template_part('template-parts/wide','advert'); ?>

		</div> <!-- politics-category -->

		<div class="science-category each-category">
			<div class="science-banner">
				

				<a href="<?php echo get_category_link(8) ?>"><h2>Ground-breaking Science</h2></a>
			</div>
			<?php 

				$chosen_category = 'science';
				$offset_value = $science_count;
				// this is currently just zero because count hasn't been implemented like the sports one has.
				
				include(locate_template('template-parts/four-stories-category.php'));
			?>


			<?php
			set_query_var('ad_message', 'Another bloody advert'); 
			get_template_part('template-parts/wide','advert'); ?>

		</div> <!-- sports-category -->






	</div> <!-- news-wrapper -->



	<div class="front-page-sidebar">
		<?php get_sidebar() ?>
	</div> <!-- front-page-sidebar -->

</div> <!-- container -->


<!-- <?php // get_sidebar('second'); ?> -->







<!-- Create sidebar widget -->

<?php get_footer(); ?>