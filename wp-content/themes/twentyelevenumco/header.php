<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<<<<<<< HEAD
<<<<<<< HEAD
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/contact-collapse.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/description-collapse.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/navbar-mobile.js" type="text/javascript"></script>
=======
>>>>>>> parent of 911bad0... Wordpress v2.0
=======
>>>>>>> parent of 911bad0... Wordpress v2.0
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
	<!--Barre de navigation-->
	<nav id="access" role="navigation">
				<img id="logo" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo_chroubaix.png" alt="logo" heigth="38px" width="144px">
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<div id="toggle">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon-navbar.png" alt="Show" />
				</div>
<<<<<<< HEAD
					<div id="popout">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</div>

				<!--Partie coordonnées de l'hopital-->
				<div id="container-contacter">
					<div class="contacter">
							<img id="icon-telephone" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-phone.png"/>
							<p id="text-telephone">Tél: 03.20.99.30.40</p>
					</div>
					<div class="contacter">
							<img id="icon-adresse" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-position.png"/>
							<p id="text-adresse">CETRADIMN</br> 26 boulevard Lacordaire, 59100 Roubaix</p>	
					</div>
				</div>	
					
=======
			<?php
				else :
			?>
				
				<?php get_search_form(); ?>
			<?php endif; ?>
			
			
				  <!--Fin barre de recherche-->	
			<div id="adresse-container">
			<p id='adresse'><strong>CETRADIMN</br> 26 boulevard Lacordaire, 59100 Roubaix</br>Tél: 03.20.99.30.40</strong></p>
			</div>
>>>>>>> parent of 911bad0... Wordpress v2.0
	</nav><!-- #access -->
		<!--Titre principale-->
		<div id="titre-container">
			<h1 id="site-title" class="entry-title">Unité</br>Médico-Chirurgicale</br>d'Obésité</h1>
		</div>
			
				<!--Fin titre principale-->
			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( $header_image ) :
					// Compatibility with versions of WordPress prior to 3.4.
					if ( function_exists( 'get_custom_header' ) ) {
						/*
						 * We need to figure out what the minimum width should be for our featured image.
						 * This result would be the suggested width if the theme were to implement flexible widths.
						 */
						$header_image_width = get_theme_support( 'custom-header', 'width' );
					} else {
						$header_image_width = HEADER_IMAGE_WIDTH;
					}
					?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					
				
				<?php
					/*
					 * The header image.
					 * Check if this is a post or page, if it has a thumbnail, and if it's a big one
					 */
					if ( is_singular() && has_post_thumbnail( $post->ID ) &&
							( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
							$image[1] >= $header_image_width ) :
						// Houston, we have a new header image!
						echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
					else :
						// Compatibility with versions of WordPress prior to 3.4.
						if ( function_exists( 'get_custom_header' ) ) {
							$header_image_width  = get_custom_header()->width;
							$header_image_height = get_custom_header()->height;
						} else {
							$header_image_width  = HEADER_IMAGE_WIDTH;
							$header_image_height = HEADER_IMAGE_HEIGHT;
						}
						?>
					<img id="img_header" src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
				<?php endif; // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>
			
			
	</header><!-- #branding -->

	
	<div id="main">
