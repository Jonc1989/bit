<div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="team">
    <h1 class="title"><?php echo __( 'Наша команда', 'preico' ) ?></h1>
	<div class="container">

		<?php
		$args = array(
			'post_type'      => 'team',
			'post_status'    => 'publish',
			'orderby'        => 'post_date',
			'order'          => 'DESC',
			'posts_per_page' => '3',
		);
		$posts = new WP_Query( $args );

		if ( $posts->have_posts() ) : ?>

			<?php $num = 0; ?>
			<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

				<div class="col-md-4 col-sm-4 col-xs-12 team-member" style="">
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




			<?php $num++;?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		<?php endif; ?>


	</div>
	<div class="container collapse" id="more-team">

		<?php
		$args = array(
			'post_type'      => 'team',
			'post_status'    => 'publish',
			'orderby'        => 'post_date',
			'order'          => 'DESC',
			'offset' => '3',
		);
		$posts = new WP_Query( $args );

		if ( $posts->have_posts() ) : ?>

			<?php $num = 0; ?>
			<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

				<div class="col-md-4 col-sm-4 col-xs-12 team-member" style="">
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




				<?php $num++;?>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		<?php endif; ?>


		

	</div>
	<div class="col-md-12 col-sm-12 col-xs-12 clear-pads text-center collapse-btn-container">
		<a class="btn btn-success more-btn" data-toggle="collapse" href="#more-team" role="button" aria-expanded="false" aria-controls="more-team">
			<span class="more"><?php echo __( 'More', 'preico' ) ?></span>
			<span class="less"><?php echo __( 'Less', 'preico' ) ?></span>
		</a>
	</div>



</div>