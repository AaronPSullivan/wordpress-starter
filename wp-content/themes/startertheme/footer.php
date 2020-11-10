<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package startertheme
 */

?>
<?php if ( !is_front_page()) : ?>
       
     </div><!-- #content -->
<?php endif; //if ( !is_front_page()) :  ?>
	

	<footer id="colophon" class="site-footer">
        <div class="container pt-4 pb-4">
            <div class="row ">
                <div class="col-12 col-lg-4 text-center text-sm-left pb-sm-4">
                    
                      <div class="site-info">
                            <a href="<?php   echo get_home_url();  ?>" id="footer-logo-link" rel="home"><img src="<?php echo get_template_directory_uri();?>/images/startertheme-logo-reversed.svg" class="footer-logo" alt="startertheme logo"></a>
                          
                          
                    </div><!-- .site-info -->
                
                </div>
                <div class="col-12 col-md-6 col-lg-4 pt-4">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                
                </div>
                <div class="col-12 col-md-6 col-lg-4 pt-4">
                 
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                
                </div>
            </div>
            <div class="row border-top pt-4 mt-5">
                <div class="col-12 col-sm-4 text-center text-sm-left">
                    <?php
                  
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'menu-footer-social',
                            'link_before'     => '<span class="screen-reader-text">',
                            'link_after'      => '</span>',
                            'container'       => 'div',
                            'container_id'    => 'menu-footer-social-container',
                            'container_class' => 'social-menu-container menu-social-container',
                            'menu_id'         => 'menu-footer-social',
                            'menu_class'      => 'social-menu',
                            'depth'           => 1
                        )
                    );
                    
                    
                    ?>
                </div>
                <div class="col-12 col-sm-8 text-center text-sm-right">
                    <?php
                    
                    echo '&copy; '.date("Y").' startertheme &nbsp;|&nbsp; ';  
                    
                    wp_nav_menu( array(
                        'theme_location' => 'menu-footer-2',
                        'menu_id'        => 'menu-footer-bottom',
                    ) );
                    ?>
                </div>
            </div>
        
        </div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

