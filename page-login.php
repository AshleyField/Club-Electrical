<?php 

	get_header();


	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			get_template_part('content','page-banner');

			?>

			<section id="login-page">
				<div class="section-inner">
					<?php get_template_part('content','login'); ?>
				</div>
				
			</section>
		<?php }
	}


	get_footer();

 ?>