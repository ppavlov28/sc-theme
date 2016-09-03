<?php get_header(); ?>

<section class="main  container clearfix page-catalog">
	<!-- PageTitle -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page-title">
			<div class="wrap">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<!-- end of PageTitle -->

		<!-- Movie page -->
	<section class="movie  clearfix">
		<div class="movie-poster">
			<div class="movie-poster-responsive">
				<img src="<?php the_field('movie-poster'); ?>" alt="poster_willis">
			</div>
		</div>
		<div class="movie-player">
			<div class="video-responsive">
				<iframe src="<?php the_field('movie-trailer'); ?>" allowfullscreen></iframe>
			</div>
		</div>
		<div class="movie-info">
			<?php
				$postmeta = array(
					'Год' => get_field('movie-year'),
					'Страна' => get_field('movie-country'),
					'Время' => get_field('movie-time'),
					'Эпизодов' => get_field('movie-episode')
				);
			?>
			<table>
				<?php foreach ($postmeta as $item => $value){ ?>
					<tr>
						<td><?php echo $item; ?></td>
						<td><?php echo $value; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
		<div class="movie-synopsis">
			<p>
				<?php the_content(); ?>
			</p>
		</div>
	</section>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<!-- end of Articles -->

	<?php get_footer(); ?>
