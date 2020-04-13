<?php
/**
 * Plugin Name: Simple Category, Archive and Tag Titles
 * Author: ExtraCreditProjects
 * Description: Removes "Category: ", "Archive: " and "Tag: " from page titles
 * Version: 1.0
 */

/**
 * Simplify category and archive page titles
 */
function ecp_prefix_category_title( $title ) {
    if ( is_category() ) {    
            $title = single_cat_title( '', false );    
        } elseif ( is_tag() ) {    
            $title = single_tag_title( '', false );    
        } elseif ( is_author() ) {    
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
        } elseif ( is_tax() ) { //for custom post types
            $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title( '', false );
        }
    return $title;   
}
add_filter( 'get_the_archive_title', 'ecp_prefix_category_title' );

