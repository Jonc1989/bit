<?php get_header(); ?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads">

	<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() );

	endwhile; endif;
	?>

</div>
	<?php get_footer(); ?>
