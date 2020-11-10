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



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				startertheme_posted_on();
				startertheme_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php startertheme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'startertheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'startertheme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php startertheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
