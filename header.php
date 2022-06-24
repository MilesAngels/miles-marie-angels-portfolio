<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miles-marie-angels-portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<script src="https://kit.fontawesome.com/6b35074062.js" crossorigin="anonymous"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<!-- Change the background color of the body for each page -->
<?php if(is_front_page()) :?>
	<body class="bg-color" <?php body_class(); ?>>
<?php elseif(is_page('about')) :?>
	<body class="bg-color-space" <?php body_class(); ?>>
<?php elseif(is_page('projects')) :?>
	<body class="bg-color-ocean" <?php body_class(); ?>>
<?php elseif(is_page('contact')) :?>
	<body class="bg-color-magic" <?php body_class(); ?>>
<?php endif;?>

<?php wp_body_open(); ?>
<!-- preloader -->
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'miles-marie-angels' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><a class="burger-menu">&#9776;</a></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
