<?php get_header(); ?>

<div class="main">
	<section class="hero"
		style="background-image: url(<?= wp_get_attachment_image_url(get_field('hero-img'), 'large') ?>);">
		<div class="hero__container container">
			<div class="hero__left">
				<h1 class="hero__title"><?= get_field('hero-title'); ?></h1>
				<div class="hero__subtitle"><?= get_field('hero-subtitle'); ?></div>
				<div class="hero__btn btn" data-src="#modal-call"><?= get_field('hero-btn'); ?> <svg width="20" height="12"
						viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.5 1.66987L19 6L11.5 10.3301L11.5 1.66987Z" stroke="black" />
						<rect y="5.125" width="11.375" height="1" fill="black" />
					</svg>
				</div>
			</div>
			<div class="hero__right">
				<div class="hero__item">
					<div class="hero__logo">
						<img src="<?= wp_get_attachment_image_url(get_field('hero-logo'), 'medium') ?>" alt="">
					</div>
					<div class="hero__text"><?= get_field('hero-logo-text'); ?></div>
				</div>
			</div>
		</div>
	</section>

	<div class="decor-waves">
		<svg class="decor-waves__svg" width="1920" height="204" viewBox="0 0 1920 204" fill="none"
			xmlns="http://www.w3.org/2000/svg">
			<path class="start start-1"
				d="M0.78125 128.048C174.86 3.96995 321.214 125.517 423.634 137.996C675.059 168.633 741.334 108.733 964.628 46.6644C1372.35 -66.6679 1557.65 210.717 1910.4 120.501"
				stroke="#DBDBDB" stroke-miterlimit="22.9256" />
			<path class="second second-1"
				d="M3.125 57.2871C190.147 46.1759 290.672 279.881 578.271 127.893C767.97 27.6418 902.73 30.5674 1096.03 102.833C1495.99 252.363 1604.23 -46.4837 1910.83 79.5844"
				stroke="#DBDBDB" stroke-miterlimit="22.9256" />

			<path class="start start-2"
				d="M3.125 57.2871C190.147 46.1759 290.672 279.881 578.271 127.893C767.97 27.6418 902.73 30.5674 1096.03 102.833C1495.99 252.363 1604.23 -46.4837 1910.83 79.5844"
				stroke="#DBDBDB" stroke-miterlimit="22.9256" />
			<path class="second second-2"
				d="M0 196.624C128.589 110.341 233.217 -13.6918 447.056 99.15C686.091 225.288 829.967 167.781 1064.49 106.541C1272.77 52.1544 1368.58 142.79 1507.19 190.268C1671.05 246.39 1774.33 54.4087 1914.26 22.8142"
				stroke="#DBDBDB" stroke-miterlimit="22.9256" />

			<path class="start start-3"
				d="M0 196.624C128.589 110.341 233.217 -13.6918 447.056 99.15C686.091 225.288 829.967 167.781 1064.49 106.541C1272.77 52.1544 1368.58 142.79 1507.19 190.268C1671.05 246.39 1774.33 54.4087 1914.26 22.8142"
				stroke="#DBDBDB" stroke-miterlimit="22.9256" />
			<path class="second second-3"
				d="M0 6.67587C236.422 -36.9985 427.824 210.175 630.863 175.165C775.877 150.161 934.832 82.4193 1084.7 44.4864C1314.79 -13.7495 1453.91 -10.186 1669.54 83.6097C1746.86 117.243 1819.2 170.767 1919.33 183.817"
				stroke="#DBDBDB" stroke-miterlimit="22.9256" />

			<path class="start start-4"
				d="M0 6.67587C236.422 -36.9985 427.824 210.175 630.863 175.165C775.877 150.161 934.832 82.4193 1084.7 44.4864C1314.79 -13.7495 1453.91 -10.186 1669.54 83.6097C1746.86 117.243 1819.2 170.767 1919.33 183.817"
				stroke="#DBDBDB" stroke-miterlimit="22.9256" />
			<path class="second second-4"
				d="M0.78125 128.048C174.86 3.96995 321.214 125.517 423.634 137.996C675.059 168.633 741.334 108.733 964.628 46.6644C1372.35 -66.6679 1557.65 210.717 1910.4 120.501"
				stroke="#DBDBDB" stroke-miterlimit="22.9256" />

		</svg>
		<div class="decor-waves__lists">
			<svg width="38" height="45" viewBox="0 0 38 45" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M9.43266 38.6291C5.57824 31.938 5.58639 23.6984 9.4539 17.0149C13.3214 10.3314 20.4611 6.21862 28.1831 6.2263C32.0375 12.9175 32.0293 21.157 28.1618 27.8405C24.2943 34.524 17.1546 38.6368 9.43266 38.6291Z"
					fill="#66B087" />
			</svg>

			<svg width="78" height="56" viewBox="0 0 78 56" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M4.46268 35.7491C8.85102 21.8533 20.32 11.3539 34.5481 8.20656C48.7762 5.05923 63.6034 9.74181 73.4432 20.4903C69.0549 34.3861 57.5859 44.8855 43.3578 48.0328C29.1297 51.1801 14.3024 46.4976 4.46268 35.7491Z"
					fill="#66B087" />
			</svg>

			<svg width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M9.15938 8.67681C17.9055 6.61684 27.0866 9.37957 33.2435 15.9239C39.4004 22.4682 41.5985 31.8006 39.0093 40.405C30.2631 42.4649 21.082 39.7022 14.9251 33.1579C8.7682 26.6135 6.57018 17.2811 9.15938 8.67681Z"
					fill="#66B087" />
			</svg>

			<svg width="80" height="72" viewBox="0 0 80 72" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M11.0237 55.1574C10.0934 41.0159 16.7787 27.4518 28.5603 19.5756C40.3419 11.6994 55.4314 10.7068 68.1434 16.9721C69.0737 31.1136 62.3885 44.6777 50.6068 52.5539C38.8252 60.4301 23.7357 61.4227 11.0237 55.1574Z"
					fill="#94C8AB" />
			</svg>

			<svg width="29" height="33" viewBox="0 0 29 33" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M7.16654 28.4722C4.36298 23.414 4.47096 17.2441 7.44969 12.2871C10.4284 7.33016 15.8257 4.33869 21.608 4.43992C24.4115 9.49809 24.3036 15.668 21.3248 20.625C18.3461 25.5819 12.9488 28.5734 7.16654 28.4722Z"
					fill="#66B087" />
			</svg>

			<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M8.07019 34.3421C5.98023 26.9083 8.01506 18.924 13.4078 13.3973C18.8006 7.87055 26.7327 5.64052 34.2154 7.54755C36.3054 14.9813 34.2706 22.9656 28.8778 28.4924C23.485 34.0191 15.5529 36.2491 8.07019 34.3421Z"
					fill="#94C8AB" />
			</svg>

			<svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M10.8974 11.6113C21.6161 8.61838 33.1178 11.5714 41.0689 19.3576C49.0201 27.1437 52.2136 38.581 49.446 49.3601C38.7273 52.353 27.2257 49.4 19.2745 41.6138C11.3234 33.8277 8.12984 22.3904 10.8974 11.6113Z"
					fill="#66B087" />
			</svg>

			<svg width="24" height="33" viewBox="0 0 24 33" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M8.38507 30.1693C4.33982 26.0363 2.80674 20.059 4.36335 14.4893C5.91996 8.91964 10.33 4.60323 15.9318 3.16649C19.9771 7.29941 21.5102 13.2768 19.9535 18.8465C18.3969 24.4161 13.9869 28.7325 8.38507 30.1693Z"
					fill="#66B087" />
			</svg>

			<svg width="61" height="62" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
					d="M12.4639 10.855C23.3303 8.45275 34.6533 12.0304 42.1667 20.2398C49.6801 28.4491 52.2433 40.0439 48.8904 50.6555C38.024 53.0578 26.701 49.4801 19.1876 41.2707C11.6742 33.0614 9.111 21.4666 12.4639 10.855Z"
					fill="#94C8AB" />
			</svg>
		</div>
		<div class="decor-waves__container container">
			<div class="decor-waves__grid">


				<? if( have_rows('second-blocks') ):
					while ( have_rows('second-blocks') ) : the_row(); ?>
				<div class="decor-waves__column">
					<div class="decor-waves__item">
						<div class="decor-waves__val"><?= get_sub_field('second-blocks-title'); ?></div>
						<div class="decor-waves__key"><?= get_sub_field('second-blocks-subtitle'); ?></div>
					</div>
				</div>
				<? endwhile;
					endif; ?>


			</div>
		</div>
	</div>


	<? $mainCategories = array_slice(get_field('cats'), 0, 4); ?>

	<section class="categories">
		<div class="categories__container container">
			<div class="categories__grid">

				<? foreach ($mainCategories as $cat) { ?>
				<div class="categories__column">
					<a href="<?= get_category_link($cat); ?>" class="categories__item item-cat"
						style="background-image: url(<?= wp_get_attachment_image_url(get_field('cat-img', 'category_'.$cat), 'large'); ?>);">
						<div class="item-cat__text">
							<h3 class="item-cat__title"><?= get_field('cat-title', 'category_'.$cat); ?></h3>
							<div class="item-cat__subtitle"><?= get_field('cat-subtitle', 'category_'.$cat); ?>.</div>
						</div>
						<div class="item-cat__colos">
							<img src="<?= THEME_URL ?>/assets/svg/colos.svg">
						</div>
					</a>
				</div>

				<?	}?>

				<div class="categories__column">
					<div class="categories__btn-item">
						<div class="round">
							<a href="/catalog" class="round__btn">
								Полный каталог
								<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.5 1.66987L19 6L11.5 10.3301L11.5 1.66987Z" stroke="black" />
									<rect y="5.125" width="11.375" height="1" fill="black" />
								</svg>

							</a>
							<span class="round__el round__el--1"></span>
							<span class="round__el round__el--2"></span>
							<span class="round__el round__el--3">
								<svg width="22" height="31" viewBox="0 0 22 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M7.92224 29.1013C3.61298 25.2444 1.68865 19.3813 2.87419 13.721C4.05973 8.06076 8.17516 3.46265 13.67 1.65924C17.9792 5.5161 19.9035 11.3792 18.718 17.0395C17.5325 22.6998 13.417 27.2979 7.92224 29.1013Z"
										fill="#66B087" />
								</svg>

								<svg width="51" height="69" viewBox="0 0 51 69" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M17.6034 5.59209C29.6275 8.72637 39.0664 18.0379 42.3639 30.018C45.6614 41.9982 42.317 54.8283 33.5904 63.6742C21.5663 60.5399 12.1274 51.2284 8.82991 39.2482C5.53238 27.2681 8.87683 14.438 17.6034 5.59209Z"
											fill="#66B087" />
									</g>
									<defs>
										<clipPath id="clip0">
											<rect width="34.7811" height="60.2427" fill="white"
												transform="translate(50.3574 59.0591) rotate(164.61)" />
										</clipPath>
									</defs>
								</svg>

								<!-- <img src="svg/cat-list-2.svg" alt="">
								<img src="svg/cat-list-4.svg" alt=""> -->
							</span>
							<span class="round__el round__el--4">
								<svg width="35" height="49" viewBox="0 0 35 49" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M22.0835 2.86868C28.7034 8.95076 31.5757 18.1029 29.6183 26.8768C27.661 35.6507 21.1712 42.7143 12.5939 45.4061C5.97408 39.324 3.10179 30.1718 5.05914 21.398C7.01648 12.6241 13.5063 5.56047 22.0835 2.86868Z"
										fill="#66B087" />
								</svg>

								<svg width="42" height="39" viewBox="0 0 42 39" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M4.79445 9.1318C11.6394 5.5575 19.8715 5.90654 26.3893 10.0472C32.9071 14.188 36.7209 21.4917 36.3938 29.2067C29.5489 32.781 21.3167 32.432 14.7989 28.2913C8.28118 24.1506 4.46731 16.8468 4.79445 9.1318Z"
										fill="#94C8AB" />
								</svg>

								<!-- <img src="svg/cat-list-1.svg" alt="">
								<img src="svg/cat-list-5.svg" alt=""> -->
							</span>
							<span class="round__el round__el--5">
								<svg width="22" height="31" viewBox="0 0 22 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M7.92224 29.1013C3.61298 25.2444 1.68865 19.3813 2.87419 13.721C4.05973 8.06076 8.17516 3.46265 13.67 1.65924C17.9792 5.5161 19.9035 11.3792 18.718 17.0395C17.5325 22.6998 13.417 27.2979 7.92224 29.1013Z"
										fill="#66B087" />
								</svg>

								<svg width="51" height="69" viewBox="0 0 51 69" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M17.6034 5.59209C29.6275 8.72637 39.0664 18.0379 42.3639 30.018C45.6614 41.9982 42.317 54.8283 33.5904 63.6742C21.5663 60.5399 12.1274 51.2284 8.82991 39.2482C5.53238 27.2681 8.87683 14.438 17.6034 5.59209Z"
											fill="#66B087" />
									</g>
									<defs>
										<clipPath id="clip0">
											<rect width="34.7811" height="60.2427" fill="white"
												transform="translate(50.3574 59.0591) rotate(164.61)" />
										</clipPath>
									</defs>
								</svg>

								<!-- <img src="svg/cat-list-2.svg" alt="">
								<img src="svg/cat-list-4.svg" alt=""> -->
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="services">
		<div class="services__container container">
			<h2 class="services__title title"><?= get_field('service-title'); ?></h2>
			<div class="services__grid">

				<div class="services__column">
					<div class="services__item item-services">

						<? if( have_rows('services') ):
							$idx = 0;
					while ( have_rows('services') ) : the_row(); ?>

						<? if (($idx % 2) != 0) { ?>
						<div class="item-services__el">
							<div class="item-services__image">
								<img src="<?= wp_get_attachment_image_url(get_sub_field('services-icon'), 'thumb') ?>" alt="">
							</div>
							<p class="item-services__title"><?= get_sub_field('services-title'); ?></p>
							<div class="item-services__subtitle"><?= get_sub_field('service-subtitle'); ?></div>
						</div>
						<? } ?>


						<? $idx = $idx + 1; endwhile;
					endif; ?>

					</div>
				</div>

				<div class="services__column">
					<div class="services__logo-item">
						<div class="round-serv">
							<div class="round-serv__btn">
								<img src="<?= wp_get_attachment_image_url(get_field('header-logo', 'options'), 'medium') ?>" alt="">
							</div>
							<span class="round-serv__el round-serv__el--1"></span>
							<span class="round-serv__el round-serv__el--2"></span>
							<span class="round-serv__el round-serv__el--3"></span>
						</div>
					</div>
				</div>

				<div class="services__column">
					<div class="services__item item-services">

						<? if( have_rows('services') ):
							$idx = 0;
					while ( have_rows('services') ) : the_row(); ?>

						<? if (($idx % 2) == 0) { ?>
						<div class="item-services__el">
							<div class="item-services__image">
								<img src="<?= wp_get_attachment_image_url(get_sub_field('services-icon'), 'thumb') ?>" alt=""
									class="svg-wp">
							</div>
							<p class="item-services__title"><?= get_sub_field('services-title'); ?></p>
							<div class="item-services__subtitle"><?= get_sub_field('service-subtitle'); ?></div>
						</div>
						<? } ?>


						<? $idx = $idx + 1; endwhile;
					endif; ?>

					</div>
				</div>

			</div>

		</div>
	</section>

	<section class="consalt">
		<div class="consalt__container container">
			<div class="consalt__flex">
				<div class="consalt__left">
					<h2 class="consalt__title title"><?= get_field('consult-title'); ?></h2>
					<div class="consalt__subtitle type-style">
						<?= get_field('consult-subtitle'); ?>
					</div>
					<div class="consalt__form">
						<?php echo do_shortcode('[contact-form-7 id="92" title="Консультация"]'); ?>
					</div>
					<div class="consalt__privacy">
						Нажимая кнопку «Жду звонка», я принимаю <span data-src="#modal-polit">политику конфиденциальности</span>
						сайта
					</div>
				</div>
				<div class="consalt__right">
					<div class="consalt__image"
						style="background-image: url(<?= wp_get_attachment_image_url(get_field('consult-img'), 'full') ?>);"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="partners">
		<div class="partners__container container">
			<h2 class="partners__title title"><?= get_field('partners-title'); ?></h2>
			<div class="partners__slider-wrapper">
				<div class="partners__slider">
					<div class="swiper-wrapper">

						<? if( have_rows('partners-logos') ):
						while ( have_rows('partners-logos') ) : the_row(); ?>
						<div class="swiper-slide">
							<div class="partners__logo">
								<img src="<?= wp_get_attachment_image_url(get_sub_field('partners-logo'), 'large') ?>" alt="">
							</div>
						</div>
						<? endwhile;
						endif; ?>

					</div>
				</div>
				<button class="nav-slider__btn nav-slider--prev partners__prev">
					<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M8.5 1.66987L1 6L8.5 10.3301L8.5 1.66987Z" stroke="#01873D" />
						<rect width="11.375" height="1" transform="matrix(-1 0 0 1 20 5.125)" fill="#01873D" />
					</svg>

				</button>
				<button class="nav-slider__btn nav-slider--next partners__next">
					<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.5 1.66987L19 6L11.5 10.3301L11.5 1.66987Z" stroke="#01873D" />
						<rect y="5.125" width="11.375" height="1" fill="#01873D" />
					</svg>

				</button>
			</div>
		</div>
	</section>

	<section class="about">
		<div class="about__container container">
			<div class="about__flex">
				<div class="about__left">
					<div class="about__image"
						style="background-image: url(<?= wp_get_attachment_image_url(get_field('about-img'), 'full') ?>);"></div>
				</div>
				<div class="about__right">
					<h2 class="about__title title"><?= get_field('about-title'); ?></h2>
					<div class="about__subtitle type-style">
						<?= get_field('about-subtitle'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? 
		$args = array( 
		'posts_per_page' => -1,
		'post_type' => 'history',
		'meta_key' => 'history-sort',
		'orderby' => 'meta_value_num',
		'order' => 'DESC',
		);
		$query = new WP_Query( $args );
		$firstPostId = $query->posts[0]->ID;
		$initialYear = $query->posts[0]->post_title;
		$firstPostImg = get_field('history-content', $firstPostId)[0]['history-img'];
		?>

	<section class="company__history js-company-history"><a id="history" class="anchor"></a>
		<div class="company__container container">
			<h2 class="company__title title-small">История компании</h2>
			<div class="company__flex">
				<div class="company__left">
					<div class="company__history-info js-company-history-info" style="opacity: 1;">
						<figure class="company__history-figure">
							<img src="<?= wp_get_attachment_image_url($firstPostImg, 'medium') ?>"
								class="company__history-figure-img js-company-history-year-img" />
						</figure>
					</div>
					<div class="product-slider__controls-arrows history-about-news-list-slider">
						<button type="button" class="js-history-slider-arrow-prev">
							<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.5 1.66987L1 6L8.5 10.3301L8.5 1.66987Z" stroke="#01873D" />
								<rect width="11.375" height="1" transform="matrix(-1 0 0 1 20 5.125)" fill="#01873D" />
							</svg>

						</button>
						<div class="company__history-year js-company-history-year">
							<?= $initialYear;  ?>
						</div>
						<button type="button" class="js-history-slider-arrow-next">
							<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11.5 1.66987L19 6L11.5 10.3301L11.5 1.66987Z" stroke="#01873D" />
								<rect y="5.125" width="11.375" height="1" fill="#01873D" />
							</svg>

						</button>
					</div>
				</div>
				<div class="company__right">
					<div class="company__slider-wrapper">
						<div class="company__history-slider owl-carousel js-company-history-slider owl-loaded owl-drag">
							<div class="owl-stage-outer">
								<div class="owl-stage">



									<?
									while ( $query->have_posts() ) {
									$query->the_post(); ?>

									<? if( have_rows('history-content') ):
											while ( have_rows('history-content') ) : the_row(); ?>
									<div class="owl-item active">
										<div data-img="<?= wp_get_attachment_image_url(get_sub_field('history-img'), 'medium') ?>"
											data-year="<?php the_title(); ?>" class="company__history-slide type-style">
											<?= get_sub_field('history-text'); ?>
										</div>
									</div>

									<? endwhile;
											endif; ?>

									<? } wp_reset_query( ); ?>




								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="company__history-slider-controls">
			<div class="company__history-slider-controls-line"></div>
			<div class="container">
				<div class="company__history-slider-controls-dots js-company-history-dots" style="transform: translateX(0px);">
					<div class="company__history-slider-controls-dragger js-company-history-dragger"
						style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 0px;">
						<div class="company__history-slider-controls-dragger-before"></div>
						<div class="company__history-slider-controls-dragger-dot"></div>
					</div>

					<? 	while ( $query->have_posts() ) {
									$query->the_post(); ?>

					<? if( have_rows('history-content') ):
							$idx = 0;
							while ( have_rows('history-content') ) : the_row(); ?>

					<? if ($idx === 0) { ?>

					<div
						class="company__history-slider-controls-dot company__history-slider-controls-dot--with-year js-company-history-dot">
						<span class="company__history-slider-controls-dot-year"><?php the_title(); ?></span>
					</div>
					<? } else {?>
					<div class="company__history-slider-controls-dot js-company-history-dot"></div>

					<? } ?>

					<? $idx = $idx + 1; endwhile;
											endif; ?>

					<? } wp_reset_query( ); ?>





				</div>
			</div>
		</div>
	</section>

	<? 
		$response = file_get_contents("https://api.vk.com/method/wall.get?domain=agrosnabsz&count=2&extended=1&access_token=5987718a5987718a5987718a4359f018ad559875987718a39ff59e80e99867c5ea550eb&v=5.73");
		$json = json_decode($response, true);
		$data = $json[response];
	?>

	<!-- 5987718a5987718a5987718a4359f018ad559875987718a39ff59e80e99867c5ea550eb -->



	<pre>


		</pre>

	<? 
		if($data[items][0][attachments][0][photo][photo_604]){
		$img_vk_1 = $data[items][0][attachments][0][photo][photo_604];
		} else if($data[items][0][attachments][0][photo][photo_130]){
			$img_vk_1 = $data[items][0][attachments][0][photo][photo_130];
		} else if ($data[items][0][attachments][0][video][photo_320]){
			$img_vk_1 = $data[items][0][attachments][0][video][photo_320];
		} else {
			$img_vk_1 = THEME_URL.'/assets/img/notfound.jpg';
		}
		?>

	<? 
		if($data[items][1][attachments][0][photo][photo_604]){
		$img_vk_2 = $data[items][1][attachments][0][photo][photo_604];
		} else if($data[items][1][attachments][0][photo][photo_130]){
			$img_vk_2 = $data[items][1][attachments][0][photo][photo_130];
		} else if ($data[items][1][attachments][0][video][photo_320]) {
			$img_vk_2 = $data[items][1][attachments][0][video][photo_320];
		} else {
			$img_vk_2 = THEME_URL.'/assets/img/notfound.jpg';
		}
		?>

	<section class="feed">
		<div class="feed__container container">
			<h2 class="feed__title title">Новости компании и запуски техники в соцсетях</h2>
			<div class="feed__grid">
				<div class="feed__col">
					<div class="feed-item">
						<div class="feed-item__top">
							<a href="<?= get_field('newsfeed-vk'); ?>" class="feed-item__logo" target="_blank">
								<svg width="73" height="73" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M36.5 73C56.6584 73 73 56.6584 73 36.5C73 16.3416 56.6584 0 36.5 0C16.3416 0 0 16.3416 0 36.5C0 56.6584 16.3416 73 36.5 73Z"
										fill="#4D76A1" />
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M35.1213 52.5086H37.9861C37.9861 52.5086 38.8515 52.4136 39.2933 51.9373C39.6999 51.5001 39.6869 50.679 39.6869 50.679C39.6869 50.679 39.631 46.8349 41.415 46.2689C43.1737 45.7113 45.4321 49.9841 47.8259 51.627C49.636 52.8703 51.0114 52.5977 51.0114 52.5977L57.4119 52.5086C57.4119 52.5086 60.7601 52.3023 59.1725 49.6698C59.0424 49.4544 58.2479 47.7224 54.4137 44.1634C50.4005 40.4384 50.9379 41.0409 55.7722 34.5976C58.7164 30.6735 59.8934 28.2778 59.5258 27.2518C59.1751 26.2745 57.0098 26.5328 57.0098 26.5328L49.8032 26.5777C49.8032 26.5777 49.269 26.5048 48.8728 26.7417C48.4856 26.9739 48.2364 27.5153 48.2364 27.5153C48.2364 27.5153 47.0958 30.5518 45.5746 33.1343C42.3656 38.5834 41.0826 38.871 40.5581 38.5327C39.3382 37.7441 39.6427 35.3647 39.6427 33.6743C39.6427 28.3937 40.4436 26.1919 38.0831 25.6219C37.2997 25.4326 36.7232 25.3076 34.7199 25.2875C32.1485 25.2608 29.9721 25.2953 28.7398 25.8991C27.92 26.3005 27.2875 27.1952 27.6727 27.2466C28.149 27.3103 29.2278 27.5374 29.7997 28.3162C30.5382 29.3208 30.5122 31.5773 30.5122 31.5773C30.5122 31.5773 30.9364 37.7935 29.5212 38.5659C28.5498 39.0955 27.2173 38.0141 24.3564 33.0705C22.8905 30.5382 21.7837 27.7391 21.7837 27.7391C21.7837 27.7391 21.5703 27.216 21.1897 26.9362C20.7277 26.5972 20.0823 26.4892 20.0823 26.4892L13.2342 26.5341C13.2342 26.5341 12.2062 26.5627 11.8288 27.0097C11.4931 27.4073 11.8021 28.2297 11.8021 28.2297C11.8021 28.2297 17.1635 40.7729 23.234 47.0939C28.8003 52.8892 35.1213 52.5086 35.1213 52.5086Z"
										fill="white" />
								</svg>

								<span>Вконтакте</span>
							</a>
							<a href="<?= get_field('newsfeed-vk'); ?>" class="feed-item__btn btn" target="_blank">Подписаться</a>
						</div>
						<div class="feed-item__grid vk-feed">
							<div class="feed-item__col">

								<a class="feed-item__content content-feed" target="_blank"
									href="<?= 'https://vk.com/'.$data[groups][0][screen_name].'?w=wall-'.$data[groups][0][id].'_'.$data[items][0][id].'%2Fall' ?>">
									<div class="content-feed__image">
										<img src="<?=$img_vk_1;?>" alt="">
									</div>
									<div class="content-feed__text"><?= mb_strimwidth($data[items][0][text], 0, 200, "..."); ?></div>
								</a>
							</div>
							<div class="feed-item__col">
								<a class="feed-item__content content-feed" target="_blank"
									href="<?= 'https://vk.com/'.$data[groups][0][screen_name].'?w=wall-'.$data[groups][0][id].'_'.$data[items][1][id].'%2Fall' ?>">
									<div class="content-feed__image">
										<img src="<?= $img_vk_2; ?>" alt="">
									</div>
									<div class="content-feed__text"><?= mb_strimwidth($data[items][1][text], 0, 200, "..."); ?></div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="feed__col">
					<div class="feed-item">
						<div class="feed-item__top">
							<a href="<?= get_field('newsfeed-fb'); ?>" class="feed-item__logo" target="_blank">
								<svg width="73" height="73" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M36.5 73C56.6584 73 73 56.6584 73 36.5C73 16.3416 56.6584 0 36.5 0C16.3416 0 0 16.3416 0 36.5C0 56.6584 16.3416 73 36.5 73Z"
										fill="#3B5998" />
									<path
										d="M45.6759 37.9289H39.1629V61.7895H29.2952V37.9289H24.6021V29.5434H29.2952V24.117C29.2952 20.2366 31.1384 14.1602 39.2507 14.1602L46.5601 14.1907V22.3303H41.2567C40.3867 22.3303 39.1635 22.765 39.1635 24.6161V29.5512H46.538L45.6759 37.9289Z"
										fill="white" />
								</svg>

								<span>facebook</span>
							</a>
							<a href="<?= get_field('newsfeed-fb'); ?>" class="feed-item__btn btn" target="_blank">Подписаться</a>
						</div>
						<div class="feed-item__grid">
							<div class="feed-item__col">
								<a class="feed-item__content content-feed">
									<div class="content-feed__image">
										<img src="<?= THEME_URL ?>/assets/img/notfound.jpg" alt="">
									</div>
									<div class="content-feed__text">Картофелесажалки Агропромсельмаш подходят для междурядий 70, 75 и
										90
										см. Установлен надёжный итальянский редуктор🔥. Есть возможность протравливания и внесения
										удобрений. Объём бункера - 450, 600 и 1500 кг🔝</div>
								</a>
							</div>
							<div class="feed-item__col">
								<a class="feed-item__content content-feed">
									<div class="content-feed__image">
										<img src="<?= THEME_URL ?>/assets/img/notfound.jpg" alt="">
									</div>
									<div class="content-feed__text">Картофелесажалки Агропромсельмаш подходят для междурядий 70, 75 и
										90
										см. Установлен надёжный итальянский редуктор🔥. Есть возможность протравливания и внесения
										удобрений. Объём бункера - 450, 600 и 1500 кг🔝</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="feed__col">
					<div class="feed-item">
						<div class="feed-item__top">
							<a href="<?= get_field('newsfeed-youtube'); ?>" class="feed-item__logo" target="_blank">
								<svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip7)">
										<path
											d="M73.4547 19.4961C72.5901 16.2832 70.057 13.7506 66.8447 12.8855C60.9756 11.2793 37.4993 11.2793 37.4993 11.2793C37.4993 11.2793 14.0235 11.2793 8.15445 12.8242C5.00391 13.6888 2.40897 16.2838 1.54437 19.4961C0 25.3646 0 37.5354 0 37.5354C0 37.5354 0 49.7673 1.54437 55.5746C2.40954 58.7869 4.94211 61.3201 8.15503 62.1853C14.0853 63.7914 37.4998 63.7914 37.4998 63.7914C37.4998 63.7914 60.9756 63.7914 66.8447 62.2465C70.0576 61.3819 72.5901 58.8487 73.4553 55.6364C74.9997 49.7673 74.9997 37.5972 74.9997 37.5972C74.9997 37.5972 75.0615 25.3646 73.4547 19.4961Z"
											fill="#FF0000" />
										<path d="M30.0247 48.7791L49.5466 37.5353L30.0247 26.2915V48.7791Z" fill="white" />
									</g>
									<defs>
										<clipPath id="clip7">
											<rect width="75" height="75" fill="white" />
										</clipPath>
									</defs>
								</svg>

								<span>youtube</span>
							</a>
							<a href="<?= get_field('newsfeed-youtube'); ?>" class="feed-item__btn btn" target="_blank">Подписаться</a>
						</div>
						<div class="feed-item__grid feed-item__grid--youtube">
							<div class="feed-item__col">
								<a data-fancybox class="feed-item__content content-feed content-feed--video">
									<div class="content-feed__image">
										<img src="<?= THEME_URL ?>/assets/img/notfound.jpg" alt="">
										<svg width="39" height="46" viewBox="0 0 39 46" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M39 23L-2.12073e-06 45.5167L-1.52262e-07 0.483338L39 23Z" fill="white" />
										</svg>

									</div>
								</a>
							</div>
							<div class="feed-item__col">
								<a data-fancybox class="feed-item__content content-feed">
									<div class="content-feed__image">

										<img src="<?= THEME_URL ?>/assets/img/notfound.jpg" alt="">
										<svg width="39" height="46" viewBox="0 0 39 46" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M39 23L-2.12073e-06 45.5167L-1.52262e-07 0.483338L39 23Z" fill="white" />
										</svg>

									</div>
								</a>
							</div>
							<div class="feed-item__col">
								<a data-fancybox class="feed-item__content content-feed content-feed--video">
									<div class="content-feed__image">
										<img src="<?= THEME_URL ?>/assets/img/notfound.jpg" alt="">
										<svg width="39" height="46" viewBox="0 0 39 46" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M39 23L-2.12073e-06 45.5167L-1.52262e-07 0.483338L39 23Z" fill="white" />
										</svg>

									</div>
								</a>
							</div>
							<div class="feed-item__col">
								<a data-fancybox class="feed-item__content content-feed">
									<div class="content-feed__image">

										<img src="<?= THEME_URL ?>/assets/img/notfound.jpg" alt="">
										<svg width="39" height="46" viewBox="0 0 39 46" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M39 23L-2.12073e-06 45.5167L-1.52262e-07 0.483338L39 23Z" fill="white" />
										</svg>

									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<?php get_footer(); ?>