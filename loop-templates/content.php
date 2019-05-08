<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package myportfolio
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

				<?php myportfolio_posted_on(); ?>

			</div> <!-- entry-meta -->

		<?php endif; ?>

	</header> <!-- entry-header -->

	<img class="img-fluid dog-image mx-auto mb-3 mt-3" src="<?php the_field('dog_image'); ?>" alt="<?php _e('Dog image', 'myportfolio'); ?>">

	<div class="entry-content">

		<?php the_excerpt(); ?>

		<?php

			wp_link_pages(
				[
					'before' => '<div class="page-links">' . __( 'Pages:', 'myportfolio' ),
					'after'  => '</div>',
				]
			);

		?>

	</div> <!-- entry-content -->

	<footer class="entry-footer">

		<?php myportfolio_entry_footer(); ?>

	</footer> <!-- entry-footer -->

</article> <!-- post-## -->