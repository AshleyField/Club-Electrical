<?php 

	function register_resources(){

		//Register Partners
		$arg = array(
			'labels' => array(
				'name'=> 'Partners',
				'singular_name' => 'Partner',
				'menu_name' => 'Partners'
			),
			'public' => true,
			'show_in_nav_menues' => true,
			'menu_icon' => 'dashicons-groups',
		);
		register_post_type('partners',$arg);

		//Register Benefits
		$arg = array(
			'labels' => array(
				'name'=> 'Benefits',
				'singular_name' => 'Benefit',
				'menu_name' => 'Benefits'
			),
			'public' => true,
			'show_in_nav_menues' => true,
			'menu_icon'   => 'dashicons-thumbs-up',
		);
		register_post_type('benefits',$arg);

		//Register Partner Products
		$arg = array(
			'labels' => array(
				'name'=> 'Partner Products',
				'singular_name' => 'Partner Product',
				'menu_name' => 'Partner Products'
			),
			'public' => true,
			'show_in_nav_menues' => true,
			'menu_icon'   => 'dashicons-cart',
		);
		register_post_type('partner_products',$arg);
	}

	add_action('init','register_resources');

	// add_action('after_setup_theme', 'remove_admin_bar');
 
	// function remove_admin_bar() {
	// if (!current_user_can('administrator') && !is_admin()) {
	// 	show_admin_bar(false);
	// 	}
	// }
	function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

	
 ?>
