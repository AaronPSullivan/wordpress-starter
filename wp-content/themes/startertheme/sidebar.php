<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package startertheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	//return;
}
?>

<aside id="secondary" class="widget-area col  <?php
                             if ( is_single() ) echo '  order-lg-first'; //Why is this here again?
                             
                             
                             ?>">
    <div id="secondary__container">
        <header>
            <h2 class="aside-title"><a href="<?php echo get_post_type_archive_link('startertheme-news');?>"><?php _e( 'Widgets', 'startertheme' ); ?></a></h2>
        </header>
        
        <?php
        
            if (! is_front_page() )  dynamic_sidebar( 'sidebar-1' ); // Only show widgets if not on front-page
        ?>
    </div>
    
</aside><!-- #secondary -->
