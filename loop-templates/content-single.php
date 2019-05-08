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

		<?php the_title( '<h2 class="entry-title pl-1 pr-1">', '</h2>' ); ?>

		<div class="entry-meta text-muted pl-1 pr-1">

			<?php myportfolio_posted_on(); ?>

		</div> <!-- entry-meta -->

	</header> <!-- entry-header -->

	<div class="entry-content px-1 pt-1 pb-1">

		<?php the_content(); ?>

	</div> <!-- entry-content -->

	<footer class="entry-footer">

		<?php myportfolio_entry_footer(); ?>

	</footer> <!-- entry-footer -->

</article> <!-- post-## -->