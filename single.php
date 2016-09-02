<?php get_header(); ?>

<section class="main  container">
	<!-- PageTitle -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page-title">
			<div class="wrap">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<!-- end of PageTitle -->
		<!-- Articles -->
		<article class="content">
			<div class="row clearfix">
				<div class="movie-info-poster">
					<img src="<?php the_field('movie-poster'); ?>" alt="Title 1" width="276" height="390">
				</div>
				<div class="movie-player">
					<div class="video-responsive">
						<iframe src="<?php the_field('movie-trailer'); ?>"></iframe>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="movie-info-block">
					<?php
					$postmeta = array(
						'Год' => get_field('movie-year'),
						'Страна' => get_field('movie-country'),
						'Время' => get_field('movie-time'),
						'Эпизодов' => get_field('movie-episode')
					);
					?>
					<?php foreach ($postmeta as $item => $value){ ?>
						<div class="info-block">
							<div class="info-title">
								<?php echo $item; ?>
							</div>
							<div class="info-content">
								<?php echo $value; ?>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="movie-synopsis">
					<div class="synopsis">
						Сюжет
					</div>
					<div class="synopsis-content">
						<p>
							<?php the_content(); ?>
						</p>
					</div>
				</div>
			</div>
		</article>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<!-- end of Articles -->

	<?php get_footer(); ?>
