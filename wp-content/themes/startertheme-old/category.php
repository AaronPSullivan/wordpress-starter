<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package startertheme
 */
$category = get_queried_object();
$cat_id = get_queried_object_id();
$cat = get_category( get_query_var( 'cat' ) );
$category_name = $category->slug;



get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
         <div class="container-fluid main-container-fluid clearfix">
           <div class="header-thumb-container ">

                <div class="row align-items-center">
                   
                    <div class="col post-header-container">

                        <header class="entry-header">
                            <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="archive-description">', '</div>' );
                            ?>
                        </header><!-- .entry-header -->
                    
                    </div>
               </div>


           </div>
        </div>
            <div class="container post-content-container-wrapper clearfix "><div class="row"><div class="col post-content-col" id="content-area__posts">
                   
                        
                
<div class="container post-content-container " ><div class="row align-items-center">
            
			<?php
    
           
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
            $default_posts_per_page = get_option( 'posts_per_page' );
            $short_c  = '[ajax_load_more post_type="post" posts_per_page="'.$default_posts_per_page.'" category="'.$category_name.'" offset="'.$default_posts_per_page.'" ]';

    
    
            echo do_shortcode($short_c);

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
    
    

    
		?>
</div></div></div>
                
                
                <?php 
                
                 // if (have_posts() ) get_sidebar(); 
                
                ?>
                
                
                
                </div></div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
//get_sidebar();
get_footer();
