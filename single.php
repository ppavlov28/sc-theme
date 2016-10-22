<?php get_header(); ?>-

<section class="main  container clearfix page-catalog">
	<!-- PageTitle -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="content-title">
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
				<?php
					$pattern = "/^(https?:\/\/)?([\w-_.]+)/";
					$video_src = get_field('movie-trailer');
					$site_url = get_site_url();
					preg_match($pattern, $video_src, $matches);
					if (strcasecmp($site_url, $matches[0]) == 0){ ?>
						<video controls width="690" height="388">
							<source src="<?php the_field('movie-trailer'); ?>">
						</video> <?php
					}  else { ?>
						<iframe src="<?php the_field('movie-trailer'); ?>" allowfullscreen></iframe> <?php
					}
				?>
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
			<?php the_content(); ?>
		</div>
	</section>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<!-- end of Articles -->

	<?php get_footer(); ?>
