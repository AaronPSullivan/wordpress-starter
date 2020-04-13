<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package startertheme
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'startertheme' ); ?></a>
<!--    <div class="site__container">-->
        <header id="masthead" class="site-header"><div class="container"><div class="row"><div class="col">
            
            <div id="header-grid-container">
                
                
                
                
                <div class="site-branding" id="site-branding">
                    <?php
                    the_custom_logo();

                    ?>


                    <?php if ( is_front_page() && is_home() ) :
                        ?>
                        <h1 class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                    else :
                        ?>
                        <p class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                    endif;
                    $startertheme_description = get_bloginfo( 'description', 'display' );
                    if ( $startertheme_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description sr-only"><?php echo $startertheme_description; /* WPCS: xss ok. */ ?></p>
                    <?php endif; ?>
                </div><!-- .site-branding -->
                <nav id="nav-button-container">
                    <button id="main-nav-button" class="menu-toggle btn" aria-controls="primary-menu" aria-expanded="false"><span  class="sr-only"><?php esc_html_e( 'Primary Menu', 'startertheme' ); ?></span><i class="fas fa-bars"></i><i class="fas fa-times"></i></button>
                </nav>
                <nav id="header-area-1">
                    <nav id="social-navigation" class="social-navigation main-navigation">

                        <?php




                        wp_nav_menu(
                            array(
                                'theme_location'  => 'menu-social',
                                'link_before'     => '<span class="screen-reader-text">',
                                'link_after'      => '</span>',
                                'container'       => 'div',
                                'container_id'    => 'social-menu-container',
                                'container_class' => 'social-menu-container menu-social-container',
                                'menu_id'         => 'social-menu',
                                'menu_class'      => 'social-menu',
                                'depth'           => 1
                            )
                        );



                        ?>
                    </nav><!-- #site-navigation -->
                    <nav id="site-navigation" class="main-navigation">
                        
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->
                    
                   
                </nav>
                
               
            </div>
            
            
            
        </div></div></div></header><!-- #masthead -->

        <?php if ( !is_front_page()) : ?>
                  <div id="content" class="site-content">
        <?php endif; ?>
