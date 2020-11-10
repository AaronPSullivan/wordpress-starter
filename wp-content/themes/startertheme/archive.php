<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package startertheme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

            
            
            
         <div class="container-fluid main-container-fluid clearfix">
           <div class="header-thumb-container">

                <div class="row align-items-center">
                
                    <div class="col ">

                    <header class="entry-header">
                        <?php
                            $title_tag_start = '<h1 class="page-title">';
                            $title_tag_end = '</h1>';
                            
                        
                        
                            the_archive_title( $title_tag_start, $title_tag_end );
                            the_archive_description( '<div class="archive-description">', '</div>' );
                            ?>
                    </header><!-- .entry-header -->

                    </div>
               </div>


           </div>
        </div>
            <div class="container post-content-container-wrapper clearfix "><div class="row"><div class="col post-content-col" id="content-area__posts">
                
                
                
                
<div class="container post-content-container " ><div class="row">
            
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			//the_posts_navigation();
             $default_posts_per_page = get_option( 'posts_per_page' );
    
               $short_c  = '[ajax_load_more post_type="post, mec-events, driven-podcasts, driven-news" posts_per_page="'.$default_posts_per_page.'" offset="'.$default_posts_per_page.'" ';

               //


                if (is_tax()) {
                    $q = get_queried_object();                   
                    //print_r ($tax);
                    $slug = $q->slug;
                    $taxonomy = $q->taxonomy;
                    $short_c .= ' taxonomy="'.$taxonomy.'" taxonomy_operator="IN" taxonomy_terms="'.$slug.'" ';

                } 
                if (is_tag()) {

                     $slug = get_queried_object();
                    $slug = $slug->slug;
                    $short_c .= ' tag="'.$slug.'" ';


                }



                $short_c .= ']';



                echo do_shortcode($short_c);
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
    
    

    
		?>
</div></div></div>
                
                
                <?php 
                
                  //get_sidebar();
                   // get_sidebar('tertiary');
                
                ?>
                
                
                
                </div></div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
//get_sidebar();
get_footer();