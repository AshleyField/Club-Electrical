<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home - Club Electrical</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/style.css">

	<?php wp_head(); ?>

</head>
<body>

	<div class="wrapper">

		<div class="header" data-nav="closed">
			<div class="header-inner" id="pre-header">
				<i class="fas fa-bars"></i>
				<div class="logo">
					<a href="/">
						<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/club-electrical-logo.png" alt="">
					</a>
				</div>
				
			</div>
			<nav id="mobile-nav">
				<div class="header-inner">
					<i class="fas fa-times"></i>
					<div class="logo">
						<a href="/">
							<img src="<?php echo get_bloginfo('template_directory');?>/assets/images/club-electrical-logo.png" alt="">
						</a>
					</div>
				</div>
				
				<ul>
					<li><a href="/partners">Partners</a></li>
					<li><a href="/training">Training</a></li>
					<li><a href="/member-benefits">Member Benefits</a></li></li>
					<li><a href="/shop">Become A Member</a></li>
					<li><a href="">Contact</a></li>
					<li class="login"><a href="/my-account">Login<i class="fas fa-user"></i></a></li>
					<li>
						<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
						    $count = WC()->cart->cart_contents_count;
						    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php 
						    if ( $count > 0 ) {
						        ?>
						        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
						        <?php
						    }
						        ?></a>
						 
						<?php } ?>

					</li>
				</ul>
			</nav>
			<div class="overlay"></div>
			<div id="desktop-nav">
				<ul>
					<li><a href="/partners">Partners</a></li>
					<li><a href="/training">Training</a></li>
					<li><a href="/member-benefits">Member Benefits</a></li>
					<li><a href="/shop">Become A Member</a></li>
					<li><a href="">Contact</a></li>
					<li class="login"><a href="/my-account">Login<i class="fas fa-user"></i></a></li>
					<li>
						<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
						    $count = WC()->cart->cart_contents_count;
						    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php 
						    if ( $count > 0 ) {
						        ?>
						        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
						        <?php
						    }
						        ?></a>
						 
						<?php } ?>

					</li>
				</ul>
			</div>
		</div>