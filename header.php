<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trews of the World</title>
	<?php wp_head(); ?>
</head>
<body>

<header>
	<div class="header-container">
		<div class="search-div">
			<form class="top-right-search">
				<input type="search" name="site-search">
				<input type="submit" name="Search" value="Search">
			</form>
		</div>
		
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/header.gif">
		</div>

		<nav id="main-nav">
			<?php wp_nav_menu(array(
				'theme_location' => 'main_menu'
			)) ?>
		</nav>

		<hr class="menu-underline">
		
	</div> <!-- header-container -->
	
	

	

</header>
