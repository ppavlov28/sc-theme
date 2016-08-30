<?php
/*
 * Template Name: Front Page
 */
?>

<?php get_header();?>

<section class="main  container">
	<!-- PageTitle -->
	<div class="page-title">
		<div class="wrap">
			<h1>Page Title</h1>
		</div>
	</div>
	<!-- end of PageTitle -->
	<!-- Articles -->
	<article class="content">
		<div class="wrap">

			<h2>Title</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae consectetur repellendus modi incidunt consequuntur porro voluptatibus culpa placeat nihil eos officia natus architecto rem repudiandae adipisci, laudantium perferendis id molestias?
			</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas dicta ipsum veniam amet placeat similique dolorem delectus ipsam alias soluta, earum officia quisquam, quod consectetur blanditiis temporibus iste eius recusandae.
			</p>
		</div>
	</article>
	<!-- end of Articles -->
	<!-- PageTitle -->
	<div class="page-title">
		<div class="wrap">
			<h2>New Arrivals</h2>
		</div>
	</div>
	<!-- end of PageTitle -->
	<!-- Catalog -->
	<div class="container">
		<section class="catalog">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="catalog-item">
						<div class="catalog-img">
							<a href="<?php the_permalink(); ?>">
								<?php
								//$image = get_field('poster_movie');
								$image_url = get_field('movie-poster')['url'];
								?>
								<img src="<?php echo $image_url; ?>" alt="Title 1" width="218" height="305">
							</a>
						</div>
						<div class="catalog-content">
							<div class="catalog-title">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
							</div>
							<div class="catalog-info">
								<span class="year"><?php echo get_field('movie-year'); ?>,</span>
								<span class="country"><?php echo get_field('movie-country'); ?></span>
								<span class="movie-style"><?php echo get_field('movie-genre'); ?></span>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</section>
	</div>
	<!-- end of Catalog -->
</section>
