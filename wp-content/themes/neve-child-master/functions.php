<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'neve_child_load_css' ) ):
	/**
	 * Load CSS file.
	 */
	function neve_child_load_css() {
		wp_enqueue_style( 'neve-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neve-style' ), NEVE_VERSION );
	}
endif;
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );


/* Show Total Weight in Cart and Checkout page */
add_action( 'woocommerce_before_checkout_form', 'bbloomer_print_cart_weight' );
add_action( 'woocommerce_before_cart', 'bbloomer_print_cart_weight' );
  
function bbloomer_print_cart_weight() {
   $notice = 'Total weight of your order is: ' . WC()->cart->get_cart_contents_weight() . get_option( 'woocommerce_weight_unit' );
   if ( is_cart() ) {
      wc_print_notice( $notice, 'notice' );
   } else {
      wc_add_notice( $notice, 'notice' );
   }
}

/**
 * Set a minimum order amount for checkout
 */
add_action( 'woocommerce_checkout_process', 'wc_minimum_order_amount' );
add_action( 'woocommerce_before_cart' , 'wc_minimum_order_amount' );
 
function wc_minimum_order_amount() {
    // Set this variable to specify a minimum order value
    $minimum = 100;

    if ( WC()->cart->total < $minimum ) {

        if( is_cart() ) {

            wc_print_notice( 
                sprintf( 'Your current order total is %s — you must have an order with a minimum of %s to place your order ' , 
                    wc_price( WC()->cart->total ), 
                    wc_price( $minimum )
                ), 'error' 
            );

        } else {

            wc_add_notice( 
                sprintf( 'Your order total amount is %s — please order with a minimum of %s to place your order' , 
                    wc_price( WC()->cart->total ), 
                    wc_price( $minimum )
                ), 'error' 
            );

        }
    }
}



