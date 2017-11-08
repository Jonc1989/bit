<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
	<!--<link href="<?php bloginfo('template_directory');?>/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />-->

	<?php wp_head();?>
	
</head>
<body>

<div class="col-md-12 clear-pads">

<?php

$menu_locations = get_nav_menu_locations();
$menu = $menu_locations[ 'primary' ];
$menu = wp_get_nav_menu_items( $menu );

?>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">
								<div class="logo">
									<img src="<?php bloginfo('template_directory');?>/resources/images/vector-smart-object-9.png"
									     srcset="<?php bloginfo('template_directory');?>/resources/images/vector-smart-object-9@2x.png 2x,
                                            <?php bloginfo('template_directory');?>/resources/images/vector-smart-object-9@3x.png 3x"
									     class="header-logo">
								</div>
							</a>
						</li>

						<?php foreach ( $menu as $item ){?>
							<li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
						<?php } ?>

						<li><a href="" class="" data-toggle="modal" data-target="#registrationModal">Registration</a></li>
						<li><a  class="" data-toggle="modal" data-target="#loginModal">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

</div>