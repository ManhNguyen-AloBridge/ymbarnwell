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
	<div class="header-page__bar container-lg">
		<div class="justify-content-end d-none d-lg-flex">
			<?= wp_nav_menu() ?>
			<ul class="hp-nav-bar p-0">
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
		</div>

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
	<div class="d-block d-lg-none header-page__menu hide">
		<div class="social">
			<ul class="social__content">
				<li class="social__item"><i class="fa-brands fa-twitter"></i></li>
				<li class="social__item"><i class="fa-brands fa-facebook-f"></i></li>
				<li class="social__item"><i class="fa-brands fa-youtube"></i></li>
			</ul>
		</div>
		<div class="menu-mobile">
			<?= wp_nav_menu() ?>
		</div>
	</div>
	<div class="blur d-none"></div>




</header><!-- #masthead -->