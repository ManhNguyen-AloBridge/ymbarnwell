<?php

/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= (true === get_theme_mod('display_title_and_tagline', true)) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu('primary') ? ' has-menu' : '';
?>

<header id="masthead" class="header-page">

	<!-- <div class="header container-lg"> -->
	<div class="header-page__bar container-lg">
		<ul class="hp-nav-bar d-none d-lg-flex">
			<!-- <li class="nav-bar__item"><a href="<?= get_site_url() ?>/?page_id=244">Activity</a></li> -->
			<li class="hp-nav-bar__item"><a href="<?= get_site_url() ?>">HOME</a></li>
			<li class="hp-nav-bar__item"><a href="<?= get_site_url() ?>/?page_id=<?= get_option('data_config')['ENTERTAINMENT_PAGE_ID'] ?>">ENTERTAINMENT</a></li>
			<li class="hp-nav-bar__item"><a href="<?= get_site_url() ?>/?page_id=<?= get_option('data_config')['ANIMAL_PAGE_ID'] ?>">ANIMALS</a></li>
			<li class="hp-nav-bar__item"><a href="<?= get_site_url() ?>/?page_id=<?= get_option('data_config')['FUNNY_PAGE_ID'] ?>">FUNNY</a></li>
			<li class="hp-nav-bar__item"><a href="<?= get_site_url() ?>/?page_id=<?= get_option('data_config')['ABOUT_US_PAGE_ID'] ?>">ABOUT US</a></li>
			<li class="hp-nav-bar__item"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
			<li class="hp-nav-bar__item"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
			<li class="hp-nav-bar__item"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
			<li class="hp-nav-bar__item btn-search"><i class="fa-solid fa-magnifying-glass"></i></li>
			<div class="header-page__box-search d-none">
				<div class="box-search">
					<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
						<label>
							<input type="search" class="input-search" placeholder="<?php echo esc_attr_x('Search …', 'placeholder', 'textdomain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
						</label>
					</form>
				</div>
			</div>
		</ul>
		<div class="hp-nav-bar-mobile d-flex d-lg-none">
			<div id="btn-toggle-menu-mobile" class="d-flex align-items-center">
				<i class="fa-solid fa-bars"></i>
			</div>
			<div class="btn-search d-flex align-items-center">
				<i class="fa-solid fa-magnifying-glass"></i>
			</div>
		</div>
		<div class="header-page__box-search d-none position-fixed is-mobile">
			<div class="box-search">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
					<label>
						<input type="search" class="input-search" placeholder="<?php echo esc_attr_x('Search …', 'placeholder', 'textdomain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
					</label>
				</form>
			</div>
		</div>
	</div>
	<div class="header-page__menu hide">
		<div class="social">
			<ul class="social__content">
				<li class="social__item"><i class="fa-brands fa-twitter"></i></li>
				<li class="social__item"><i class="fa-brands fa-facebook-f"></i></li>
				<li class="social__item"><i class="fa-brands fa-youtube"></i></li>
			</ul>
		</div>
		<div class="menu">
			<ul class="menu__content">
				<li class="menu__item fs-16 fw-700 lh-22"><a href="<?= get_site_url() ?>">HOME</a></li>
				<li class="menu__item fs-16 fw-700 lh-22"><a href="<?= get_site_url() ?>/?page_id=<?= get_option('data_config')['ENTERTAINMENT_PAGE_ID'] ?>">ENTERTAINMENT</a></li>
				<li class="menu__item fs-16 fw-700 lh-22"><a href="<?= get_site_url() ?>/?page_id=<?= get_option('data_config')['ANIMAL_PAGE_ID'] ?>">ANIMALS</a></li>
				<li class="menu__item fs-16 fw-700 lh-22"><a href="<?= get_site_url() ?>/?page_id=<?= get_option('data_config')['FUNNY_PAGE_ID'] ?>">FUNNY</a></li>
				<li class="menu__item fs-16 fw-700 lh-22"><a href="<?= get_site_url() ?>/?page_id=<?= get_option('data_config')['ABOUT_US_PAGE_ID'] ?>">ABOUT US</a></li>
			</ul>
		</div>
	</div>
	<div class="blur d-none"></div>
	<!-- </div> -->




</header><!-- #masthead -->