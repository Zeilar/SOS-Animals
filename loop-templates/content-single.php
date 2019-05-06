<?php
/**
 * Single post partial template.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class('border'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title pl-1 pr-1">', '</h1>' ); ?>

		<div class="entry-meta text-muted pl-1 pr-1">

			<?php myportfolio_posted_on(); ?>

		</div> <!-- entry-meta -->

	</header> <!-- entry-header -->

	<div class="entry-content pl-1 pr-1 pt-1">

		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'myportfolio' ),
					'after'  => '</div>',
				)
			);
		?>

	</div> <!-- entry-content -->

	<footer class="entry-footer">

		<?php myportfolio_entry_footer(); ?>

	</footer> <!-- entry-footer -->

</article> <!-- post-## -->
