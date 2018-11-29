<?php 

	get_header();

	get_template_part('content','page-banner');


	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>

			<section class="grey-section">
				<div class="section-inner">
					<div class="section-header">
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

					</div>

				</div>
				
			</section>

			<section id="partner-products">
				<div class="section-inner">
					<div class="section-header">
						<h1>Partner Products</h1>
					</div>

					<div class="col-container">

						<?php

							// The Query

							$args = array('post_type'=>'partner_products');
							$the_query = new WP_Query( $args );

							// The Loop

							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								
								get_template_part('content','partner-products');
							}

							/* Restore original Post Data */
							wp_reset_postdata();
						?>
					</div>

				</div>
				
			</section>
		<?php }
	}


	get_footer();

 ?>