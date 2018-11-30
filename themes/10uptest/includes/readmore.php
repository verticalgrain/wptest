<?php 

namespace TenUp\TenUpTest;

/**
 * Change default read more
 *
 */

function wpkernel_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'TenUp\TenUpTest\wpkernel_excerpt_more' );