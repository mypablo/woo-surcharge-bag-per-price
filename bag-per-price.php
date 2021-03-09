/**
 * Add a 1% surcharge to your cart / checkout
 * change the $percentage to set the surcharge to a value to suit
 */
add_action( 'woocommerce_cart_calculate_fees','woocommerce_custom_surcharge' );
function woocommerce_custom_surcharge() {
  global $woocommerce;

	if ( is_admin() && ! defined( 'DOING_AJAX' ) )
		return;


	if (($woocommerce->cart->cart_contents_total)<12){
		$surcharge=0.10; 
		$woocommerce->cart->add_fee( 'Bag', $surcharge, true, '' );
	}else if (($woocommerce->cart->cart_contents_total)<21){
		$surcharge=0.20; 
		$woocommerce->cart->add_fee( 'Bag', $surcharge, true, '' );
	}else {$surcharge=0.30; 
		$woocommerce->cart->add_fee( 'Bag', $surcharge, true, '' );}


}