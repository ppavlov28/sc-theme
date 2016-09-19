<?php get_header(); ?>

<section class="main  container  clearfix page-catalog">

	<div class="page-title">
		<div class="wrap">
			<h1><?php single_cat_title(); ?></h1>
		</div>
	</div>

	<aside class="sidebar">
		<nav class="sidebar-menu">
			<?php
			if (has_nav_menu('side')) {
				wp_nav_menu(
					array(
						'theme_location' => 'side',
						'container'      => 'ul',
						'menu_class'     => 'sidebar-menu'
					)
				);
			}
			?>
		</nav>
	</aside>

	<section class="catalog">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="catalog-item">
				<div class="catalog-img">
					<a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_field('movie-poster'); ?>)"></a>
				</div>
				<div class="catalog-content">
					<div class="catalog-title">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					<div class="catalog-info">
						<span class="year"><?php the_field('movie-year'); ?></span>
						<span class="country"><?php the_field('movie-country'); ?></span>
						<span class="movie-style"><?php the_tags('',', ',''); ?></span>
						<br>
					</div>
				</div>
			</div>
		<?php endwhile; else: ?>

		<?php endif; ?>

	</section>

	<?php
	add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
	function my_navigation_template( $template, $class ){
		return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
	}
	?>
	<?php the_posts_pagination(); ?>

</section>

<?php get_footer(); ?>
