<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gadget_news
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gadget_news' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrapper">
			<div class="container">
				<div class="row menu-row">
					<div class="top-header clearfix">
						<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="menu-logo"/></a>
						</div>
						<div class="nav-bar">
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'gadget_news' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
							</nav><!-- #site-navigation -->
						</div>
						<div class="search ">
							<?php if (!dynamic_sidebar('Search Widget Area')) :?> <?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="ad header-ad">
				<?php if (!dynamic_sidebar('Ads Widget Area')) :?> <?php endif;?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
