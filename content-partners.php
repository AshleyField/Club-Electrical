<div class="col-4-item">
	<div class="partner-item">
		<div class="partner-item-image">
			<img src="<?php the_field('partner_logo') ?>" alt="" class="partner-logo">
		</div>
		<div class="partner-item-blurb">
			<?php the_content(); ?>
		</div>
		<div class="partner-item-button">
			<a href="<?php the_field('partner_url'); ?>"><?php the_field('partner_button_text') ?></a>
		</div>
	</div>
</div>