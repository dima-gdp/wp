<?php get_header(); ?>
<? get_filename(); ?>

<? function num_decline( $number, $titles, $show_number = 1 ){

if( is_string( $titles ) )
	$titles = preg_split( '/, */', $titles );

// когда указано 2 элемента
if( empty( $titles[2] ) )
	$titles[2] = $titles[1];

$cases = [ 2, 0, 1, 1, 1, 2 ];

$intnum = abs( (int) strip_tags( $number ) );

$title_index = ( $intnum % 100 > 4 && $intnum % 100 < 20 )
	? 2
	: $cases[ min( $intnum % 10, 5 ) ];

return ( $show_number ? "$number " : '' ) . $titles[ $title_index ];
} ?>


<main class="main">
	<div class="breadcrumbs">
		<?php get_template_part('breadcrumbs') ?>
	</div>

	<section class="product">
		<div class="product__container container">
			<h1 class="product__title title"><?= the_title(); ?></h1>
			<div class="product__flex">
				<div class="product__left">

					<a <? if(get_field('product-images')[0]['product-video']) { ?>
						href="<?= get_field('product-images')[0]['product-video']; ?>"
						<?	} else { ?>
						href="
						<?= wp_get_attachment_image_url(get_field('product-images')[0]['product-image'], 'full') ?>"
						<? };?>
						class="product__image" data-fancybox="images">
						<img src="<?= wp_get_attachment_image_url(get_field('product-images')[0]['product-image'], 'large') ?>"
							alt="">
						<span class="icon" <? if(get_field('product-images')[0]['product-video']) { ?>
							style="background-image: url(<?= THEME_URL ?>/assets/svg/play.svg);"
							<?	} else { ?>
							style="background-image: url(<?= THEME_URL ?>/assets/svg/search.svg);"
							<? };?>
							>
						</span>
					</a>


					<? $images = array_slice(get_field('product-images'), 1); 
						 $imagesLength = count($images); ?>

					<? if ($imagesLength) { ?>
					<div class="product__gal gal-product">

						<? if($imagesLength > 4) {
							
							foreach($images as $idx => $el) { ?>
						<? if ($idx < 3) { ?>
						<a <? if($el['product-video']) { ?>
							href="<?= $el['product-video']; ?>"
							<?	} else { ?>
							href="
							<?= wp_get_attachment_image_url($el['product-image'], 'full'); ?>"
							<? };?> class="gal-product__item" data-fancybox="images"
							<? if($el['product-video']) { ?>
							data-type="iframe"
							<? }; ?>>
							<img src="<?= wp_get_attachment_image_url($el['product-image'], 'large'); ?>" alt="">
							<span class="icon" <? if($el['product-video']) { ?>
								style="background-image: url(<?= THEME_URL ?>/assets/svg/play.svg);"
								<?	} else { ?>
								style="background-image: url(<?= THEME_URL ?>/assets/svg/plus.svg);"
								<? };?>
								>
							</span>
						</a>

						<?	} ?>

						<? if ($idx === 3) { ?>
						<a <? if($el['product-video']) { ?>
							href="<?= $el['product-video']; ?>"
							<?	} else { ?>
							href="
							<?= wp_get_attachment_image_url($el['product-image'], 'full'); ?>"
							<? };?> class="gal-product__item gal-product__more" data-fancybox="images"
							<? if($el['product-video']) { ?>
							data-type="iframe"
							<? }; ?>>
							<img src="<?= wp_get_attachment_image_url($el['product-image'], 'large'); ?>" alt="">
							<span class="icon" style="background-image: url(<?= THEME_URL ?>/assets/svg/play.svg);"></span>
							<p>+<?= num_decline( $imagesLength - 4, 'фотография, фотографии, фотографий' );  ?></p>
						</a>
						<?	} if ($idx > 3) { ?>


						<a <? if($el['product-video']) { ?>
							href="<?= $el['product-video']; ?>"
							<?	} else { ?>
							href="
							<?= wp_get_attachment_image_url($el['product-image'], 'full'); ?>"
							<? };?> class="gal-product__item gal-product__item--hide" data-fancybox="images"
							<? if($el['product-video']) { ?>
							data-type="iframe"
							<? }; ?>>
							<img src="<?= wp_get_attachment_image_url($el['product-image'], 'large'); ?>" alt="">
							<span class="icon" style="background-image: url(<?= THEME_URL ?>/assets/svg/play.svg);"></span>
						</a>

						<?	} ?>
						<? }; 	
							} else { ?>

						<? foreach($images as $el) { ?>

						<a <? if($el['product-video']) { ?>
							href="<?= $el['product-video']; ?>"
							<?	} else { ?>
							href="
							<?= wp_get_attachment_image_url($el['product-image'], 'full'); ?>"
							<? };?> class="gal-product__item" data-fancybox="images"
							<? if($el['product-video']) { ?>
							data-type="iframe"
							<? }; ?>>
							<img src="<?= wp_get_attachment_image_url($el['product-image'], 'large'); ?>" alt="">
							<span class="icon" <? if($el['product-video']) { ?>
								style="background-image: url(<?= THEME_URL ?>/assets/svg/play.svg);"
								<?	} else { ?>
								style="background-image: url(<?= THEME_URL ?>/assets/svg/plus.svg);"
								<? };?>
								>
							</span>
						</a>
						<?	}?>
						<?	}?>
					</div>
					<? } ?>

					<div class="product__tabs tabs-product">

						<ul class="tabs-product__list">
							<? if(get_field('product-tab-special')) { ?>
							<li>Описание</li>
							<?	} ?>

							<? if(get_field('product-tab-special')) { ?>
							<li class="descr-tab">Характеристики</li>
							<?	} ?>

							<? if(get_field('product-tab-special')) { ?>
							<li>Особенности</li>
							<?	} ?>

							<? if(get_field('product-tab-special')) { ?>
							<li>Документация</li>
							<?	} ?>

						</ul>

						<div class="tabs-product__body">
							<? if(get_field('product-tab-descr')) { ?>
							<div class="tabs-product__block active type-style">
								<?= get_field('product-tab-descr'); ?>
							</div>
							<?	} ?>

							<? if (get_field('product-tab-specifications')) { ?>
							<div class="tabs-product__block tabs-descr">
								<div class="tabs-descr__table">
									<? if( have_rows('product-tab-specifications') ):
								while ( have_rows('product-tab-specifications') ) : the_row(); ?>
									<div class="tabs-descr__row">
										<div class="tabs-descr__key"><?= get_sub_field('product-tab-specifications-key'); ?></div>
										<div class="tabs-descr__value"><?= get_sub_field('product-tab-specifications-value'); ?></div>
									</div>
									<? endwhile;
								endif; ?>
								</div>
							</div>
							<? } ?>

							<? if(get_field('product-tab-special')) { ?>
							<div class="tabs-product__block type-style">
								<?= get_field('product-tab-special'); ?>
							</div>
							<?	} ?>

							<? if(get_field('product-tab-docs')) { ?>
							<div class="tabs-product__block type-style">
								<?= get_field('product-tab-docs'); ?>
							</div>
							<?	} ?>

						</div>
					</div>
				</div>
				<div class="product__right">
					<div class="product__descr">
						<? if (get_field('product-tab-specifications')) {
							$idx = 0; ?>
						<div class="product__table">
							<? if( have_rows('product-tab-specifications') ):
						while ( have_rows('product-tab-specifications') ) : the_row(); 
						if( $idx > 3) {
							break;
						}
						?>
							<p><span><?= get_sub_field('product-tab-specifications-key'); ?>
									— </span><?= get_sub_field('product-tab-specifications-value'); ?></p>
							<? $idx = $idx + 1; endwhile;
						endif; ?>
						</div>
						<? } ?>

						<a href="#" class="product__to-descr">
							<span>Все характеристики</span>
							<span class="product__burger">
							</span>
						</a>
						<div class="product__btns">
							<div class="product__consult btn" data-src="#modal-product">Получить консультацию</div>
							<? if(get_field('product-download')){ ?>
							<a href="<?= get_field('product-download'); ?>" class="product__download">
								<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M15.2069 10.335L9.5 16.0418L3.79313 10.335L4.84277 9.28532L8.75781 13.2004V0H10.2422V13.2004L14.1572 9.28532L15.2069 10.335ZM19 17.5156H0V19H19V17.5156Z"
										fill="black" />
								</svg>
								<span>Скачать брошюру</span>
							</a>
							<? } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<pre>
