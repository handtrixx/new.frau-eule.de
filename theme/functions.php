<?php
add_theme_support( 'post-thumbnails' );
function new_excerpt_length($length) {
    return 28;
}
add_filter('excerpt_length', 'new_excerpt_length');

register_nav_menus( array( 
    'main' => 'Top Navigation',
    'footer' => 'Footer Navigation'
  ) );
  

  function riga_hide_admin_bar(){
  
        return false;
   
}
add_filter( 'show_admin_bar' , 'riga_hide_admin_bar' );

// REMOVE UNESSECARY HEADER INJECTIONS
remove_action( 'wp_head', '_wp_render_title_tag', 1 );
//remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'wp_preload_resources', 1 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'locale_stylesheet' );
remove_action( 'publish_future_post', 'check_and_publish_future_post', 10, 1 );
//remove_action( 'wp_head', 'wp_robots', 1 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_head', 'wp_print_styles', 8 );
remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_custom_css_cb', 101 );
remove_action( 'wp_head', 'wp_site_icon', 99 );

remove_action( 'wp_head', 'wp_post_preview_js', 1 );
remove_action( 'wp_head', '_custom_logo_header_styles' );
remove_action( 'wp_head', 'wp_maybe_inline_styles', 1 ); // Run for styles enqueued in <head>.
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' ); // Back-compat for sites disabling oEmbed host JS by removing action.
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );

//REMOVE UNESSECARY FOOTER INJECTIONS
//remove_action( 'wp_footer', 'wp_print_footer_scripts', 20 );
//remove_action( 'wp_print_footer_scripts', '_wp_footer_scripts' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
remove_action( 'wp_footer', 'wp_enqueue_stored_styles', 1 );
remove_action( 'wp_footer', 'wp_maybe_inline_styles', 1 ); // Run for late-loaded styles in the footer.
remove_action( 'wp_footer', 'wp_admin_bar_render', 1000 ); // Back-compat for themes not using `wp_body_open`.
remove_action( 'wp_footer', 'the_block_template_skip_link' );
