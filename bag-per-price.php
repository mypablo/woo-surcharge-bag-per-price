/**
 * Add a bag cost surcharge to your cart / checkout
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