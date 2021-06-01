<?php /* Template name: Контакты */ ?>

<?php get_header(); ?>

<main class="main">
	<div class="breadcrumbs">
		<?php get_template_part('breadcrumbs') ?>
	</div>
	<section class="contacts">
		<div class="contacts__container container">
			<h1 class="contacts__title title"><?= get_field('contacts-title'); ?></h1>

			<? if (get_field('contacts-list')) { ?>
			<ul class="contacts__table table-contacts">
				<? if( have_rows('contacts-list') ):
			while ( have_rows('contacts-list') ) : the_row(); ?>
				<li class="table-contacts__item">
					<div class="table-contacts__left"><?= get_sub_field('contacts-list-title'); ?></div>
					<div class="table-contacts__right">
						<?= get_sub_field('contacts-list-contacts'); ?>
					</div>

				</li>
				<? endwhile;
			endif; ?>
			</ul>
			<? } ?>

			<h2 class="contacts__subtitle"><?= get_field('staff-title'); ?></h2>

			<? if (get_field('staff-list')) { ?>
			<ul class="contacts__grid staff">
				<? if( have_rows('staff-list') ):
			while ( have_rows('staff-list') ) : the_row(); ?>
				<li class="staff__col">
					<div class="staff__item">
						<div class="staff__photo">
							<img src="<?= wp_get_attachment_image_url(get_sub_field('staff-list-photo'), 'large') ?>"
								alt="<?= get_sub_field('staff-list-name'); ?>">
						</div>
						<div class="staff__name"><?= get_sub_field('staff-list-name'); ?></div>
						<div class="staff__position"><?= get_sub_field('staff-list-position'); ?></div>
						<div class="staff__contacts">
							<?= get_sub_field('staff-list-contacts'); ?>
						</div>
					</div>
				</li>
				<? endwhile;
			endif; ?>
			</ul>
			<? } ?>

			<h2 class="contacts__subtitle"><?= get_field('adresess-title'); ?></h2>

			<? if (get_field('adresess-list')) { ?>
			<ul class="contacts__adresses adresess-contacts">
				<? if( have_rows('adresess-list') ):
			while ( have_rows('adresess-list') ) : the_row(); ?>
				<li class="adresess-contacts__row">
					<div class="adresess-contacts__city"><?= get_sub_field('adresess-list-city'); ?></div>
					<div class="adresess-contacts__adress"><?= get_sub_field('adresess-list-adress'); ?></div>
				</li>
				<? endwhile;
			endif; ?>
			</ul>
			<? } ?>

		</div>
	</section>
</main>

<?php get_footer(); ?>