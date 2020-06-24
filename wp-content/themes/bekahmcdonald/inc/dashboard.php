<?php


/**
 * Remove welcome panel
 */

function BM_remove_dashboard_welcome_panel() {
  remove_action('welcome_panel', 'wp_welcome_panel');
  remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
  $user_id = get_current_user_id();
  if (0 !== get_user_meta( $user_id, 'show_welcome_panel', true ) ) {
      update_user_meta( $user_id, 'show_welcome_panel', 0 );
  }
}

add_action( 'load-index.php', 'BM_remove_dashboard_welcome_panel' );





/**
 * Remove meta boxes
 */

function BM_remove_dashboard_meta() {
  remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
  remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
}
add_action( 'admin_init', 'BM_remove_dashboard_meta' );