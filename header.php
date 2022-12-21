<?php
/**
 * 
 *  The Header template Vykintas Venckus
 * 
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="hfeed site">
    <div class="topbar" style="background-color:<?php the_field('top_bar_color', 'header-options'); ?>; text-align:<?php the_field('top_bar_location', 'header-options'); ?>">
    <p style="color:<?php the_field('top_bar_text_color', 'header-options'); ?>;"><?php the_field('top_bar_text', 'header-options'); ?></p>
    </div>
	<header id="masthead" class="site-header">
        <div class="logo-col">
            <a href="<?php echo get_home_url(); ?>"><img id="site-logo" src="<?php the_field('logo_image', 'header-options'); ?>"></a>
        </div>
        <div class="menu-col">
        <?php
				$defaults = array(
					'theme_location'  => 'header-menu',
					'container'       => '',
					'items_wrap'      => '<nav>%3$s</nav>'
				);
				wp_nav_menu( $defaults );
				?>
        </div>
        <div class="cart-col">
                <i style="font-size:24px; color:<?php the_field('cart_icon_color', 'header-options'); ?>" class="<?php the_field('cart_icon_code', 'header-options'); ?>"></i>
        </div>
	</header><!-- #masthead -->

    <style>
        header nav li a {
            color:<?php the_field('navigation_color', 'header-options'); ?>;
        }

        header nav .current-menu-item a {
    color:<?php the_field('navigation_current_color', 'header-options'); ?>;

}
        </style>

	<div id="main" class="wrapper">