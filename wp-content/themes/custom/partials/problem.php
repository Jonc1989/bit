<div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="problem">
	<div class="container">
		<h4 class="title">Проблема</h4>
		<div class="col-md-6 text-block">
			Главные проблемы в производстве пеллет и пиломатеиала - экология, рентабельность производственного
			бизнеса и нехватка сыря. Проект Wood Pellets предлогает концепт безотходного производства
			замкнутого цикла. Комплекс небудет нуждается в посредниках.
		</div>
		<div class="col-md-6 text-block">
			В комплекс проекта Wood Pellets входит лесозавод, завод древесных гранул и станция когенерация.
			Проект Wood Pellets предлагает произвести независимый комплекс заводов который обеспечивает
			безотходное производство пеллет.
		</div>
	</div>
		<div class="col-md-12">		<h4 class="text-center">Отопление и электроэнергия</h4></div>

		<div class="city-image col-md-12 clear-pads">

		</div>


	<div class="col-md-12">
		<div class="container city-description">
			<div class="col-md-12 clear-pads">
				<a class="" href="" data-toggle="modal" data-target="#firstModal">
					<div class="dark-bg triangle-top col-md-3">

						<h4 class="yellow">Лесные ресурсы</h4>
						<p class="white">Арендованный лес</p>
						<p class="white">71 976 гектар</p>

					</div>
				</a>
                <div class="modal fade" id="firstModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="yellow">Лесные ресурсы</h4>
                                <p class="white">Арендованный лес</p>
                                <p class="white">71 976 гектар</p>
                            </div>
                        </div>

                    </div>
                </div>

				<a class="" data-toggle="modal" data-target="#secondModal">
					<div class="dark-bg triangle-top col-md-3">
						<h4 class="yellow">Лесопиление</h4>
						<p class="white">Арендованный лес</p>
						<p class="white">71 976 гектар</p>
					</div>
				</a>
                <div class="modal fade" id="secondModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="yellow">Лесопиление</h4>
                                <p class="white">Арендованный лес</p>
                                <p class="white">71 976 гектар</p>
                            </div>
                        </div>

                    </div>
                </div>

				<a class="" data-toggle="modal" data-target="#thirdModal">
					<div class="dark-bg triangle-top col-md-3">
						<h4 class="yellow">Лесные ресурсы</h4>
						<p class="white">Арендованный лес</p>
						<p class="white">71 976 гектар</p>
					</div>
				</a>
                <div class="modal fade" id="thirdModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="yellow">Лесопиление</h4>
                                <p class="white">Арендованный лес</p>
                                <p class="white">71 976 гектар</p>
                            </div>
                        </div>

                    </div>
                </div>

				<a class="" data-toggle="modal" data-target="#fourthModal">
					<div class="dark-bg triangle-top col-md-3">
						<h4 class="yellow">Станция  когенерации</h4>
						<p class="white">Арендованный лес</p>
						<p class="white">71 976 гектар</p>
					</div>
				</a>
                <div class="modal fade" id="fourthModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="yellow">Лесопиление</h4>
                                <p class="white">Арендованный лес</p>
                                <p class="white">71 976 гектар</p>
                            </div>
                        </div>

                    </div>
                </div>


			</div>
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
			'category_name'  => 'description',
			'order'          => 'DESC'
		);

		$posts = new WP_Query( $args );

		if ( $posts->have_posts() ) : ?>
			<div class="col-md-12 col-sm-12 col-xs-12 clear-pads border-bottom posts-wrap">
				<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
					<div class="col-md-3 col-sm-6 post-wrap">
						<div class="col-md-12 clear-pads">
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
				<?php wp_reset_query(); ?>
			</div>
		<?php endif; ?>


	</div>
</div>