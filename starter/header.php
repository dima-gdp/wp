<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon-precomposed" sizes="57x57"
		href="<?= THEME_URL ?>/assets/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114"
		href="<?= THEME_URL ?>/assets/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72"
		href="<?= THEME_URL ?>/assets/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144"
		href="<?= THEME_URL ?>/assets/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60"
		href="<?= THEME_URL ?>/assets/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120"
		href="<?= THEME_URL ?>/assets/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76"
		href="<?= THEME_URL ?>/assets/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152"
		href="<?= THEME_URL ?>/assets/favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?= THEME_URL ?>/assets/favicon/favicon-128.png" sizes="128x128" />

	<meta name="application-name" content="&nbsp;" />
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

	<title><?php
					global $page, $paged;
					wp_title('|', true, 'right');
					bloginfo('name');
					$site_description = get_bloginfo('description', 'display');
					if ($site_description && (is_home() || is_front_page())) echo " | $site_description";
					if ($paged >= 2 || $page >= 2) echo ' | ' . sprintf('Страница %s', max($paged, $page));
					?>
	</title>
	<?php wp_head(); ?>

</head>


<body>
	<div class="wrapper">

		<div id="modal-polit" class="modal-container-polit">
			<div class="modal-close-polit" data-fancybox-close></div>
			<div class="modal-block-polit">
				<div class="modal-content-polit">
					<div class="title-modal-polit">Политика конфидециальности</div>
					<div class="caption-modal-polit">
						<p class="subtitle-modal-polit">Настоящее Пользовательское соглашение является публичным документом
							администратора сайта
							<?php echo home_url(); ?> (далее – Администратор) и определяет порядок использования посетителями (далее -
							Посетитель) сайта <?php echo home_url(); ?>, принадлежащего Администратору, и обработки, хранения и иного
							использования информации, получаемой Администратором от Посетителя на сайте Администратора. Администратор
							сайта может изменить в любой момент данное Пользовательское соглашение без уведомления Посетителя сайта.
						</p>
						<ul>
							<li>Посетитель сайта, оставляя какую-либо информацию, относящуюся прямо или косвенно к определенному или
								определяемому физическому лицу (далее - Персональные данные), подтверждает, что ознакомился с данным
								Пользовательским соглашением и согласен с ним.</li>
							<li>В отношении всех сообщаемых Персональных данных Посетитель дает Администратору полное согласие на их
								обработку.</li>
							<li>Администратор сайта гарантирует Посетителю, что обработка и хранение поступивших Персональных данных
								Посетителя будет осуществляться в соответствии с положениями Федерального закона от 27.06.2006 № 152-ФЗ
								«О персональных данных».</li>
							<li>Посетитель сайта понимает и соглашается с тем, что предоставление Администратору какой-либо
								информации, не имеющей никакого отношения к целям сайта, запрещено. Такой информацией может являться
								информация, касающаяся состояния здоровья, интимной жизни, национальности, религии, политических,
								философских и иных убеждений Посетителя, а равно и информация, которая является коммерческой, банковской
								и иной тайной Посетителя сайта.</li>
							<li>Администратор гарантирует Посетителю, что использует Персональные данные, поступившие от Посетителя,
								исключительно в целях, ограниченных маркетинговыми, рекламными, информационными целями Администратора, а
								также для анализа и исследования Посетителей сайта, а также в целях предоставления ему товаров и услуг
								непосредственно находящихся, либо нет, на сайте Администратора.</li>
							<li>Посетитель в соответствии с ч. 1 ст. 18 Федерального закона «О рекламе» дает Администратору свое
								согласие на получение сообщений рекламного характера по указанным контактным данным.</li>
							<li>Посетитель самостоятельно несёт ответственность за нарушение законодательства при использовании сайта
								Администратора.</li>
							<li>Администратор не несет никакой ответственности в случае нарушения законодательства Посетителем, в том
								числе, не гарантирует, что содержимое сайта соответствует целям Посетителя сайта.</li>
							<li>Посетитель сайта несет самостоятельно ответственность в случае, если были нарушены права и законные
								интересы третьих лиц, при использовании сайта Администратора, Посетителем.</li>
							<li>Администратор вправе запретить использование сайта Посетителю, если на то есть законные основания.
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="modal-call" class="modal-call">
			<button class="modal-call__close close-modal" data-fancybox-close>
				<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.16495 0.870117L16.4081 15.1133L15.1133 16.4081L0.870117 2.16495L2.16495 0.870117Z" fill="black" />
					<path d="M0.870144 15.1133L15.1133 0.870118L16.4081 2.16495L2.16498 16.4081L0.870144 15.1133Z" fill="black" />
				</svg>
			</button>
			<div class="modal-call__container">
				<div class="modal-call__title">Заказать звонок</div>
				<?php echo do_shortcode('[contact-form-7 id="134" title="Консультация модалка"]'); ?>
				<div class="modal-call__privacy">Нажимая на кнопку «Отправить» вы соглашаетесь с <span
						data-src="#modal-polit">правилами
						обработки персональных данных</span></div>
			</div>
		</div>

		<div id="modal-product" class="modal-call">
			<button class="modal-call__close close-modal" data-fancybox-close>
				<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.16495 0.870117L16.4081 15.1133L15.1133 16.4081L0.870117 2.16495L2.16495 0.870117Z" fill="black" />
					<path d="M0.870144 15.1133L15.1133 0.870118L16.4081 2.16495L2.16498 16.4081L0.870144 15.1133Z" fill="black" />
				</svg>
			</button>
			<div class="modal-call__container">
				<div class="modal-call__title">Заказать звонок</div>
				<?php echo do_shortcode('[contact-form-7 id="240" title="Товар консультация"]'); ?>
				<div class="modal-call__privacy">Нажимая на кнопку «Отправить» вы соглашаетесь с <span
						data-src="#modal-polit">правилами
						обработки персональных данных</span></div>
			</div>
		</div>

		<div class="mob-menu">
			<div class="mob-menu__decor"></div>
			<nav class="mob-menu__nav">
				<?php wp_nav_menu([
							'theme_location'  => 'menu',
							'container'       => 'false',
						]); ?>
			</nav>
			<a href="tel:<? echo preg_replace('/[^\d+]/', '', get_field('header-tel', 'options'));?>" class="mob-menu__tel">
				<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M0.738366 0.855635C0.593866 1.01726 0.503172 1.22749 0.497421 1.45521C0.426899 4.25765 1.45243 6.86576 3.38542 8.79875C5.31819 10.7315 7.9263 11.7571 10.7285 11.6863C10.9563 11.6806 11.1665 11.5899 11.3281 11.4454C11.5167 11.2768 11.6391 11.0349 11.6457 10.7692L11.6988 8.68156C11.7108 8.19107 11.2863 7.7665 10.7958 7.77854C10.0975 7.79617 9.41566 7.70434 8.77216 7.50644C8.45277 7.40427 8.08793 7.4967 7.87373 7.71478L6.56007 8.7207C5.07433 7.95385 4.21829 7.09822 3.46265 5.6237L4.44184 4.34106C4.68643 4.09648 4.77993 3.74347 4.68444 3.41483C4.48549 2.76809 4.39364 2.08624 4.41083 1.38798C4.41728 1.1423 4.32612 0.912773 4.15456 0.741214C3.98322 0.569882 3.7537 0.478713 3.50824 0.48494L1.41482 0.537816C1.14899 0.544561 0.907029 0.666988 0.738366 0.855635Z"
						fill="#01873D" />
				</svg>
				<span><?= get_field('header-tel', 'options'); ?></span>
			</a>
			<ul class="mob-menu__social social">
				<? if( have_rows('options-socials', 'options') ):
					while ( have_rows('options-socials', 'options') ) : the_row(); ?>
				<li>
					<a href="<?= get_sub_field('header-socials-link', 'options'); ?>" target="_blank">
						<img src="<?= get_sub_field('header-socials-img', 'options'); ?>" class="svg-wp">
					</a>
				</li>
				<? endwhile;
					endif; ?>
			</ul>

		</div>

		<header class="header">
			<div class="header__container container">
				<a href="<?php echo home_url(); ?>" class="header__logo">
					<img src="<?= wp_get_attachment_image_url(get_field('header-logo', 'options'), 'medium') ?>" alt="Логотип">
				</a>
				<nav class="header__nav">
					<?php wp_nav_menu([
							'theme_location'  => 'menu',
							'container'       => 'false',
						]); ?>
				</nav>
				<ul class="header__social social">
					<? if( have_rows('options-socials', 'options') ):
					while ( have_rows('options-socials', 'options') ) : the_row(); ?>
					<li>
						<a href="<?= get_sub_field('header-socials-link', 'options'); ?>" target="_blank">
							<img src="<?= get_sub_field('header-socials-img', 'options'); ?>" class="svg-wp">
						</a>
					</li>
					<? endwhile;
					endif; ?>
				</ul>

				<a href="tel:<? echo preg_replace('/[^\d+]/', '', get_field('header-tel', 'options'));?>" class="header__tel">
					<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M0.738366 0.855635C0.593866 1.01726 0.503172 1.22749 0.497421 1.45521C0.426899 4.25765 1.45243 6.86576 3.38542 8.79875C5.31819 10.7315 7.9263 11.7571 10.7285 11.6863C10.9563 11.6806 11.1665 11.5899 11.3281 11.4454C11.5167 11.2768 11.6391 11.0349 11.6457 10.7692L11.6988 8.68156C11.7108 8.19107 11.2863 7.7665 10.7958 7.77854C10.0975 7.79617 9.41566 7.70434 8.77216 7.50644C8.45277 7.40427 8.08793 7.4967 7.87373 7.71478L6.56007 8.7207C5.07433 7.95385 4.21829 7.09822 3.46265 5.6237L4.44184 4.34106C4.68643 4.09648 4.77993 3.74347 4.68444 3.41483C4.48549 2.76809 4.39364 2.08624 4.41083 1.38798C4.41728 1.1423 4.32612 0.912773 4.15456 0.741214C3.98322 0.569882 3.7537 0.478713 3.50824 0.48494L1.41482 0.537816C1.14899 0.544561 0.907029 0.666988 0.738366 0.855635Z"
							fill="#01873D" />
					</svg>
					<span><?= get_field('header-tel', 'options'); ?></span>
				</a>
				<button class="header__burger burger">
					<span class="burger__title">
						Меню
					</span>
					<span class="burger__icon">
						<span class="burger__round"></span>
						<span class="burger__round"></span>
						<span class="burger__round"></span>
						<span class="burger__round"></span>
						<span class="burger__round burger__round--center"></span>
						<span class="burger__round"></span>
						<span class="burger__round"></span>
						<span class="burger__round"></span>
						<span class="burger__round"></span>
					</span>
				</button>
			</div>

		</header>