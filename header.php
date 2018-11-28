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
					<li><a href="">Partners</a></li>
					<li><a href="">Training</a></li>
					<li>Member Benefits</li></li>
					<li><a href="/register">Become A Member</a></li>
					<li><a href="">Contact</a></li>
					<li class="login"><a href="/login">Login<i class="fas fa-user"></i></a></li>
				</ul>
			</nav>
			<div class="overlay"></div>
			<div id="desktop-nav">
				<ul>
					<li><a href="">Partners</a></li>
					<li><a href="">Training</a></li>
					<li><a href="">Member Benefits</a></li>
					<li><a href="/register">Become A Member</a></li>
					<li><a href="">Contact</a></li>
					<li class="login"><a href="/login">Login<i class="fas fa-user"></i></a></li>
				</ul>
			</div>
		</div>