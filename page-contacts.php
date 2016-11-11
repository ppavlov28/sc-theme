<?php get_header(); ?>

<section class="main  main--white  clearfix page-catalog">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<!-- PageTitle -->
			<div class="content-title">
				<div class="wrap">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
			<!-- end of PageTitle -->

			<!-- Articles -->
			<div class="welcome">
				<div class="wrap">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="clearfix">
				<div class="sale-depart">
					<div class="wrap">
						<p>Отдел продаж:</p>
						<p class="sale-depart__item">
							<a href="tel:<? the_field('tel'); ?>"><?php the_field('tel') ?></a>
						</p>
						<p class="sale-depart__item">
							<a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
						</p>
					</div>
				</div>
				<?php //echo do_shortcode('[contact-form-7 id="343" title="Contact form"]'); ?>
			</div>

	<?php endwhile; ?>


	<!-- PageTitle
	<div class="content-title">
		<div class="wrap">
			<h1>Наши контакты</h1>
		</div>
	</div>
	end of PageTitle -->
	<!-- Welcome
	<div class="welcome">
		<div class="wrap">
			Будем рады помочь по любым вопросам. Звоните нам, пишите на электронную почту
			или воспользуйтесь формой обратной связи.
		</div>
	</div>
	end of Welcome -->
	<!--
	<div class="clearfix">
		<div class="sale-depart">
			<div class="wrap">
				<p>Отдел продаж:</p>
				<p class="sale-depart__item">
					<a href="tel:+380995553322">+380 99 555 33 22</a>
				</p>
				<p class="sale-depart__item">
					<a href="mailto:sales@salmoncontent.com">sales@salmoncontent.com</a>
				</p>
			</div>
		</div>
		-->
		<?php //echo do_shortcode('[contact-form-7 id="343" title="Contact form"]'); ?>
		<!--
		<form action="" class="feedback-form" method="post" name="feedback-form">
			<div class="wrap">
				<p>Обратная связь</p>
				<div class="feedback-form__item">
					<input type="text" name="name" placeholder="Введите имя" required autofocus>
				</div>
				<div class="feedback-form__item">
					<input type="email" name="email" placeholder="Введите email" required>
				</div>
				<div class="feedback-form__item">
					<textarea name="message" placeholder="Ваше сообщение" required cols="30" rows="10"></textarea>
				</div>
				<input type="submit" value="Отправить">
			</div>
		</form>

	</div>

	-->
</section>

<?php get_footer(); ?>
