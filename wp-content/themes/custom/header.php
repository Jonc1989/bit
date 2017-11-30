<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-signin-client_id" content="833642584244-rvpqmu289ir75ft98p1o3i2hl6ru4u33.apps.googleusercontent.com">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/resources/vendor/bxslider/dist/jquery.bxslider.min.css" rel="stylesheet">
	<!--<link href="<?php bloginfo('template_directory');?>/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />-->
	<script src="//vk.com/js/api/openapi.js?150" type="text/javascript"></script>
	<?php wp_head();?>
	<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
</head>
<body>

<script>
	var ajaxurl  = '<?php echo get_site_url(); ?>/wp-admin/admin-ajax.php';
	var domain  = '<?php echo get_site_url(); ?>';
</script>
