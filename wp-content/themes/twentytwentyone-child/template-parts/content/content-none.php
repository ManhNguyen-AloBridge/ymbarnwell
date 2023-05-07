<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div class="search-page">
	<div class="container-lg">
		<div class="search__main">
			<div class="search__content">
				<header class="page-header alignwide">
					<?php if (is_search()) : ?>

						<h1 class="page-title">
							<?php
							printf(
								/* translators: %s: Search term. */
								esc_html__('Results for "%s"', 'twentytwentyone'),
								'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
							);
							?>
						</h1>

					<?php else : ?>

						<h1 class="page-title"><?php esc_html_e('Nothing here', 'twentytwentyone'); ?></h1>

					<?php endif; ?>
				</header><!-- .page-header -->

				<div class="page-content">

					<?php if (is_home() && current_user_can('publish_posts')) : ?>

						<?php
						printf(
							'<p>' . wp_kses(
								/* translators: %s: Link to WP admin new post page. */
								__('Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone'),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							) . '</p>',
							esc_url(admin_url('post-new.php'))
						);
						?>

					<?php elseif (is_search()) : ?>

						<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentytwentyone'); ?></p>
						<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
							<label>
								<input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder', 'textdomain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
							</label>
							<button type="submit" class="search-submit"><?php echo esc_html_x('Search', 'submit button', 'textdomain'); ?></button>
						</form>

					<?php else : ?>

						<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone'); ?></p>
						<?php get_search_form(); ?>

					<?php endif; ?>
				</div><!-- .page-content -->
			</div>
			<div class="side-bar">
				<?= get_template_part('components/sidebar') ?>
			</div>

		</div>
	</div>
</div>