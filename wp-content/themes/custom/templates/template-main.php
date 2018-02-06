<?php
/**
 * Template Name: Main
 */
get_header(); ?>

<div class="main-template">

	<?php get_template_part('partials/banner');?>
	<?php get_template_part('partials/counter');?>
	<?php get_template_part('partials/progress');?>

	<?php get_template_part('partials/problem');?>

	<?php get_template_part('partials/news');?>
	<?php get_template_part('partials/subscribe');?>
	<?php get_template_part('partials/roadmap');?>
	<?php get_template_part('partials/contact');?>
	<?php get_template_part('partials/team');?>
	<?php get_template_part('partials/partners');?>



</div>
<?php get_footer(); ?>

<script>
	jQuery(document).ready(function () {
		checkCounter();

		jQuery.getJSON( "http://woodpellets.io/eth/ico.php", function( data )
		{
			console.log(data);

			var eth_eur     = data['eth_eur'];
			var balance_eth = data['balance_eth'];
			var updated     = data['updated'];

			var sum_eur = eth_eur * balance_eth;

			var date = new Date(updated * 1000);
			var tm = ('0' + date.getDate()).slice(-2) + '.' + ('0' + (date.getMonth() + 1)).slice(-2) + '.' + date.getFullYear() + ' ' + ('0' + date.getHours()).slice(-2) + ':' + ('0' + date.getMinutes()).slice(-2);

			jQuery('.curently-recived span').text(sum_eur.toFixed(2) + ' EUR на ' + tm +  ' MSK (UTC+3)');
			jQuery('.eth_txt').text((+eth_eur).toFixed(2) + ' EUR на ' + tm +  ' MSK (UTC+3)');
		});

		jQuery('.eth_calc').click(function()
		{
			jQuery.getJSON( "http://woodpellets.io/eth/ico.php", function( data )
			{
				console.log(data);

				var eth_eur     = data['eth_eur'];
				var balance_eth = data['balance_eth'];
				var updated     = data['updated'];

				var sum_eur = eth_eur * balance_eth;

				var date = new Date(updated * 1000);
				var tm = ('0' + date.getDate()).slice(-2) + '.' + ('0' + (date.getMonth() + 1)).slice(-2) + '.' + date.getFullYear() + ' ' + ('0' + date.getHours()).slice(-2) + ':' + ('0' + date.getMinutes()).slice(-2);

				jQuery('.curently-recived span').text(sum_eur.toFixed(2) + ' EUR на ' + tm +  ' MSK (UTC+3)');
				jQuery('.eth_txt').text((+eth_eur).toFixed(2) + ' EUR на ' + tm +  ' MSK (UTC+3)');
				jQuery('.must_pay').css('display', 'block');

				var crat = 3;

				if (sum_eur < 250000)
				{
					crat = 4;
				}

				var all = (jQuery('.num-tocken').val() / crat) / eth_eur;

				jQuery('.must_pay span').text( (all).toFixed(8) + ' ETH (' + (jQuery('.num-tocken').val() / crat).toFixed(2) + ' EUR)'  );
			});
		});


	});
</script>
