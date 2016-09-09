<?php get_header(); ?>

<section class="main  container">
	<h1>Catalog</h1>

	<?php $posts = get_posts(); ?>
	<?php foreach($posts as $post) { ?>
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
					<span class="movie-style"><?php the_category(', '); ?></span>
				</div>
			</div>
		</div>
	<?php } ?>

</section>

<?php get_footer(); ?>