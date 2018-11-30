<?php

namespace TenUp\TenUpTest;

/**
 * Customize the search form markup
 *
 */

function wpkernel_search_form( $form ) {
  $form = '<section class="search"><form role="search" method="get" id="search-form" action="' . esc_url( home_url( '/' ) ) . '" >
  <label class="screen-reader-text" for="s">' . __('Search',  '10uptest') . '</label>
  <input type="search" value="' . esc_attr( get_search_query() ) . '" name="s" id="s" placeholder="e.g. delicious sandwiches" />
  <input type="submit" id="searchsubmit" value="" aria-label="Go" />
  </form></section>';
  return $form;
}
add_filter( 'get_search_form', 'TenUp\TenUpTest\wpkernel_search_form' );