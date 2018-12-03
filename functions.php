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

function mytheme_customize_register($wp_customize){
  $wp_customize->add_section( 'section_colours' , array(
    'title'      => 'Theme Settings',
    'priority'   => 30,
  ));

  //Main Theme Color

  $wp_customize->add_setting( 'header_textcolor' , array(
    'default'   => '#007FFA',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_colour_control', array(
    'label'      => 'Theme Colour',
    'section'    => 'section_colours',
    'settings'   => 'header_textcolor',
  )));

  //Even Section Colour

  $wp_customize->add_setting( 'even_section_colour' , array(
    'default'   => '#EFEFEF',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'even_section_colour_control', array(
    'label'      => 'Even Section Colour',
    'section'    => 'section_colours',
    'settings'   => 'even_section_colour',
  )));
  
  // Logo

  $wp_customize->add_setting('logo_setting', array(
    'default' => get_bloginfo('template_directory').'/assets/images/club-electrical-logo.png',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Upload_Control( $wp_customize, 'logo_setting_control', 
    array(
      'label'      => 'Logo Image',
      'section'    => 'section_colours',
      'settings'   => 'logo_setting',
    )) 
  );
}

add_action('customize_register', 'mytheme_customize_register');

function mytheme_customize_css()
{
    ?>
         <style type="text/css">
             nav.active { color: #<?php echo get_theme_mod('header_textcolor', '#007FFA'); ?>!important; }

             #become-a-member a, #contact-form a .website-by a {
             	color: #<?php echo get_theme_mod('header_textcolor', '#007FFA'); ?>!important;
             }

             .wpcf7-submit, .cart-contents-count {
             	background-color: #<?php echo get_theme_mod('header_textcolor', '#007FFA'); ?>!important;
             }

             .grey-section {
             	background-color: <?php echo get_theme_mod('even_section_colour', '#EFEFEF'); ?>!important;
             	border:1px red solid;
             }
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');
	
 ?>
