<?php get_header(); ?>
<? get_filename(); ?>


<?
$currentCat = get_queried_object();
$current_cat_id = $currentCat->term_id;
$current_cat_name = $currentCat->name;
$args = array( 
	'posts_per_page' => 2,
	'paged' => get_query_var('paged'),
	'cat' => $current_cat_id,
	);
$query = new WP_Query( $args ); ?>



<main class="main">

	<div class="breadcrumbs">
		<?php get_template_part('breadcrumbs') ?>
	</div>
	<div class="archive">
		<div class="archive__container container">
			<h1 class="archive__title title"><?= $current_cat_name; ?></h1>
			<button class="archive__aside-open">Каталог <span class="archive__burger"><span></span></span></button>
			<div class="archive__flex">
				<?php get_template_part('block/aside') ?>
				<section class="archive__section section-archive">

					<div class="section-archive__top">
						<div class="section-archive__title"><?= get_field('bu-title', 'options'); ?>
						</div>
						<div class="section-archive__subtitle"><?= get_field('bu-subtitle', 'options'); ?>
						</div>
					</div>

					<div class="toggle-archive">
						<div class="toggle-archive__top">
							<button class="toggle-archive__open">Подать объявление</button>
							<button class="toggle-archive__close"><span class="cross"></span><span>Свернуть форму</span></button>
						</div>
						<div class="toggle-archive__bot">
							<?php echo do_shortcode('[contact-form-7 id="291" title="Б/У техника"]'); ?>
						</div>
					</div>

					<div class="section-archive__bot"><?= get_field('bu-text', 'options'); ?></div>

					<div class="section-archive__grid">
						<? while ( $query->have_posts() ) {
							$query->the_post(); ?>

						<div class="section-archive__column">
							<a href="<?= get_permalink(); ?>" class="product-item">
								<div class="product-item__image">
									<img
										src="<?= wp_get_attachment_image_url(get_field('product-images')[0]['product-image'], 'large') ?>"
										alt="<? the_title() ?>">
									<div class="product-item__btn">
										Подробнее
										<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.5 1.66987L19 6L11.5 10.3301L11.5 1.66987Z" stroke="black" />
											<rect y="5.125" width="11.375" height="1" fill="black" />
										</svg>
									</div>
								</div>
								<h2 class="product-item__title">
									<? the_title() ?>
								</h2>
								<div class="product-item__subtitle"><?= get_field('product-preview-title'); ?></div>
							</a>
						</div>

						<? } wp_reset_query( ); ?>
					</div>


					<div class="pagination">
						<?php 
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => __('<<span>&nbsp;Предыдущая</span>'),
            'next_text'    => __('<span>Cледующая&nbsp;</span>>'),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
					</div>


				</section>
			</div>
		</div>
	</div>
</main>




<? get_filename(); ?>
<?php get_footer(); ?>