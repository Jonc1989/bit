<div class="col-md-12 clear-pads" id="team">
	<div class="container">
		<h4>Наша команда</h4>

		<?php
		$args = array(
			'post_type'      => 'team',
			'post_status'    => 'publish',
			'orderby'        => 'post_date',
			'order'          => 'DESC'
		);
		$posts = new WP_Query( $args );

		if ( $posts->have_posts() ) : ?>

			<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

				<div class="col-md-3">
				<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
					<?php if($image) { ?>
						<div class="team-photo circle" style="background: url(<?php echo $image; ?>)no-repeat center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;
							background-size: cover;">
					</div>
					<?php } ?>
					<div class=""><?php the_title(); ?></div>
					<div class=""><?php the_content(); ?></div>
				</div>





			<?php endwhile; ?>

		<?php endif; ?>
	</div>
</div>