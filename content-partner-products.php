<div class="col-4-item">
	<div class="partner-product">
		<div class="partner-product-title">
			<h1>
				<?php the_title(); ?>
			</h1>
		</div>
		<div class="partner-product-image">
			<img src="<?php the_field('product_image'); ?>" alt="">

			<?php 

				$partner_relationship = get_field('relationship');

				foreach($partner_relationship as $relationship){
					?>
					<div class="partner-product-logo">
						<img src="<?php the_field('partner_logo',$relationship->ID); ?>" alt="">
					</div>

					<?php
				}

			?>
		
		</div>
		<div class="partner-product-description">
			<?php the_content(); ?>
		</div>
		
		<?php if(get_field('product_link')): ?>
			<div class="partner-product-button">
				<a href="<?php the_field('product_link'); ?>">View Product</a>
			</div>
		<?php endif; ?>
	</div>
</div>