<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package sosa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'sosa_posted_on' ) ) {
	function sosa_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		/*if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s"> (%4$s) </time>';
		}*/
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		$posted_on   = apply_filters(
			'sosa_posted_on', sprintf(
				'<span class="posted-on">%1$s <a href="%2$s" rel="bookmark">%3$s</a></span>',
				esc_html_x( 'Posted on', 'post date', 'sosa' ),
				esc_url( get_permalink() ),
				apply_filters( 'sosa_posted_on_time', $time_string )
			)
		);
		$byline      = apply_filters(
			'sosa_posted_by', sprintf(
				'<span class="byline"> %1$s<span class="author vcard"><a class="url fn n" href="%2$s"> %3$s</a></span></span>',
				$posted_on ? esc_html_x( 'by', 'post author', 'sosa' ) : esc_html_x( 'Posted by', 'post author', 'sosa' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_html( get_the_author() )
			)
		);
		echo $posted_on . $byline; // WPCS: XSS OK.
	}
}


/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
if ( ! function_exists( 'sosa_entry_footer' ) ) {
	function sosa_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'sosa' ) );
			if ( $categories_list && sosa_categorized_blog() ) {
				/* translators: %s: Categories of current post */
				printf( '<p class="cat-links pl-1 pr-1 mb-0 text-muted">' . esc_html__( 'Posted in: %s', 'sosa' ) . '</p>', $categories_list ); // WPCS: XSS OK.
			}
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'sosa' ) );
			if ( $tags_list ) {
				/* translators: %s: Tags of current post */
				printf( '<p class="tags-links pl-1 pr-1 mb-0 text-muted">' . esc_html__( 'Tagged: %s', 'sosa' ) . '</p>', $tags_list ); // WPCS: XSS OK.
			}
		}
		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			/*echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'sosa' ), esc_html__( '1 Comment', 'sosa' ), esc_html__( '% Comments', 'sosa' ) );
			echo '</span>';*/
		}
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'sosa' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
}


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
if ( ! function_exists( 'sosa_categorized_blog' ) ) {
	function sosa_categorized_blog() {
		if ( false === ( $all_the_cool_cats = get_transient( 'sosa_categories' ) ) ) {
			// Create an array of all the categories that are attached to posts.
			$all_the_cool_cats = get_categories( array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			) );
			// Count the number of categories that are attached to the posts.
			$all_the_cool_cats = count( $all_the_cool_cats );
			set_transient( 'sosa_categories', $all_the_cool_cats );
		}
		if ( $all_the_cool_cats > 1 ) {
			// This blog has more than 1 category so components_categorized_blog should return true.
			return true;
		} else {
			// This blog has only 1 category so components_categorized_blog should return false.
			return false;
		}
	}
}


/**
 * Flush out the transients used in sosa_categorized_blog.
 */
add_action( 'edit_category', 'sosa_category_transient_flusher' );
add_action( 'save_post',     'sosa_category_transient_flusher' );

if ( ! function_exists( 'sosa_category_transient_flusher' ) ) {
	function sosa_category_transient_flusher() {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		// Like, beat it. Dig?
		delete_transient( 'sosa_categories' );
	}
}
