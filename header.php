<?php
/**
* The template for displaying the header
*
* This is the template that displays all of the <head> section
*
*/
?>
<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<!-- Force IE to use the latest rendering engine available -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta class="foundation-mq">
<!-- If Site Icon isn't set in customizer -->
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
	<!-- Icons & Favicons -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
<?php } ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<meta content="authenticity_token" name="csrf-param" />
<meta content="WCaazi5NEnvjLyzTuBiqVgrb91QU4LMz3oVnGxZd5R0=" name="csrf-token" />
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<script src="https://d3hwa4095hqcjz.cloudfront.net/misc/static/landings/config_prod.props"></script>
<?php wp_head(); ?>
<script async="async" defer="defer" src="https://d3hwa4095hqcjz.cloudfront.net/assets/frontend_application-700aa898a8604a4ce44ca8d5e9af13d8a8e30b28d5180a7b5c8a4e482169a692.js"></script>
</head>
<body <?php body_class(); ?>>
<header class="header" role="banner">
<?php get_template_part( 'parts/nav', 'title-bar' ); ?>

</header> <!-- end .header -->