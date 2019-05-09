<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class('border mt-4'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
			the_title(
			sprintf( '<h2 class="entry-title pl-1 pr-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
			'</a></h2>'
		);
		?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta pl-1 pr-1">

				<?php sosa_posted_on(); ?>

			</div> <!-- entry-meta -->

		<?php endif; ?>

	</header> <!-- entry-header -->

	<?php if (get_field('dog_image')) { ?> <!-- load dog image if possible -->

		<img class="img-fluid dog-image mx-auto mb-3 mt-3 pl-1" src="<?php the_field('dog_image'); ?>" alt="<?php _e('Dog image', 'sosa'); ?>">

	<?php } else { ?>	

		<?php echo get_the_post_thumbnail($post->ID, 'large', ['class' => 'pl-1 pt-1']); ?> <!-- otherwise load thumbnail -->

	<?php } ?>

	<div class="entry-content pb-1">

		<?php the_excerpt(); ?>

		<?php

			wp_link_pages(
				[
					'before' => '<div class="page-links">' . __( 'Pages:', 'sosa' ),
					'after'  => '</div>',
				]
			);

		?>

	</div> <!-- entry-content -->

	<footer class="entry-footer">

		<?php sosa_entry_footer(); ?>

	</footer> <!-- entry-footer -->

</article> <!-- post-## -->