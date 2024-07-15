<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redoyit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Metas -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="keywords" content="<?php bloginfo( 'name' ). _e(' - ','redoyit') .bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php bloginfo( 'name' ). _e(' - ','redoyit') .bloginfo( 'description' ); ?>" />
	<meta name="author" content="redoyit" />
	<!-- Title  -->
	<title><?php bloginfo( 'name' ). _e(' - ','redoyit') .bloginfo( 'description' ); ?></title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo REDOYIT_IMG_URL; ?>favicon.ico" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
	do_action( 'redoyit_preloader_ready' );
	get_template_part( 'components/header/header' );
	//do_action( 'redoyit_mobile_menu_ready' );
?>