<?php get_header(); ?>




<div class="container">

	<div class="news-wrapper">
		<?php get_template_part('template-parts/main','stories'); ?>

		<?php get_template_part('template-parts/wide','advert'); ?>

		<?php get_template_part('template-parts/small','stories'); ?>

		<?php get_template_part('template-parts/tall','tale'); ?>






	</div> <!-- news-wrapper -->



	<div class="front-page-sidebar">
		<h2>Sidebar</h2>
	</div> <!-- front-page-sidebar -->

</div> <!-- container -->








<!-- Create sidebar widget -->

<?php get_footer(); ?>