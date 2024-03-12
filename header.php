<?php if(isset($_POST['contact'])) { $error = ale_send_contact($_POST['contact']); }?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php //get_template_part('partials/preloader'); ?>

	<header class="top">
		<div class="wrapper">
			<div class="logo">
				<a href="<?php echo esc_url(home_url("/")); ?>">
					<?php if(ale_get_option('sitelogo')){?>
					<img src="<?php echo esc_url(ale_get_option('sitelogo')); ?>" <?php if(!empty(ale_get_option('sitelogoretina'))){ ?>srcset="<?php echo esc_url(ale_get_option('sitelogoretina')); ?> 2x" <?php } ?> alt="logo" />
					<?php } else { ?>
					<h1><?php esc_attr(bloginfo('title')); ?></h1>
					<?php } ?>
				</a>
			</div>
			<?php if ( has_nav_menu( 'header_menu' ) ) { ?>
			<div class="navigation">
				<nav class="header_nav">
					<?php
				wp_nav_menu(array(
						'theme_location'=> 'header_menu',
						'menu'			=> 'Header Menu',
						'menu_class'	=> 'menu menu-header font_one',
						'walker'		=> new Aletheme_Nav_Walker(),
						'container'		=> '',
				)); ?>
				</nav>
			</div>
			<?php } ?>
			<div class="right_info">
				<a href="#" class="woo_cart">
					<div class="ale_cart_icon">
						<div class="mask"></div>
						<div class="icon"></div>
					</div>
				</a>
				<a href="#" class="search_opener">
					<div class="ale_search_icon">
						<div class="mask"></div>
						<div class="icon"></div>
					</div>
				</a>
			</div>
		</div>
	</header>
	<?php get_template_part( 'partials/header/alekids_search_modal' ); ?>
	<?php get_template_part( 'partials/header/alekids_heading' ); ?>