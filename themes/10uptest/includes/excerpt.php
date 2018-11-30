<?php

namespace TenUp\TenUpTest;

/**
 * Set a custom length for the excerpt
 *
 */

function wpkernel_custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'TenUp\TenUpTest\wpkernel_custom_excerpt_length', 999 );