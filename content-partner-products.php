<div class="col-4-item">
	<div class="partner-product">
		<div class="partner-product-title">
			<h1>
				<?php the_title(); ?>
			</h1>
		</div>
		<div class="partner-product-image">
			<img src="<?php the_field('product_image'); ?>" alt="">
		</div>
		<div class="partner-product-description">
			<?php the_content(); ?>
		</div>
		<div class="partner-product-logo">
			<?php 

				$posts = get_field('relationship');

				if( $posts ): ?>
					<?php foreach( $posts as $post): 

						setup_postdata($post); ?>

						 <img src="<?php the_field('partner_logo'); ?>" alt="">

					<?php endforeach;
					wp_reset_postdata(); 
				endif; ?>
		</div>
		
		<?php if(get_field('product_link')): ?>
			<div class="partner-product-button">
				<a href="<?php the_field('product_link'); ?>">View Product</a>
			</div>
		<?php endif; ?>
	</div>
</div>