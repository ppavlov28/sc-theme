<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>SC-Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php //body_class(); ?>>
<div class="wrapper">
	<div class="content-full">
	<!-- Main Header -->
	<header class="header-main  header-main--index  container">
		<div class="wrap clearfix">
			<div class="header-main__logo">
				<a href="/">
					<img src="<?php echo get_template_directory_uri() . '/img/salmon_logo_new.png' ?>" alt="Logo"
					     width="64" height="60">
				</a>
			</div>
			<h1 class="header-main__title">Salmon Content</h1>
			<button class="main-menu-toggler  no-js"  id="mainMenuToggler">
				<span>menu toggler</span>
			</button>
			<!-- Languages -->
			<ul class="lang-list">
				<li class="active"><a href="">Ru</a></li>
				<li><a href="">En</a></li>
			</ul>
			<!-- end of Languages -->
			<!-- Main Navigation -->
			<nav class="main-nav">
				<?php
				$walker = new sc_fp2_menu_walker();
				if (has_nav_menu('top')) {
					wp_nav_menu(
						array(
							'theme_location' => 'top',
							'container'      => 'ul',
							'menu_class'     => 'menu-top-menu',
							'walker'         => $walker
						)
					);
				}
				?>
			</nav>
			<!-- end of Main Navigation -->
		</div>
	</header>
	<!-- end of Main Header -->
	<!-- Slider -->
	<?php if (is_front_page()) { ?>
		<section class="slider  container" >
			<?php echo do_shortcode("[metaslider id=333]");	?>
		</section >
	<?php } ?>
<!-- end of Slider -->
