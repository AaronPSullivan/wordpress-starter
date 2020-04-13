<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package startertheme
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'startertheme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
            
            
            <div class="container-fluid" id="search-posts-container">
                <div class="row">
                    <?php
                            /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            echo '<div class="col-12 col-lg-6 align-self-center">';
                            get_template_part( 'template-parts/content', '' );
                            echo '</div>';

                        endwhile;
                    
                    
                    
                    
                    ?>
                
                
                </div>
            </div>
			<?php
            
            
            
            
			

			the_posts_navigation();
           /* $default_posts_per_page = get_option( 'posts_per_page' );
                       $short_c  = '[ajax_load_more post_type="post" posts_per_page="'.$default_posts_per_page.'" offset="'.$default_posts_per_page.'" ]';



                        echo do_shortcode($short_c);*/

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
