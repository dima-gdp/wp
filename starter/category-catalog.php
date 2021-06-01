<?php get_header(); ?>
<? get_filename(); ?>

<main class="main">
	<div class="breadcrumbs">
		<?php get_template_part('breadcrumbs') ?>
	</div>

	<? $categoriesParams = [
		'hide_empty' => 1,
		'child_of' => 1,
		'parent' => 1,
		'meta_key' => 'cat-sort',
		'orderby' => 'meta_value_num',
		'order' => 'ASC',
		];
	?>

	<section class="catalog">
		<div class="catalog__container container">
			<h1 class="catalog__title title">Каталог</h1>
			<div class="catalog__grid">

				<? $categories = get_categories($categoriesParams);
       foreach ($categories as $category) :?>
				<div class="catalog__column">
					<div class="catalog__item item-catalog">
						<div class="item-catalog__image">
							<img
								src="<?= wp_get_attachment_image_url(get_field('cat-icon', 'category_'.$category->term_id), 'thumb'); ?>"
								alt="">
						</div>
						<a href="<?= get_term_link($category->term_id); ?>" class="item-catalog__title"><?= $category->name; ?></a>
						<? build_sub_categories($category->term_id, false, false, '');?>
					</div>
				</div>

				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>

<? get_filename(); ?>
<?php get_footer(); ?>