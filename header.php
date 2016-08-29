<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>SC-Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>
<!-- Main Header -->
<header class="header-main  container">
	<div class="wrap clearfix">
		<div class="header-logo">
			<a href="/">
				<img src="<?php echo get_template_directory_uri() ?> . /img/salmon_content_logo_160x75.png"
				     alt="Logo" width="160" height="75">
			</a>
		</div>
		<div class="header-title">SC-Template</div>
	</div>
</header>
<!-- end of Main Header -->
<!-- Slider -->
<?php if (is_front_page()) { ?>
	<section class="slider  container" >
		<div class="slider-content" style="background-image: url(<?php echo get_template_directory_uri()
		?>/img/slider_placeholder.jpg)">
		</div >
	</section >
<?php } ?>
<!-- end of Slider -->
<!-- Main Navigation -->

<nav class="container">
	<?php
	if (has_nav_menu('top')) {
		wp_nav_menu(
			array(
				'theme_location' => 'top',
				'container'      => 'ul',
				'menu_class'     => 'main-nav'
			)
		);
	}
	?>
<!--
		<ul>
			<li class="active">
				<a href="">Home</a>
			</li>
			<li>
				<a href="">About Us</a>
			</li>
			<li class="drop-menu">
				<a href="">Catalog</a>
				<ul class="submenu">
					<li><a href="">Item 1 vbgf</a></li>
					<li><a href="">Item 2</a></li>
					<li><a href="">Item 3</a></li>
					<li><a href="">Item 4</a></li>
				</ul>
			</li>
			<li>
				<a href="">Contacts</a>
			</li>
		</ul>
-->
</nav>


<!-- end of Main Navigation -->