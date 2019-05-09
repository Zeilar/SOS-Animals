<?php
/**
 * Search results partial template.
 *
 * @package sosa
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

				<?php sosa_posted_on(); ?>

			</div> <!-- entry-meta -->

			<?php echo get_the_post_thumbnail($post->ID, 'large', ['class' => 'pl-1 pt-1']); ?>

		<?php endif; ?>

	</header> <!-- entry-header -->

	<div class="entry-summary px-1 pt-1 pb-1">

		<?php the_excerpt(); ?>

	</div> <!-- entry-summary -->

	<?php if (sosa_entry_footer()) { ?>

	<footer class="entry-footer">

		<?php sosa_entry_footer(); ?>

	</footer> <!-- entry-footer -->

	<?php } ?>

</article> <!-- post-## -->
