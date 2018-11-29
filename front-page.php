<?php get_header(); ?>
		<div class="banner" style="background-image: url('<?php the_field('banner_image'); ?>')!important;">
			<div class="banner-inner">
				<h1><?php the_field('banner_heading'); ?></h1>
				<h2><?php the_field('banner_subheading'); ?></h2>
				<div class="banner-button">
					<a href="<?php the_field('banner_button_url'); ?>"><?php the_field('banner_button_text'); ?></a>
				</div>
			</div>
		</div>
		<section id="our-parters">
			<div class="section-inner">
				<div class="section-header">
					<h1>Our Partners</h1>
					<h2 class="sub-heading">
						Trusted by the industries best, our partners provide sharper product costs to all club members.
					</h2>
				</div>
				<div class="col-container">
					<?php

						// The Query

						$args = array('post_type'=>'partners');
						$the_query = new WP_Query( $args );

						// The Loop

						while ( $the_query->have_posts() ) {
							$the_query->the_post();

							if((get_field('show_on_homepage')== "Yes")){
								get_template_part('content','partners');
							}
						}

						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div>
			</div>
		</section>
		<section id="why-club-electrical" class="grey-section">
			<div class="section-inner">
				<div class="section-header">
					<h1>Why club electrical?</h1>
					<h2 class="sub-heading">
						We strive to offer the best platform for all electricians. You can trust that you have our support.
					</h2>
				</div>
				<div class="col-container">
					<?php

						// The Query

						$args = array('post_type'=>'benefits');
						$the_query = new WP_Query( $args );

						// The Loop

						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							
							get_template_part('content','wce');
						}

						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div>
			</div>
		</section>

		<section id="become-a-member">
			<div class="section-inner">
				<div class="section-header">
					<h1>Become a member</h1>
				</div>
				<div class="col-container">
					<div class="col-2-item">
						<div class="bam-item">
							<p class="bam-blurb">
								You can signup to become a member for only $xx per month. you can visit our <a href="">signup page</a> to become a member and seek all of our member benefits.
							</p>
							<div class="bam-button">
								<a href="">Become a member</a>
							</div>
						</div>
						
					</div>
					<div class="col-2-item">
						<div class="bam-item">
							<p class="bam-blurb">
								Want to find out more about what you get with becoming a member? Take a look at our <a href="">members benefits page</a> to find out more.
							</p>
							<div class="bam-button">
								<a href="">View member benefits</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>

		<section id="contact-form" class="grey-section">
			<div class="section-inner">
				<div class="section-header">
					<h1>Have a question?</h1>
					<h2 class="sub-heading">
						If you have a question about joining Club Electrical or any other related question please don’t hesitate to get into touch with us at <a href="">support@clubelectrical.co.nz</a>. Alternatively send us a message by filling out the form below.
					</h2>
				</div>
				<div class="contact-form-item">
					<?php echo do_shortcode('[contact-form-7 id="36" title="Home Contact"]'); ?>
				</div>
				
			</div>
		</section>

		<?php get_footer(); ?>