

<?php wp_footer(); ?>
<footer>
	<div class="container">
		<div class="row">
			<?php wp_nav_menu(array(
					'theme_location' => 'footer_menu',
					'menu_id' => 'secondary_menu',
					'menu_class' => 'nav navbar-nav',
					// 'walker' => new walkernav()
				)) ?>
		</div>
		
		<div class="row">
			
			<div class="col-sm-3">
				<div class="footer-posts">
					<?php
						$args = array( 
							'posts_per_page' => 2,
						) ?>

						<?php $footer_stories = new WP_Query($args);

						if ($footer_stories->have_posts() ) : ?>
						<div class="two-main-stories">
							<?php while ($footer_stories->have_posts() ) : $footer_stories->the_post(); ?>
								<div class="small-story">
									<a href="<?php the_permalink() ?>">
										<?php the_post_thumbnail( 'footer_images' ); ?>
										<div class="small-story-text">
											<h3><?php the_title(); ?></h3>
										</div>
									</a>
								</div>
							<?php endwhile; 
							endif;

							wp_reset_postdata(); ?>
						</div>			
				</div>
				
			</div>

			<div class="col-sm-3">
				<h4>Original Design by News Corp</h4>
			</div>

			<div class="col-sm-3">
				<h4>This 'design' by <a href="http://markzsimpson.com">Mark Simpson</a></h4>
			</div>

			<div class="col-sm-3">
				<h4>Copyright hopefully not violated since the News of the World died ages ago.</h4>
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
	
	




	
</footer>


</body>
</html>