<? $complectProducts = get_field('with-products'); ?>
</pre>

	<? if (get_field('with-products')) { ?>
	<section class="with">
		<div class="with__container container">
			<h2 class="with__title"><?= get_field('with-title', 'options'); ?></h2>
			<div class="with__slider-wrapper">
				<div class="with__slider">
					<div class="swiper-wrapper">
						<? foreach(	$complectProducts as $idx => $item){ ?>
						<div class="swiper-slide">
							<a href="<?= get_permalink($item); ?>" class="product-item">
								<div class="product-item__image">
									<img
										src="<?= wp_get_attachment_image_url(get_field('product-images', $item)[0]['product-image'], 'large') ?>"
										alt="<?= get_the_title($item) ?>">
									<div class="product-item__btn">
										Подробнее
										<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.5 1.66987L19 6L11.5 10.3301L11.5 1.66987Z" stroke="black" />
											<rect y="5.125" width="11.375" height="1" fill="black" />
										</svg>

									</div>
								</div>
								<h2 class="product-item__title">
									<?= get_the_title($item) ?>
								</h2>
								<div class="product-item__subtitle">
									<?= get_field('product-preview-title', $item); ?></div>
							</a>
						</div>
						<?	} ?>
					</div>
				</div>
				<div class="with__pagination"></div>
			</div>
		</div>
	</section>
	<? } ?>
</main>

<? get_filename(); ?>
<?php get_footer(); ?>