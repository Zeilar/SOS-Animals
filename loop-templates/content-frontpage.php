<?php
/**
 * Partial template for content in front-page.php
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php the_content(); ?>

	</div> <!-- entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'sosa' ), '<span class="edit-link">', '</span>' ); ?>

	</footer> <!-- entry-footer -->

</article> <!-- #post-{ID} -->
