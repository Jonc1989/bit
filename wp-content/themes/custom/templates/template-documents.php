<?php
/**
 * Template Name: Documents
 */
get_header(); ?>
	<div class="document-template">
		<?php get_template_part('partials/document-top');?>
		<div id="map"></div>
		<?php get_template_part('partials/counter');?>
	</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZEaLSoCJuIer6-0P38ypVtB3-zJX2SJE&libraries=places&language=en"
        async defer></script>
<?php get_footer(); ?>

<script>
    jQuery(document).ready(function () {
        checkCounter()
	    initMap();
    });
</script>