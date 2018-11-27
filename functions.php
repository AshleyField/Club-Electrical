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
			'menu_icon' => 'dashicons-list-view',
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
			'menu_icon'   => 'dashicons-tagcloud',
		);
		register_post_type('benefits',$arg);
	}

	add_action('init','register_resources');
	
 ?>
