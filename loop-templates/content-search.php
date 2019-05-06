<?php
/**
 * Search results partial template.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class('border mb-4'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
			the_title(
				sprintf( '<h2 class="entry-title pl-1 pr-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
		?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta pl-1 pr-1">

				<?php myportfolio_posted_on(); ?>

			</div> <!-- entry-meta -->

		<?php endif; ?>

	</header> <!-- entry-header -->

	<div class="entry-summary pl-1 pb-1">

		<?php the_excerpt(); ?>

	</div> <!-- entry-summary -->

	<footer class="entry-footer">

		<?php myportfolio_entry_footer(); ?>

	</footer> <!-- entry-footer -->

</article> <!-- post-## -->
