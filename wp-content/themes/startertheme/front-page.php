<?php
/**
 * The front page template file
 *
 * Note that <div id="content" class="site-content"> is located here instead of opening 
 * it in header.php and closing in footer.php. This is to allow for CSS-Grid. 
 *
 * @package startertheme
 */

get_header();

?>

<div id="content" class="site-content"> 
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :
          ?>
				<header>
					<h2 class="section-title sr-only"><?php _e( 'Articles', 'startertheme' ); ?></h2>
				</header>
            <div class="container"><?php // change to container-fluid to allow articles to fill the space instead of centering ?>
                
                <div class="row">
                   
                    <div class="col-xl-7 col-xxl-6" id="content-area__posts">
                       <?php
                        $startertheme_description = get_bloginfo( 'description', 'display' );
                        if ( $startertheme_description) :
                    ?>
                    <p class="site-description"><?php echo $startertheme_description; /* WPCS: xss ok. */ ?></p>
                <?php endif; 
                        
                        
                        /*
                        <h2 class="section-title"><?php _e( 'Detroit: The Region Leading the World in Mobility', 'startertheme' ); ?></h2>
                        
                        <?php */
                                        /* Start the Loop */
                       while ( have_posts() ) :
                            the_post();

                         
                            get_template_part( 'template-parts/content', get_post_type() );

                        endwhile;

                       // 
                        $default_posts_per_page = get_option( 'posts_per_page' );
                       $short_c  = '[ajax_load_more post_type="post" posts_per_page="'.$default_posts_per_page.'" offset="'.$default_posts_per_page.'" ]';



                        echo do_shortcode($short_c);
                    
                        
                        ?>
                    </div>
                </div>
            
            </div>
            <?php
			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->

<?php
//get_sidebar();
get_footer();