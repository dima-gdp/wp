<?

define('THEME_URL', get_template_directory_uri());
define('THEME_PATH', get_stylesheet_directory());
define('SITE_URL', get_home_url());

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'menu');
function menu()
{
	register_nav_menus([
		'menu' => 'Меню в шапке',
	]);
}

function style_theme()
{
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css');
	wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('fancy', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
	wp_enqueue_style('alert-1', get_template_directory_uri() . '/assets/css/alertify.min.css');
	wp_enqueue_style('alert-2', get_template_directory_uri() . '/assets/css/default.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/styles.css', array(), '1');
}

function scripts_theme()
{
	wp_enqueue_script('jquery-1', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '2324', true);
	wp_enqueue_script('input-mask', get_template_directory_uri() . '/assets/js/jquery.inputmask.min.js', array(), '2324', true);
	wp_enqueue_script('yandex-map', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '2324', true);
	wp_enqueue_script('fancy', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '2324', true);
	wp_enqueue_script('polyfill', get_template_directory_uri() . '/assets/js/ofi.min.js', array(), '2324', true);
	wp_enqueue_script('tweenmax', get_template_directory_uri() . '/assets/js/TweenMax.min.js', array(), '2324', true);
	wp_enqueue_script('morph', get_template_directory_uri() . '/assets/js/morph.js', array(), '2324', true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '2324', true);
	wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '2324', true);
	wp_enqueue_script('alert', get_template_directory_uri() . '/assets/js/alertify.min.js', array(), '2324', true);
	wp_enqueue_script('hammer', get_template_directory_uri() . '/assets/js/hammer.min.js', array(), '2324', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '2325', true);
}

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

function get_filename() {
	$array = debug_backtrace();
	$file = basename( $array[0]['file'] );
	echo '<!-- ' . $file . ' -->' . "\n";
}

function build_sub_categories($sub_category_id, $current_category, $category_parent, $display)
{
    $sub_categories = get_categories([
			'hide_empty' => 1,
			'child_of' => 1,
			'parent' => $sub_category_id,
		]);
    if(!empty($sub_categories)) { ?>

<ul class="item-catalog__list <?php echo $display;?>">
	<? foreach ($sub_categories as $sub_category) :?>
	<? $sub_term_link = get_term_link($sub_category->term_id); ?>

	<li><a href="<?php echo $sub_term_link; ?>" <?php if($current_category->term_id == $sub_category->term_id){ ?>
			class="active" <?php }?>><?php echo $sub_category->name; ?></a>

		<?php /* build_sub_categories($sub_category->term_id, $current_category, $category_parent, $display); */ ?>
	</li>
	<?php endforeach; ?>
</ul>
<?
}
}

function build_sub_categories_aside($sub_category_id, $current_category, $category_parent, $display)
{
    $sub_categories = get_categories([
			'hide_empty' => 1,
			'child_of' => 1,
			'parent' => $sub_category_id,
		]);
		
		$currentCat = get_queried_object();
$current_cat_id = $currentCat->term_id;
$current_cat_parent = $currentCat->category_parent;

    if(!empty($sub_categories)) { ?>

<ul class="<? echo $display;?>">
	<? foreach ($sub_categories as $sub_category) :?>
	<? $sub_term_link = get_term_link($sub_category->term_id); ?>

	<li>
		<a href="<? echo $sub_term_link; ?>" <? if($current_category->term_id == $sub_category->term_id ||
			cat_is_ancestor_of( $sub_category->term_id, $current_cat_id )){ ?>
			class="active"
			<? }?>>
			<?php echo $sub_category->name; ?>
		</a>



		<? $sub3_categories = get_categories([
			'hide_empty' => 1,
			'child_of' => 1,
			'parent' => $sub_category->term_id,
		]);

		if(!empty($sub3_categories)) { ?>

		<ul>
			<? foreach ($sub3_categories as $cat3) {?>
			<li>
				<a href="<?= get_term_link($cat3->term_id); ?>" <? if($current_cat_id==$cat3->term_id){ ?>
					class="active"
					<? }?>
					>
					<?= $cat3->name; ?>
				</a>
			</li>
		</ul>

		<? } 
		}?>



	</li>

	<? endforeach; ?>
</ul>
<?
}
}



