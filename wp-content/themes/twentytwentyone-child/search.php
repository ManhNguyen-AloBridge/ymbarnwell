<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Lấy số trang hiện tại
$current_page = max(1, get_query_var('paged'));
$total_pages = $wp_query->max_num_pages;
$big = 999999999; // need an unlikely integer
if (have_posts()) {
?>
	<div class="search-page">
		<div class="container-lg">
			<div class="search__main">
				<div class="search__content">
					<header class="page-header alignwide">
						<h1 class="page-title">
							<?php
							printf(
								/* translators: %s: Search term. */
								esc_html__('Results for "%s"', 'twentytwentyone'),
								'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
							);
							?>
						</h1>
					</header><!-- .page-header -->
					<div class="search-result-count">
						<?php
						printf(
							esc_html(
								/* translators: %d: The number of search results. */
								_n(
									'We found %d result for your search.',
									'We found %d results for your search.',
									(int) $wp_query->found_posts,
									'twentytwentyone'
								)
							),
							(int) $wp_query->found_posts
						);
						?>
					</div><!-- .search-result-count -->
					<?php
					// Start the Loop.
					while (have_posts()) {
						the_post();
					?>
						<div class="search-content-item">
							<a class="link-image-to-detail" href="<?= get_the_permalink($post->id) ?>">
								<img class="search-content-item__image" src="<?= get_image_thumbnail_post($post) ?>" alt="">
							</a>
							<div class="search-content-item__info">
								<a class="link-to-detail" href="<?= get_the_permalink($post->id) ?>">
									<h3 class="search-content-item__title fs-16 fw-700 lh-22"><?= $post->post_title ?></h3>
								</a>
								<p class="search-content-item__description fs-13 lh-18">
									<?= $post->post_excerpt ?>
								</p>
							</div>
						</div>
					<?php
					} ?>

				</div>
				<div class="side-bar">
					<?= get_template_part('components/sidebar') ?>
				</div>

				<div class="paginate d-flex d-md-none">
					<button class="paginate__btn prev"><i class="fa-solid fa-chevron-left"></i></button>
					<div class="paginate__info fs-18 fw-700 lh-24"><?= "Page $current_page of $total_pages" ?></div>
					<button class="paginate__btn next"><i class="fa-solid fa-chevron-right"></i></button>
				</div>
			</div>

			<div class="paginate d-none d-md-flex">
				<button class="paginate__btn prev"><i class="fa-solid fa-chevron-left"></i></button>
				<div class="paginate__info fs-18 fw-700 lh-24"><?= "Page $current_page of $total_pages" ?></div>
				<button class="paginate__btn next"><i class="fa-solid fa-chevron-right"></i></button>
			</div>
			<div class="d-none">
				<?=
				paginate_links(array(
					'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
					'format'    => 'page/%#%',
					'current'   => $current_page,
					'total'     => $total_pages,
					'prev_text' => '<button class="paginate__btn" id="paginate-prev"><i class="fa-solid fa-chevron-left"></i></button>',
					'next_text' => '<button class="paginate__btn" id="paginate-next"><i class="fa-solid fa-chevron-right"></i></button>',
					'mid_size' => 3,
					'type' => 'list'
				));
				?>
			</div>
		</div>
	</div>
<?php
} else {
	get_template_part('template-parts/content/content-none');
}
?>

<?php
get_footer();
