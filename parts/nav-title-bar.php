<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
// added absolute URL href for logo and removing this <?php echo esc_url( home_url( '/' ) );
$breakpoint = "medium"; ?>

<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
<div class="nav-bar-left">
<div class="title-bar-title">
<?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
<a href="https://www.campsited.com" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
<img class="navbar__logo" src="https://d3hwa4095hqcjz.cloudfront.net/assets/logo-5131b416b2594ceff946d4ad5d59afaed0cfb62fbc4916e61718a4a0097e0af9.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
</a>
<?php else : ?>
<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
<?php endif; ?>
<!-- outputs a dropdown list of languages names -->
</div>
</div>
<button class="menu-icon float-right menu-btn" type="button" data-toggle></button>
</div>

<div class="grid-container">
<div class="top-bar" id="top-bar-menu">
<div class="top-bar-left show-for-<?php echo $breakpoint ?>">
<ul class="menu">
<li>
<?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
<!--a href="https://www.campsited.com" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
<img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"-->
<a href="https://www.campsited.com" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
<img class="navbar__logo" src="https://d3hwa4095hqcjz.cloudfront.net/assets/logo-5131b416b2594ceff946d4ad5d59afaed0cfb62fbc4916e61718a4a0097e0af9.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
</a>
<?php else : ?>
<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
<?php endif; ?>
</li>
</ul>
</div>
<div class="top-bar-right">
<?php joints_top_right(); ?>
</div>
</div>
