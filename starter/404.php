<?php get_header(); ?>

<main class="main">
	<div class="breadcrumbs">
		<?php get_template_part('breadcrumbs'); ?>


	</div>
	<section class="error">
		<div class="error__container container">
			<h1 class="error__title">Добро пожаловать на «страницу 404» нашего сайта.</h1>
			<div class="error__text">
				<p>Простите, но у нас возникли проблемы с поиском страницы, которую Вы запрашиваете</p>

				<?	$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];		
                if ((isset($_SERVER['HTTP_REFERER'])) && ($url != $_SERVER['HTTP_REFERER'])) { ?>
				<p>Вы можете вернуться <a href="<?=$_SERVER['HTTP_REFERER'];?>">назад</a>, или перейти на <a
						href="<?php echo home_url(); ?>">главную страницу сайта</a>.
					<? } else { ?>
				<p>Вы можете перейти на <a href="<?php echo home_url(); ?>">главную страницу сайта</a>.
					<? }?>

				</p>
			</div>
			<a href="#" class="error__btn btn">На главную <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path d="M11.5 1.66987L19 6L11.5 10.3301L11.5 1.66987Z" stroke="black" />
					<rect y="5.125" width="11.375" height="1" fill="black" />
				</svg>
			</a>
		</div>
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
		</div>
	</section>
</main>

<?php get_footer(); ?>