function load_process(){

$postid = $_POST["id"];
$post_id = $_POST["post-id"];
$corp = get_field('object-tech-corp', $post_id);

$result = '
<div class="process__container container remove-ajax">
	<h2 class="process__title">'.get_field('process-h', $post_id).'</h2>
	<div class="process__wrapper">
		<div class="process__slider">
			<div class="swiper-wrapper">';

				$args = array(
				'posts_per_page' => -1,
				'post_type' => 'process',
				'category__and' => array($postid, $corp),
				'meta_key' => 'process-sort',
				'orderby' => 'meta_value_num',
				'order' => 'DESC',
				);
				$query = new WP_Query( $args );
				$index_iteration = 0;
				$idx = 0;
				while ( $query->have_posts() ) {
				$query->the_post();
				$result .= '
				<div class="swiper-slide month">
					<div class="month__wrapper">
						<div class="month__slider">
							<div class="swiper-wrapper">';

								if( have_rows('process-slider') ):
								while ( have_rows('process-slider') ) : the_row();

								$result .= '
								<div class="swiper-slide month-slide">
									<a href="'.wp_get_attachment_image_url(get_sub_field('process-slider-img'), 'full').'"
										data-fancybox="month-'.$idx.'" class="month-slide__item">
										<div class="month-slide__img">
											<img data-src="'.wp_get_attachment_image_url(get_sub_field('process-slider-img'), 'large').'"
												class="swiper-lazy">
										</div>
										<div class="month-slide__text">'.get_sub_field('process-slider-text').'</div>
									</a>
								</div>';

								endwhile;
								endif;



								$result .= '
							</div>
						</div>
					</div>

					<button class="month__btn month--prev"><svg width="9" height="15" viewBox="0 0 9 15" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M9 7.07107L1.92893 0L0.514719 1.41421L7.58579 8.48528L9 7.07107Z" fill="white" />
							<path d="M7.58582 5.65685L0.514748 12.7279L1.92896 14.1421L9 7.07107L7.58582 5.65685Z" fill="white" />
						</svg>
					</button>
					<button class="month__btn month--next"><svg width="9" height="15" viewBox="0 0 9 15" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M9 7.07107L1.92893 0L0.514719 1.41421L7.58579 8.48528L9 7.07107Z" fill="white" />
							<path d="M7.58582 5.65685L0.514748 12.7279L1.92896 14.1421L9 7.07107L7.58582 5.65685Z" fill="white" />
						</svg>
					</button>

				</div>';

				$idx++; }

				wp_reset_query( );


				$result .= '
			</div>
		</div>
	</div>';

	$initialYear = $postid;
	$nextYear = get_field('year-next', 'category_'.$initialYear);
	$prevYear = get_field('year-prev', 'category_'.$initialYear);
	$prevHidden = $prevYear ? '' : 'hidden';
	$nextHidden = $nextYear ? '' : 'hidden';

	$result .= '<div class="process-links">
		<a href="#" class="process-links__item prev '.$prevHidden.'" data-year="'.$prevYear.'">
			<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M5.65685 0L6.36396 0.707107L0.707107 6.36396L0 5.65685L5.65685 0Z" fill="#9E8C73" />
				<path d="M6.36401 10.6066L5.6569 11.3137L0 5.65685L0.707154 4.94971L6.36401 10.6066Z" fill="#9E8C73" />
			</svg>
			<span>Смотреть</span>
			<p>'.get_field('year-cur', 'category_'.$prevYear).'</p>
			<span>год</span>
		</a>
		<div class="process-links__currnet">'.get_field('year-cur', 'category_'.$initialYear).' год</div>
		<a href="#" class="process-links__item next '.$nextHidden.'" data-year="'.$nextYear.'"><span>Смотреть</span>
			<p>'.get_field('year-cur', 'category_'.$nextYear).'</p><span>год</span>
			<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0.706427 0L-0.000679493 0.707107L5.65617 6.36396L6.36328 5.65685L0.706427 0Z" fill="#9E8C73" />
				<path d="M-0.000726223 10.6066L0.706381 11.3137L6.36328 5.65685L5.65613 4.94971L-0.000726223 10.6066Z"
					fill="#9E8C73" />
			</svg>
		</a>
	</div>
	<div class="process-pag">
		<div class="process-pag__slider">
			<div class="swiper-wrapper">';


				$args = array(
				'posts_per_page' => -1,
				'post_type' => 'process',
				'category__and' => array($postid, $corp),
				'meta_key' => 'process-sort',
				'orderby' => 'meta_value_num',
				'order' => 'DESC',
				);
				$query = new WP_Query( $args );
				$index_iteration = 0;
				while ( $query->have_posts() ) {
				$query->the_post();

				$result .= '<div class="swiper-slide">'.get_field('process-month').'</div>';

				} wp_reset_query( );

				$result .= '</div>
		</div>
		<button class="process-pag--prev"><svg width="9" height="15" viewBox="0 0 9 15" fill="none"
				xmlns="http://www.w3.org/2000/svg">
				<path d="M9 7.07107L1.92893 0L0.514719 1.41421L7.58579 8.48528L9 7.07107Z" fill="white" />
				<path d="M7.58582 5.65685L0.514748 12.7279L1.92896 14.1421L9 7.07107L7.58582 5.65685Z" fill="white" />
			</svg>
		</button>
		<button class="process-pag--next"><svg width="9" height="15" viewBox="0 0 9 15" fill="none"
				xmlns="http://www.w3.org/2000/svg">
				<path d="M9 7.07107L1.92893 0L0.514719 1.41421L7.58579 8.48528L9 7.07107Z" fill="white" />
				<path d="M7.58582 5.65685L0.514748 12.7279L1.92896 14.1421L9 7.07107L7.58582 5.65685Z" fill="white" />
			</svg>
		</button>
	</div>
</div>';



header( 'Content-type: application/json' );
die ( json_encode($result, JSON_UNESCAPED_UNICODE ) );
//die();
}


add_action('wp_ajax_load_process', 'load_process');
add_action('wp_ajax_nopriv_load_process', 'load_process');




function my_request( $request ) {
    $dummy_query = new WP_Query();
    $dummy_query->parse_query( $request );

    if ( $dummy_query->is_archive() ) {
        $request['posts_per_page'] = 1;
    }

    return $request;
}
add_filter( 'request', 'my_request' );


?>