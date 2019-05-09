<?php
/**
 * Single post partial template.
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<article <?php post_class('border mt-4'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<h2 class="entry-title pl-1 pr-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="entry-meta text-muted pl-1 pr-1">

			<?php sosa_posted_on(); ?>

		</div> <!-- entry-meta -->

	</header> <!-- entry-header -->

	<?php echo get_the_post_thumbnail($post->ID, 'large', ['class' => 'pl-1 pt-1']); ?>

	<div class="entry-content px-1 pt-1 pb-1">

        <?php the_excerpt(); ?>

	</div> <!-- entry-content -->

	<footer class="entry-footer">

		<?php sosa_entry_footer(); ?>

	</footer> <!-- entry-footer -->

</article> <!-- post-## -->