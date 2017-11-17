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

                    <?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
                    <?php if($image) { ?>
                        <div class="partner col-md-3 clear-pads" style="background: url(<?php echo $image; ?>)no-repeat center center;
                            -webkit-background-size: contain;
                            -moz-background-size: contain;
                            -o-background-size: contain;
                            background-size: contain;">
                    <?php } ?>



                    </div>
                <?php endwhile; ?>
            </div>
		<?php endif; ?>

	</div>
</div>
<script>

    var slider;
    function initSlider(){

        var settings = {
            slideWidth:150,
            minSlides:3,
            maxSlides: 5,
            moveSlides:1,
            speed:1000,
            useCSS: false,
            pager:!1,
            pause:3000,
            infiniteLoop:!0,
            controls:!0,
            slideMargin:20,
            auto:!0,
            hideControlOnEnd: true
        };

        slider = jQuery('.partners-wrap').bxSlider( settings );
    }

    window.onload = function(){
        initSlider();
//
//        jQuery('.bx-pager-item a').click(function(e){
//            slider.stopAuto();
//            slider.startAuto();
//        });

        //comment stopAuto if problems

    }
</script>