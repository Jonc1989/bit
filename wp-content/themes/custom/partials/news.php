<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="news">
	<h4 class="title"><?php echo __( 'News', 'preico' ) ?></h4>
	<div class="container">
		<?php
		$args = array(
			'post_type'      => 'news',
			'post_status'    => 'publish',
			'posts_per_page' => '2',
			'orderby'        => 'post_date',
			'order'          => 'DESC',
			'paged'             => 1
		);

		$news = new WP_Query( $args );

		if ( $news->have_posts() ) : ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads border-bottom posts-wrap">
				<?php while ( $news->have_posts() ) : $news->the_post(); ?>
					<div class="col-lg-3 col-md-4 col-sm-6 post-wrap">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">

								<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>

									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads news-img <?php if($image) { echo ' yellow-border';}?>" style="background: url(<?php echo $image; ?>)no-repeat center center;
										-webkit-background-size: cover;
										-moz-background-size: cover;
										-o-background-size: cover;
										background-size: cover;">
									</div>


							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
								<h4><?php the_title(); ?></h4>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">
								<p><?php the_content(); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>



			</div>

			<?php if (  $news->max_num_pages > 1 ) : ?>
				<script>
					var currpage = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
					var maxpages = '<?php echo $news->max_num_pages; ?>';
				</script>
				<div id="posts-pages" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads paginator-wrap text-center">
					<button id="first"    class="paginate-control nonactive circle" disabled="true"><i class="pagination-icon">&laquo;</i></button>
					<button id="previous" class="paginate-control nonactive circle" disabled="true"><i class="pagination-icon">&#8249;</i></button>
					<span class="current-page"><?php _e( 'Page', 'preico' ); ?></span><input  id="current"  class="paginate-control" value="<?php echo $news->query_vars['paged'];?>"/><span class="current-page"><?php _e( 'from', 'preico' ); echo ' '.$news->max_num_pages; ?></span>
					<button id="last"     class="circle paginate-control <?php if($news->max_num_pages > 1){echo ' active';}?>" <?php if($news->max_num_pages == 1){echo 'disabled="true"';}?>><i class="pagination-icon">&raquo;</i></button>
					<button id="next"     class="circle paginate-control <?php if($news->max_num_pages > 1){echo ' active';}?>" <?php if($news->max_num_pages == 1){echo 'disabled="true"';}?>><i class="pagination-icon">&#8250;</i></button>
				</div>

			<?php endif;?>

			<?php wp_reset_query(); ?>
		<?php endif; ?>


	</div>
</div>