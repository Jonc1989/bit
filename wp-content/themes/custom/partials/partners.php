<div class="col-md-12 clear-pads" id="partners">
	<div class="container">
		<h1 class="title">Партнеры</h1>

		<?php
		$args = array(
			'post_type'      => 'partner',
			'post_status'    => 'publish',
			'orderby'        => 'post_date',
			'order'          => 'DESC'
		);
		$posts = new WP_Query( $args );

		if ( $posts->have_posts() ) : ?>
			<div class="partners-wrap col-md-12 clear-pads">
				<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
				<div class="partner col-md-3 clear-pads">
					<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
					<?php if($image) { ?>
						<img src="<?php echo $image; ?>">
					<?php } ?>
				</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</div>