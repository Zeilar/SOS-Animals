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

<article <?php post_class('border mb-4'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title pl-1 pr-1">', '</h1>' ); ?>

		<div class="entry-meta text-muted pl-1 pr-1">

			<?php myportfolio_posted_on(); ?>

		</div> <!-- entry-meta -->

	</header> <!-- entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content pl-1 pr-1 pt-1">

        <?php the_excerpt(); ?>

	</div> <!-- entry-content -->

	<footer class="entry-footer">

		<?php myportfolio_entry_footer(); ?>

	</footer> <!-- entry-footer -->

</article> <!-- post-## -->