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
			<div class="movie-poster-responsive" style="background-image: url('<?php the_field('movie-poster'); ?>')">
			</div>
		</div>
		<div class="movie-player">
			<div class="video-responsive">
				<iframe src="<?php the_field('movie-trailer'); ?>" allowfullscreen></iframe>
			</div>
		</div>
		<div class="movie-info">
			<?php
				//$post = get_the_ID();
				$postmeta = array(
					'Год' => 'movie-year',
					'Страна' => 'movie-country',
					'Время' => 'movie-time',
					'Эпизодов' => 'movie-episodes'
				);
			?>
			<table>
				<?php foreach ($postmeta as $item => $value){ ?>
					<tr>
						<td><?php $field_label = get_field_object($value); echo $field_label['label'] . ":"; ?></td>
						<td><?php $field_value = get_field_object($value); echo $field_value['value']; ?></td>
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
