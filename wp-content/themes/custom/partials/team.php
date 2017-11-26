<div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="team">
	<div class="container border-bottom">
		<h1 class="title">Наша команда</h1>

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

				<div class="col-md-3 team-member">
				<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
					<?php if($image) { ?>
						<div class="team-photo circle" style="background: url(<?php echo $image; ?>)no-repeat center center;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;
							background-size: cover;">
					</div>
					<?php } ?>
					<h4 class=""><?php the_title(); ?></h4>
					<div class=""><?php the_content(); ?></div>
				</div>





			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		<?php endif; ?>


	</div>
</div>