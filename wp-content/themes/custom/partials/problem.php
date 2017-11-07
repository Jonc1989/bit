<div class="col-md-12 clear-pads" id="problem">
	<div class="container">
		<h4 class="title">Проблема</h4>
		<div class="col-md-6">
			Главные проблемы в производстве пеллет и пиломатеиала - экология, рентабельность производственного
			бизнеса и нехватка сыря. Проект Wood Pellets предлогает концепт безотходного производства
			замкнутого цикла. Комплекс небудет нуждается в посредниках.
		</div>
		<div class="col-md-6">
			В комплекс проекта Wood Pellets входит лесозавод, завод древесных гранул и станция когенерация.
			Проект Wood Pellets предлагает произвести независимый комплекс заводов который обеспечивает
			безотходное производство пеллет.
		</div>
	</div>
		<div class="col-md-12">		<h4 class="text-center">Отопление и электроэнергия</h4></div>

		<div class="city-image">
			<div class="container">
				<a class="tooltips" data-toggle="modal" data-target="#tooltipsModal1">
					<div class="col-md-3  tooltips-wrap">
						<span>Лесные ресурсы
Арендованный лес
71 976 гектар </span>
					</div>
				</a>

				<a class="tooltips" href="#">
					<div class="col-md-3  tooltips-wrap">
						<span>Tooltip</span>
					</div>
				</a>

				<a class="tooltips" href="#">
					<div class="col-md-3  tooltips-wrap">
						<span>Tooltip</span>
					</div>
				</a>

				<a class="tooltips" href="#">
					<div class="col-md-3  tooltips-wrap">
						<span>Tooltip</span>
					</div>
				</a>
			</div>
		</div>

	<div class="modal fade" id="tooltipsModal1" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Login</h4>
				</div>
				<div class="modal-body">
					fgfgfgg hghghj
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>





	<div class="container">

		<?php
		$args = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => '8',
			'orderby'        => 'post_date',
			//'category_name'  => 'description',
			'order'          => 'DESC'
		);

		$posts = new WP_Query( $args );

		if ( $posts->have_posts() ) : ?>
			<div class="col-md-12 clear-pads border-bottom posts-wrap">
				<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
					<div class="col-md-3 post-wrap">
						<div class="col-md-12 border-bottom">
							<div class="col-md-12 clear-pads">
								<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
								<?php if($image) { ?>
									<div class="description-post-img" style="background: url(<?php echo $image; ?>)no-repeat center center;
										-webkit-background-size: cover;
										-moz-background-size: cover;
										-o-background-size: cover;
										background-size: cover;">
									</div>
								<?php } ?>
							</div>
							<div class="col-md-12 clear-pads">
								<h1><?php the_title(); ?></h1>
							</div>
							<div class="col-md-12 clear-pads">
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>


	</div>
</div>