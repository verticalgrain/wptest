<?php 

namespace TenUp\TenUpTest;

/**
 * Register Sidebar
 *
 */

function register_sidebar() {
  register_sidebar( array(
    'name' => __( 'Main Sidebar', 'theme-slug' ),
    'id' => 'sidebar-1',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="widgettitle">',
    'after_title'   => '</div>',
  ) );
}
// add_action( 'widgets_init', 'TenUp\TenUpTest\register_sidebar' );