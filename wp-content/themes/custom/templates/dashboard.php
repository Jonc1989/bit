<?php
/**
 * Template Name: Dashboard
 */

get_header(); ?>

<style>
	.menu-container{
		background-color: #110f0e;
	}
</style>
	<div class="dashboard-template">

		<div class="container clear-pads">
			<h1><?php the_title() ?></h1>

			<h4>Hi <?php echo wp_get_current_user()->user_login ; ?></h4>
		</div>
	</div>
<?php get_footer(); ?>