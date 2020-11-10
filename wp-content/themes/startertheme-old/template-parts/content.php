<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package startertheme
 */

/* get read_more text */

$read_more['txt'] = '<b>Read</b> More';
if (function_exists('get_field')) {
    $read_more['txt'] = get_field('excerpt-btn__text', get_the_ID());
    //$read_more['icon'] = '<i class="fas fa-long-arrow-alt-right"></i>';
    switch ($read_more['txt']) {
        case 'more':
            $read_more['txt'] = '<b>Read</b> More';
            break;
        case 'article':
            $read_more['txt'] = '<b>Read</b> Article';
            break;
        case 'story':
            $read_more['txt'] = '<b>Read</b> Story';
            break;
        case 'watch':
            $read_more['txt'] = '<b>Watch</b> Spotlight';
            //$read_more['icon'] = '<i class="fas fa-play-circle"></i>';
            break;
        case 'podcast':
            $read_more['txt'] = '<b>Listen</b> to this Podcast';

            //$read_more['icon'] = '<i class="fas fa-podcast"></i>';
            break;

        case 'other':
            $read_more['txt'] = get_field('excerpt-btn__other');
              break;
        default:
            // whatever should be default...
            $read_more['txt'] = '<b>Read</b> More';
    }
    
}


?>
<?php if (is_single()): ?>

<div class="clearfix"></div>

<?php endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class();//post_class('align-self-center'); ?>>

   <div class="container-fluid main-container-fluid">
       <div class="header-thumb-container<?php if (!has_post_thumbnail()) echo ' no-before-color'; ?>">
       
            <div class="row align-items-center">
                <?php if (has_post_thumbnail()): ?>
                        <div class="col post-thumbnail-container"> 
                             <?php 
                                if (is_single()) :
                                     startertheme_post_thumbnail(); 
                                else :


                                    startertheme_post_thumbnail('thumb-sq-lg'); 
                                endif;




                            ?>
                        </div>
                 <?php 
               
                
                
                endif;// (has_post_thumbnail()): ?>
            <div class="col post-header-container <?php
                        
                        if (!has_post_thumbnail() && !is_single() )        echo 'startertheme-wider-header';
                        ?>">
                
                <!--col-xl-8 col-lg-6 col-md-6 col-sm-6-->
               
                <header class="entry-header">
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                        the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                    endif;
                    
                    //if ( 'post' === get_post_type() ) :
                        ?>
                        <div class="entry-meta">
                            <?php
                                startertheme_posted_on();
                            //startertheme_posted_by();
                                if (is_singular('startertheme-news')) startertheme_sourced_by();;
                            
                            
                            ?>
                        </div><!-- .entry-meta -->
                    <?php// endif; ?>
                </header><!-- .entry-header -->
             
                <?php
                if (is_front_page()) : 
                
           
                ?>
                 <div class="clearfix startertheme-read-more-container">
                    <a href="<?php echo esc_url( get_permalink() );?>" class="startertheme-read-more"><?php 
                        
                        _e( $read_more['txt'], 'startertheme' ); //echo $read_more['icon']; 
                        ?>
                     </a>
                </div>

                <?php endif;
                
                ?>
                </div>
           </div>


       </div>
      
        
   <?php if ( is_single())://!is_front_page() && !is_archive() && !is_search()) : ?>
    <div class="post-content-container">
        <div class="row">
            <div class="col post-content-col">
                <div class="entry-content">
                    <?php
                    the_content( sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'startertheme' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ) );

                   
                    
                    /*wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'startertheme' ),
                        'after'  => '</div>',
                    ) );*/
                   
                    
                    
                     if (is_singular('startertheme-news') && $theUrl) :
                    
                    ?>
                    
                                 <div class="clearfix startertheme-read-more-container">

                                <a class="startertheme-news-link btn-lg btn btn-success startertheme-read-more" href="<?php echo $theUrl; ?>" <?php if ($theTargetBlank) echo 'target="_blank"'; ?>>

                                <?php 

                                    _e( $read_more['txt'], 'startertheme' ); echo $read_more['icon']; 
                                    ?>

                                     </a></div>


                    <?php
                    
                    
                    endif;// (is_singular('startertheme-news')) : ?>
                </div><!-- .entry-content -->
                
               
                  <footer class="entry-footer">
                    <?php startertheme_entry_footer(); ?>
                </footer><!-- .entry-footer -->
                
                <?php
                 
                   
                    
                
                
                   // the_post_navigation();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                     //   comments_template();
                    endif;

                
                
                ?>
                
             
            </div>
            <?php 
                if ( is_single() ) :
                    get_sidebar();
                endif;
            ?>
       </div>
        
        
   </div>
     <?php endif; //if ( is_single()): ?>
                
                
	</div> <!--<div class="container">-->
</article><!-- #post-<?php the_ID(); ?> -->
