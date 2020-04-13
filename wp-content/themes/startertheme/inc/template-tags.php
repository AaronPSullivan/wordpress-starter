<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package startertheme
 */

if ( ! function_exists( 'startertheme_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function startertheme_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			//esc_html_x( 'Posted on %s', 'post date', 'startertheme' ),
            esc_html_x( '%s', 'post date', 'startertheme' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

    
if ( ! function_exists( 'startertheme_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function startertheme_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'startertheme' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'startertheme_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function startertheme_entry_footer($do_single = '') {
		// Hide category and tag text for pages.
        
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'startertheme' ) );
           // $categories_list = get_the_category_list( esc_html__( ' ', 'startertheme' ) );
			if ( $categories_list && $do_single != 'tags' ) {
				/* translators: 1: list of categories. */
//				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'startertheme' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				printf( '<span class="cat-links">' . esc_html__( '%1$s', 'startertheme' ) . '</span>', $categories_list ); // WPCS: XSS OK.

            }
            
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'startertheme' ) );
			if ( $tags_list && !is_front_page() && $do_single != 'categories') {
				/* translators: 1: list of tags. */
				//printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'startertheme' ) . '</span>', $tags_list ); // WPCS: XSS OK.
                printf( '<span class="tags-links">' . esc_html__( '%1$s', 'startertheme' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
            
            /* translators: used between list items, there is a space after the comma */
			/* 
            $communities_list = get_the_term_list(get_the_ID(), 'communities', '', esc_html_x( ', ', 'list item separator', 'startertheme' ) );
			if ( $communities_list && !is_front_page()  && $do_single != 'tags' && $do_single != 'categories') {
                printf( '<span class="communities-links">' . esc_html__( '%1$s', 'startertheme' ) . '</span>', $communities_list ); // WPCS: XSS OK.
			}*/
		}

		if ( !is_front_page() && ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'startertheme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'startertheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'startertheme_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function startertheme_post_thumbnail($size = '', $force_link = false) {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

        
        
        $meta = wp_get_attachment_metadata(get_post_thumbnail_id());
        //print_r(get_post_thumbnail_id());
        
        if ($force_link || !is_single()) : ?>
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
        <?php endif;
        
      
     
        
         $image_data = wp_get_attachment_image_src( get_post_thumbnail_id(), $size );
        $height=$image_data[2];
       // print_r ($height);
    //    print_r ($image_data);
        
        
        
        /* if ($size=='thumb-16x9-lg' && $height < 478) $size =  'thumb-16x9'; 
        if ($size=='thumb-sq-lg' ) {
            if ( $height < 690) $size =  'thumb-sq-400'; 
            if ( $height < 400) $size =  'thumb-sq'; 
        } */
        
        if ( !is_single()) : 
			the_post_thumbnail( $size, array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
        else: ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail($size); ?>
			</div><!-- .post-thumbnail -->
		<?php
		endif; // End is_singular().
        
        
        if ($force_link || !is_single()) : ?>
			</a>
		<?php
        endif;
	}
endif;




if ( ! function_exists( 'startertheme_print_svg' ) ) :
function startertheme_print_svg($file){
    $iconfile = new DOMDocument();
    $iconfile->load($file);
    echo $iconfile->saveHTML($iconfile->getElementsByTagName('svg')[0]);
}
endif;