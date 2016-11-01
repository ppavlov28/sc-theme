<?php get_header(); ?>

<section class="main  container">

	<!-- Articles Вывод содержимого страницы -->

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<section class="content">
		<!-- PageTitle -->
			<div class="content-title  content-title--top0">
				<div class="wrap">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		<!-- end of PageTitle -->

		<!-- Articles -->
			<div class="wrap">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; ?>

	<!-- Закончили вывод содержимого страницы -->

	<!-- Выводим случайные программы -->

		<div class="content-title">
			<div class="wrap">
				<h2>Наши программы</h2>
			</div>
		</div>

	<div class="container">
		<section class="catalog">

			<?php $posts = get_posts('orderby=rand&numberposts=4'); ?>
			<?php foreach($posts as $post) { ?>
				<div class="catalog-item">
					<div class="catalog-img">
						<a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_field('movie-poster'); ?>)"></a>
					</div>
					<div class="catalog-content">
						<div class="catalog-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
						<div class="catalog-info">
							<span class="year"><?php the_field('movie-year'); ?>, </span>
							<span class="country"><?php the_field('movie-country'); ?></span><br>
							<span class="movie-style"><?php sc_the_category(); ?></span>
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