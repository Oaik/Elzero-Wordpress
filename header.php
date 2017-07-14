<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="<?php bloginfo("charset"); ?>">
		<title><?php wp_title("|", "true", "right"); ?> <?php bloginfo("name"); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Try to make it dynamic -->
		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="blue-grey darken-4">
			<div class="nav-wrapper container">
  			<a href="<?php bloginfo( url ); ?>" class="brand-logo"><?php bloginfo("name"); ?></a>
			 	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<?php 
					elzero_modify_nav_menu_desktop();
					elzero_modify_nav_menu_mobile();
				?>
			</div>
		</nav>