<?php
/**
 * Primary Menu Extras
 *
 */
function ea_primary_menu_extras( $menu, $args ) {
    if( 'main-right' == $args->theme_location )
      $menu .= '<li class="menu-item search"><a href="#" data-toggle="search-form" class="search-toggle"><i class="fa fa-search fa-1x"></i></a></li>';
    return $menu;
}
add_filter( 'wp_nav_menu_items', 'ea_primary_menu_extras', 10, 2 );