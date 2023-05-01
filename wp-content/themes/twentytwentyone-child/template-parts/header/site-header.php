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
			<li class="hp-nav-bar__item"><a href="#">HOME</a></li>
			<li class="hp-nav-bar__item"><a href="#">ENTERTAINMENT</a></li>
			<li class="hp-nav-bar__item"><a href="#">ANIMALS</a></li>
			<li class="hp-nav-bar__item"><a href="#">FUNNY</a></li>
			<li class="hp-nav-bar__item"><a href="#">ABOUT US</a></li>
			<li class="hp-nav-bar__item"><i class="fa-brands fa-twitter"></i></li>
			<li class="hp-nav-bar__item"><i class="fa-brands fa-facebook-f"></i></li>
			<li class="hp-nav-bar__item"><i class="fa-brands fa-youtube"></i></li>
			<li class="hp-nav-bar__item btn-search"><i class="fa-solid fa-magnifying-glass"></i></li>
			<div class="header-page__box-search d-none">
				<div class="box-search">
					<i class="fa-sharp fa-solid fa-triangle"></i>
					<input class="input-search" type="text" placeholder="Search ...">
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
				<i class="fa-sharp fa-solid fa-triangle"></i>
				<input class="input-search" type="text" placeholder="Search ...">
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
				<li class="menu__item active fs-16 fw-700 lh-22">HOME</li>
				<li class="menu__item fs-16 fw-700 lh-22">ENTERTAINMENT</li>
				<li class="menu__item fs-16 fw-700 lh-22">ANIMALS</li>
				<li class="menu__item fs-16 fw-700 lh-22">FUNNY</li>
				<li class="menu__item fs-16 fw-700 lh-22">ABOUT US</li>
			</ul>
		</div>
	</div>
	<div class="blur d-none"></div>
	<!-- </div> -->




</header><!-- #masthead -->