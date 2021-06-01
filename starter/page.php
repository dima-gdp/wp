<?php get_header(); ?>
<? get_filename(); ?>


<main class="main">
	<div class="breadcrumbs">
		<?php get_template_part('breadcrumbs') ?>
	</div>
	<section class="page">
		<div class="page__container container">
			<div class="page__subcontainer">
				<h1 class="page__title title"><?= get_field('page-title'); ?></h1>
				<div class="page__content type-style">
					<?= get_field('page-content'); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<? get_filename(); ?>
<?php get_footer(); ?>