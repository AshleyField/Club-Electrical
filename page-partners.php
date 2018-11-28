<?php 

	get_header();

	get_template_part('content','page-banner');


	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>

			<section>
				<div class="section-inner">
					<div class="section-heading">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="section-content">
						<?php the_content(); ?>
					</div>

					<div class="col-container">
						
						<?php 

						$posts = get_field('relationship');

						if( $posts ): ?>
						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post);

								get_template_part('content','partners');

							endforeach; ?>
							<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>

					<div class="col-container">

				</div>
				
			</section>
		<?php }
	}


	get_footer();

 ?>