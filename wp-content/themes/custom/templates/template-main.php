<?php
/**
 * Template Name: Main
 */
get_header(); ?>

	<div class="main-template">

		<?php get_template_part('partials/banner');?>
		<?php get_template_part('partials/counter');?>

		<?php get_template_part('partials/video');?>
		<?php get_template_part('partials/problem');?>
		<?php get_template_part('partials/subscribe');?>
		<?php get_template_part('partials/roadmap');?>
		<?php get_template_part('partials/contact');?>
		<?php get_template_part('partials/team');?>
		<?php get_template_part('partials/partners');?>


		
	</div>
<?php get_footer(); ?>

<script>
	jQuery(document).ready(function () {
		checkCounter()
	});
</script>
