<? $categoriesParams = [
		'hide_empty' => 1,
		'parent' => 1,
		'meta_key' => 'cat-sort',
		'orderby' => 'meta_value_num',
		'order' => 'ASC',
		];
		$categories = get_categories($categoriesParams);
		$currentCat = get_queried_object();
	?>





<footer class="footer">
	<div class="footer__container container">
		<div class="footer__grid">
			<div class="footer__column">
				<div class="footer__tels tels-footer">

					<? if( have_rows('footer-contacts', 'options') ):
					while ( have_rows('footer-contacts', 'options') ) : the_row(); ?>
					<div class="tels-footer__item">
						<a href="tel:<? echo preg_replace('/[^\d+]/', '', get_sub_field('footer-contacts-tel'));?>"
							class="tels-footer__num"><?= get_sub_field('footer-contacts-tel'); ?></a>
						<p class="tels-footer__position"><?= get_sub_field('footer-contacts-title'); ?></p>
					</div>
					<? endwhile;
					endif; ?>

				</div>
			</div>
			<div class="footer__column">
				<h3 class="footer__title">Каталог</h3>
				<div class="footer__links">

					<ul>
						<?  foreach ($categories as $category) :?>
						<li
							<?php if($currentCat-> term_id == $category->term_id || cat_is_ancestor_of( $category->term_id, $currentCat->term_id ) ){ ?>
							class="current-menu-item" <?php }?>>
							<a href="<?= get_term_link($category->term_id); ?>">
								<?= $category->name; ?>
							</a>
						</li>
						<? endforeach; ?>

					</ul>

				</div>
			</div>
			<div class="footer__column">
				<h3 class="footer__title">Компания</h3>
				<nav class="footer__links">
					<?php wp_nav_menu([
							'theme_location'  => 'menu',
							'container'       => 'false',
						]); ?>
				</nav>
			</div>
			<div class="footer__column">
				<div class="footer__info">
					<ul class="footer__social social">
						<? if( have_rows('options-socials', 'options') ):
					while ( have_rows('options-socials', 'options') ) : the_row(); ?>
						<li>
							<a href="<?= get_sub_field('header-socials-link'); ?>" target="_blank">
								<span class="social__decor">
									<svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="27" cy="27" r="26.5" stroke="white" />
									</svg>
								</span>
								<span class="social__icon">
									<img src="<?= wp_get_attachment_image_url(get_sub_field('footer-socials-img'), 'thumb') ?>" alt=""
										class="svg-wp">
								</span>
							</a>
						</li>
						<? endwhile;
					endif; ?>
					</ul>
					<div class="footer__devs">
						<p><span data-src="#modal-polit">Политика конфидециальности</span></p>
						<p>© 2021 ООО «Агроснаб вологодский». Все права защищены</p>
						<p>Сделано в <a href="https://udnet.ru/" target="_blank" class="udnet">Удобный интернет</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>
</body>

</html>