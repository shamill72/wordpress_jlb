<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

//add custom attributes below the item
add_action('woocommerce_shop_loop_item_title', 'product_loop_meta');
function product_loop_meta() {
  global $product;
    if( ! is_object( $product ) ) {
        $product = wc_get_product( get_the_id() );
      }
  echo '<h6>Color: ' . $product->get_attribute( 'pa_color' ) .'</h6>';
  echo '<h6>Style: ' . $product->get_attribute( 'pa_style' ) . '</h6>';
}


//hide add to cart button unless user is logged in
add_action('init', 'hide_addcart_not_logged_in');

function hide_addcart_not_logged_in() {
  if(!is_user_logged_in()) {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30  );
    add_action( 'woocommerce_single_product_summary', 'print_login_to_see', 31  );
    add_action( 'woocommerce_after_shop_loop_item', 'print_login_to_see', 11  );
  }
}

function print_login_to_see() {
  echo '<a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">' . __('Login to add to cart', 'theme_name') . '</a>';
}


// END ENQUEUE PARENT ACTION
