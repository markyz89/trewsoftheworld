<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trews of the World</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body>

<header>
	<div class="header-container">
		<div class="search-div">
			<!-- <form class="top-right-search">
				<input type="search" name="site-search">
				<input type="submit" name="Search" value="Search">
			</form> -->
		</div>
		
		<div class="logo">
			<a href="<?php echo home_url() ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/header.gif">
			</a>
		</div>

		<div class="menu-area col-sm-12">
				<nav id="site-navigation" class="main-navigation mega-menu" role="navigation"> <!-- formerly id main-nav -->
				<?php wp_nav_menu(array(
					'theme_location' => 'main_menu',
					'menu_id' => 'primary_menu',
					'menu_class' => 'nav navbar-nav',
					'walker' => new walkernav()
				)) ?>
			</nav>

		</div>
		

		<hr class="menu-underline">
		
	</div> <!-- header-container -->
	
	

	

</header>
