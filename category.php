<?php get_header() ?>



<div class="container">
	<div class="category-wrapper">
		<div class="left-main">
			<?php
				// set_query_var('category_name', $category_in->slug);
			// seems like wordpress already knows which value to give this
				set_query_var('offset_value', 0);
				get_template_part('template-parts/main-category','story'); 
			?>
		</div>

		<div class="right-4-stories">
			<?php set_query_var('offset_value', 1);
			get_template_part('template-parts/4-stories-side', 'category');
			?>
		</div>
		




	</div>



</div>




<?php get_footer() ?>