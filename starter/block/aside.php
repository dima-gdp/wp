<? $categoriesParams = [
		'hide_empty' => 1,
		'child_of' => 1,
		'parent' => 1,
		'meta_key' => 'cat-sort',
		'orderby' => 'meta_value_num',
		'order' => 'ASC',
		];
	?>

<?php
$currentCat = get_queried_object();
$current_cat_id = $currentCat->term_id;
$current_cat_parent = $currentCat->category_parent;
?>

<aside class="archive__aside aside">
	<button class="aside__close"></button>
	<h2 class="aside__title title">Каталог</h2>
	<ul class="aside__list">

		<? $categories = get_categories($categoriesParams);
       foreach ($categories as $category) :?>

		<li>
			<a href="<?= get_term_link($category->term_id); ?>"
				<?php if($current_cat_id == $category->term_id || cat_is_ancestor_of( $category->term_id, $current_cat_id ) ){ ?>
				class="active" <?php }?>><?= $category->name; ?></a>

			<? build_sub_categories_aside($category->term_id, $currentCat, false, '');?>
		</li>

		<?php endforeach; ?>

	</ul>
</aside>