<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nova
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nova' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="reg-vat">
                        <span> <i class="fa fa-clock-o" aria-hidden="true"></i> MON - SAT : 6.00 AM TO 10.00 PM </span>
                        <span>SUN:CLOSED</span>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">


                <div class="nav-wrapper d-flex">

                    <div class="site-branding">
                        <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
			else :
				?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
			endif;
			$nova_description = get_bloginfo( 'description', 'display' );
			if ( $nova_description || is_customize_preview() ) :
				?>
                        <p class="site-description">
                            <?php echo $nova_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </p>
                        <?php endif; ?>
                    </div><!-- .site-branding -->

                    <div class="mobile-menu-bg">

                        <nav id="site-navigation" class="main-navigation">
                            <!-- <button class="menu-toggle" aria-controls="primary-menu"
                            aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nova' ); ?></button> -->
                            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
                        </nav><!-- #site-navigation -->

                    </div>
                </div>




                <div class="mobile_menu">
                    <div class="hamb_lines">
                        <div class="ham-line"></div>
                        <div class="ham-line"></div>
                        <div class="ham-line"></div>
                        <div class="ham-line"></div>
                    </div>
                </div>
            </div>

        </header><!-- #masthead -->