<?php
/**
 * The template for displaying the author pages.
 *
 * @package myportfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'myportfolio_container_type' );
?>

<div class="wrapper" id="author-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<header class="page-header border author-header mb-2">

					<?php
						if ( isset( $_GET['author_name'] ) ) {
							$curauth = get_user_by( 'slug', $author_name );
						} else {
							$curauth = get_userdata( intval( $author ) );
						}
					?>

					<h2 class="pl-1"><?php echo $curauth->nickname ?></h2>

					<?php if ( ! empty( $curauth->ID ) ) : ?>
						<?php echo get_avatar($curauth->ID, $size, $default, __('Avatar', 'myportfolio'), ['class' => 'pl-1 pb-1']); ?>
					<?php endif; ?>

					<?php if ( ! empty( $curauth->user_url ) || ! empty( $curauth->user_description ) ) : ?>
						<dl>
							<?php if ( ! empty( $curauth->user_url ) ) : ?>
								<dt><?php esc_html_e( 'Website', 'myportfolio' ); ?></dt>
								<dd>
									<a href="<?php echo esc_url( $curauth->user_url ); ?>"><?php echo esc_html( $curauth->user_url ); ?></a>
								</dd>
							<?php endif; ?>

							<?php if ( ! empty( $curauth->user_description ) ) : ?>
								<dt><?php esc_html_e( 'Profile', 'myportfolio' ); ?></dt>
								<dd><?php esc_html_e( $curauth->user_description ); ?></dd>
							<?php endif; ?>
						</dl>
					<?php endif; ?>

				</header> <!-- page-header -->

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content-author-posts' ); ?>
						
					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			<?php myportfolio_pagination(); ?>

			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div> <!-- row -->

	</div> <!-- content -->

</div> <!-- author-wrapper -->

<?php get_footer(); ?>