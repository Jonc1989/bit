<?php
/**
 * Template Name: Documents
 */
get_header(); ?>

	<div class="document-template">
		<?php get_template_part('partials/document-top');?>
		<?php get_template_part('partials/counter');?>
	</div>
<?php get_footer(); ?>

<script>
    jQuery(document).ready(function () {
        checkCounter()
    });
</script>