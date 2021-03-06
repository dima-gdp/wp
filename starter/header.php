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
					if ($paged >= 2 || $page >= 2) echo ' | ' . sprintf('???????????????? %s', max($paged, $page));
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
					<div class="title-modal-polit">???????????????? ??????????????????????????????????</div>
					<div class="caption-modal-polit">
						<p class="subtitle-modal-polit">?????????????????? ???????????????????????????????? ???????????????????? ???????????????? ?????????????????? ????????????????????
							???????????????????????????? ??????????
							<?php echo home_url(); ?> (?????????? ??? ??????????????????????????) ?? ???????????????????? ?????????????? ?????????????????????????? ???????????????????????? (?????????? -
							????????????????????) ?????????? <?php echo home_url(); ?>, ???????????????????????????? ????????????????????????????, ?? ??????????????????, ???????????????? ?? ??????????
							?????????????????????????? ????????????????????, ???????????????????? ?????????????????????????????? ???? ???????????????????? ???? ?????????? ????????????????????????????. ??????????????????????????
							?????????? ?????????? ???????????????? ?? ?????????? ???????????? ???????????? ???????????????????????????????? ???????????????????? ?????? ?????????????????????? ???????????????????? ??????????.
						</p>
						<ul>
							<li>???????????????????? ??????????, ???????????????? ??????????-???????? ????????????????????, ?????????????????????? ?????????? ?????? ???????????????? ?? ?????????????????????????? ??????
								?????????????????????????? ?????????????????????? ???????? (?????????? - ???????????????????????? ????????????), ????????????????????????, ?????? ?????????????????????? ?? ????????????
								???????????????????????????????? ?????????????????????? ?? ???????????????? ?? ??????.</li>
							<li>?? ?????????????????? ???????? ???????????????????? ???????????????????????? ???????????? ???????????????????? ???????? ???????????????????????????? ???????????? ???????????????? ???? ????
								??????????????????.</li>
							<li>?????????????????????????? ?????????? ?????????????????????? ????????????????????, ?????? ?????????????????? ?? ???????????????? ?????????????????????? ???????????????????????? ????????????
								???????????????????? ?????????? ???????????????????????????? ?? ???????????????????????? ?? ?????????????????????? ???????????????????????? ???????????? ???? 27.06.2006 ??? 152-????
								???? ???????????????????????? ??????????????.</li>
							<li>???????????????????? ?????????? ???????????????? ?? ?????????????????????? ?? ??????, ?????? ???????????????????????????? ???????????????????????????? ??????????-????????
								????????????????????, ???? ?????????????? ???????????????? ?????????????????? ?? ?????????? ??????????, ??????????????????. ?????????? ?????????????????????? ?????????? ????????????????
								????????????????????, ???????????????????? ?????????????????? ????????????????, ???????????????? ??????????, ????????????????????????????, ??????????????, ????????????????????????,
								?????????????????????? ?? ???????? ?????????????????? ????????????????????, ?? ?????????? ?? ????????????????????, ?????????????? ???????????????? ????????????????????????, ????????????????????
								?? ???????? ???????????? ???????????????????? ??????????.</li>
							<li>?????????????????????????? ?????????????????????? ????????????????????, ?????? ???????????????????? ???????????????????????? ????????????, ?????????????????????? ???? ????????????????????,
								?????????????????????????? ?? ??????????, ???????????????????????? ????????????????????????????, ????????????????????, ?????????????????????????????? ???????????? ????????????????????????????, ??
								?????????? ?????? ?????????????? ?? ???????????????????????? ?????????????????????? ??????????, ?? ?????????? ?? ?????????? ???????????????????????????? ?????? ?????????????? ?? ??????????
								?????????????????????????????? ??????????????????????, ???????? ??????, ???? ?????????? ????????????????????????????.</li>
							<li>???????????????????? ?? ???????????????????????? ?? ??. 1 ????. 18 ???????????????????????? ???????????? ???? ???????????????? ???????? ???????????????????????????? ????????
								???????????????? ???? ?????????????????? ?????????????????? ???????????????????? ?????????????????? ???? ?????????????????? ???????????????????? ????????????.</li>
							<li>???????????????????? ???????????????????????????? ?????????? ?????????????????????????????? ???? ?????????????????? ???????????????????????????????? ?????? ?????????????????????????? ??????????
								????????????????????????????.</li>
							<li>?????????????????????????? ???? ?????????? ?????????????? ?????????????????????????????? ?? ???????????? ?????????????????? ???????????????????????????????? ??????????????????????, ?? ??????
								??????????, ???? ??????????????????????, ?????? ???????????????????? ?????????? ?????????????????????????? ?????????? ???????????????????? ??????????.</li>
							<li>???????????????????? ?????????? ?????????? ???????????????????????????? ?????????????????????????????? ?? ????????????, ???????? ???????? ???????????????? ?????????? ?? ????????????????
								???????????????? ?????????????? ??????, ?????? ?????????????????????????? ?????????? ????????????????????????????, ??????????????????????.</li>
							<li>?????????????????????????? ???????????? ?????????????????? ?????????????????????????? ?????????? ????????????????????, ???????? ???? ???? ???????? ???????????????? ??????????????????.
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
				<div class="modal-call__title">???????????????? ????????????</div>
				<?php echo do_shortcode('[contact-form-7 id="134" title="???????????????????????? ??????????????"]'); ?>
				<div class="modal-call__privacy">?????????????? ???? ???????????? ?????????????????????? ???? ???????????????????????? ?? <span
						data-src="#modal-polit">??????????????????
						?????????????????? ???????????????????????? ????????????</span></div>
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
				<div class="modal-call__title">???????????????? ????????????</div>
				<?php echo do_shortcode('[contact-form-7 id="240" title="?????????? ????????????????????????"]'); ?>
				<div class="modal-call__privacy">?????????????? ???? ???????????? ?????????????????????? ???? ???????????????????????? ?? <span
						data-src="#modal-polit">??????????????????
						?????????????????? ???????????????????????? ????????????</span></div>
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
					<img src="<?= wp_get_attachment_image_url(get_field('header-logo', 'options'), 'medium') ?>" alt="??????????????">
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
						????????
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