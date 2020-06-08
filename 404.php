<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
		<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );
			?>

			<div class="inside-article">

				<?php
				/**
				 * generate_before_content hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_featured_page_header_inside_single - 10
				 */
				do_action( 'generate_before_content' );
				?>

				<header class="entry-header">
					<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- HTML is allowed in filter here. ?>
					<h1 class="entry-title" itemprop="headline"><?php echo apply_filters( 'generate_404_title', __( 'Oops! That page can&rsquo;t be found.', 'generatepress' ) ); ?></h1>
				</header>

				<?php
				/**
				 * generate_after_entry_header hook.
				 *
				 * @since 0.1
				 *
				 * @hooked generate_post_image - 10
				 */
				do_action( 'generate_after_entry_header' );
				?>

				<div class="entry-content" itemprop="text">
					<?php
					printf(
						'<p>%s</p>',
						apply_filters( 'generate_404_text', __( 'It looks like nothing was found at this location. Maybe try searching?', 'generatepress' ) ) // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- HTML is allowed in filter here.
					);

					get_search_form();
					?>
				</div>

				<?php
				/**
				 * generate_after_content hook.
				 *
				 * @since 0.1
				 */
				do_action( 'generate_after_content' );
				?>

			</div>

			<?php
			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
		</main>
	</div>

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
