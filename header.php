<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Noord-en
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />

<?php
	$color1 = rwmb_meta( 'noord_en_color1' ) == '' ? '#f39200' : rwmb_meta( 'noord_en_color1' );
	$color2 = rwmb_meta( 'noord_en_color2' ) == '' ? '#ffddaa' : rwmb_meta( 'noord_en_color2' );
?>

<style>
body {
	background-color: <?php echo $color2; ?>;
}

.site-header {
	background-color: <?php echo $color1; ?>;
}

.main-navigation li,
.main-navigation button {
	background-color: <?php echo $color2; ?>;
}

@media screen and (max-width: 620px) {
	.main-navigation {
		background-color: <?php echo $color2; ?>;
		border-color: <?php echo $color1; ?>;
	}
}
</style>

<?php wp_head(); ?>
</head>

<body <?php body_class('slug-' . sanitize_title( get_the_title(), 'home' )); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'noord-en' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-content">

			<div class="header-block logo">
				<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<!-- <?php bloginfo( 'name' ); ?> -->
							<img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
						</a>
					<!-- <h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
							<img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
						</a>
					</h1> -->
					<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
				</div><!-- .site-branding -->
			</div>

			<div class="header-block nav">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="menu" aria-expanded="false">
						<?php //_e( 'Primary Menu', 'noord-en' ); ?>
						Menu
					</button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
	 		</div>

	 	</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
