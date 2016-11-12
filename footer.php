</div>
<!-- Footer -->
	<footer class="main-footer  container">
		<div class="wrap">

			<?php
				if (has_nav_menu('bottom')) {
					wp_nav_menu(
						array(
							'theme_location' => 'bottom',
							'container'      => 'ul',
							'menu_class'     => 'main-footer__menu'
						)
					);
				}
			?>

			<div class="sale-depart  sale-depart--footer">
				<div class="wrap">
					<p>Отдел продаж:</p>
					<p class="sale-depart__item">
						<a href="tel:+380995553322">+380 99 555 33 22</a>
					</p>
					<p class="sale-depart__item">
						<a href="mailto:sales@salmoncontent.com">sales@salmoncontent.com</a>
					</p>
					<p class="main-footer__info">&copy; 2016 Salmoncontent Все права защищены</p>
				</div>
			</div>
		</div>
	</footer>
<!-- end of Footer -->

</div>
	<?php wp_footer(); ?>
</body>

</html>