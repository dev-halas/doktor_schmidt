<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />

		<!-- Stylesheets-->
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	</head>
	

	<body <?php body_class()?>>
		<?php 
			$logo = get_field('header_logo', 'options');
		?>
		<div class="preload animate">
			<div class="preloadTop preloadFadeInTop">
				<img src="<?php echo THEME_URL; ?>_dev/img/slide1-layer1.png" alt="">
			</div>
			<div class="preloadBottom preloadFadeInBottom">
				<img src="<?php echo THEME_URL; ?>_dev/img/slide1-layer2.png" alt="">
			</div>
		</div>

		<header class="header">
			<nav class="headerInner">
				<a href="<?php echo esc_url(home_url('/')) ?>" class="headerLogo">
					<img src="<?php echo esc_url($logo['url']); ?>" alt="" class="headerLogo--img">
				</a>
				<div class="headerLinks">

					<?php wp_nav_menu(array(
							'theme_location' => 'main_nav'
						));
					?>  

				</div>
				<button class="hamburger">
					<span class="hamburger__box">
						<span class="hamburger__inner"></span>
					</span>
				</button>
			</nav>
		</header>
		