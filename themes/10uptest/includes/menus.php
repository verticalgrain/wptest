<?php

namespace TenUp\TenUpTest;

/**
 * Register menus
 *
 */

function register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'TenUp\TenUpTest\register_menu' );


/**
 * Add classes to menu list items
 *
 */

function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'navigation__item j-navigation-toggle';
  return $classes;
}
add_filter('nav_menu_css_class','TenUp\TenUpTest\add_classes_on_li',1,3);