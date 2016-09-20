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
				<?php
				$tags = get_the_tags();
				foreach ($tags as $tag){ ?>
					<span class="movie-style"><?php //echo $tag->name . ' '; ?></span>
				<?php }; ?>
				<span class="movie-style"><?php //the_category(', ',  'single'); ?></span>
				<?php
				//$cat = get_categories('child_of=3');
				//var_dump($cat);
				?>
			</div>
		</div>
	</div>
<?php endwhile; else: ?>

<?php endif; ?>