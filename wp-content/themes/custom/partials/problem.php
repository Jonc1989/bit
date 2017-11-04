<div class="col-md-12 clear-pads" id="problem">
	<div class="container">
		<h4>Проблема</h4>
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
		
		<div>image block</div>
		
		
		
		
		
		
		
		
		
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

		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>


				<?php the_title(); ?>



		<?php endwhile; ?>

		<?php endif; ?>

	</div>

</div>