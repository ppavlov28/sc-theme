<?php
/**
 * Шаблон для вывода всех страниц.
 */
?>
<?php get_header(); ?>

	<section class="main  container">

	<!-- Вывод содержимого страницы -->

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!-- PageTitle -->
		<div class="page-title">
			<div class="wrap">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
		<!-- end of PageTitle -->
		<!-- Articles -->
		<article class="content">
			<div class="wrap">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>

	<!-- Закончили вывод содержимого страницы -->

	<!-- Выводим случайные программы -->

	<div class="container">
		<div class="page-title">
			<div class="wrap">
				<h2>Наши программы</h2>
			</div>
		</div>
		<section class="catalog">

		<?php $posts = get_posts('orderby=rand&numberposts=5'); ?>
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
	</div>

	<!-- Закончим вывод случайных программ -->

	</section>
	<!-- end of Articles -->

	<?php get_footer(); ?>