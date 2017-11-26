<div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="banner">

    <div class="clear-pads menu-container">

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
                            <li class="active"><a href="<?php echo home_url() ?>">
                                    <div class="logo">
                                        <img src="<?php bloginfo('template_directory');?>/resources/images/logo.png"
                                             srcset="<?php bloginfo('template_directory');?>/resources/images/logo@3x.png 3x"
                                             class="header-logo">
                                    </div>
                                </a>
                            </li>

                            <?php foreach ( $menu as $item ){?>
                                <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                            <?php } ?>

                            <?php if( is_user_logged_in() ){ ?>
                                <li class="dashboard-link"><a href="/dashboard" >Dashboard</a></li>

                            <?php }else { ?>
                                <li class="register-link"><a href="" data-toggle="modal" data-target="#registrationModal">Registration</a></li>
                                <li class="login-link"><a href="" class="" data-toggle="modal" data-target="#loginModal">Login</a></li>
                            <?php } ?>


                            <li>
                                <?php
                                global $q_config, $wp; $image_path = null;
                                $current_url = home_url(add_query_arg(array(),$wp->request)); ?>

                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span class="locale"><?php echo qtranxf_getLanguage(); ?></span>
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <?php foreach(qtrans_getSortedLanguages() as $language) { ?>
                                            <li><a href="<?php echo qtrans_convertURL($current_url, $language, false, true)?>"><?php echo $language; ?></a></li>
                                        <?php } ?>
                                        <?php if( is_user_logged_in() ){ ?>
                                            <li><a class="" href="<?php echo wp_logout_url( site_url() ); ?>">Logout</a> </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>


                    </div>
                </div>
            </nav>
        </div>

    </div>



	<div class="container banner-container">

		<div class="col-md-6 col-sm-6 col-xs-12 left-side">
			<div class="yellow-text yellow-bg"><?php echo get_bloginfo( 'name' ) ?></div>
			<h1><?php echo get_bloginfo( 'description' ) ?></h1>
			<p>Индустрия по производству
				пеллет в блокчейне</p>

			<div class="col-md-12 clear-pads recycle">
				<img src="<?php bloginfo('template_directory');?>/resources/images/recycle.png">
				<span>100%</span>
			</div>

			<div class="col-md-12 clear-pads welcome-links">
				<div class="col-md-6 col-sm-6 clear-pads">
					<a class="btn join-link" href="/login">УЧАСТВОВАТЬ</a>
				</div>
				<div class="col-md-6 col-sm-6 clear-pads soc-icon">
					<a href="#" class="vk"><img src="<?php bloginfo('template_directory');?>/resources/images/icons/vk@2x.png"> </a>
					<a href="#" class="fb"><img src="<?php bloginfo('template_directory');?>/resources/images/icons/fb@2x.png"></a>
					<a href="#" class="telegraph"><img src="<?php bloginfo('template_directory');?>/resources/images/icons/telegraph@2x.png"></a>
				</div>
			</div>
			<div class="col-md-12 clear-pads head-description">
				<p>Экологически чистое, безотходное производство,
					замкнутого цикла из бозобнобляемых источников
					энергии и применением новейший ИТ технологий</p>
			</div>
		</div>
		<div class="col-md-6 col-sm-6  col-xs-12 right-side">
		
			<div class="cycle">
				<img class="scheme" src="<?php bloginfo('template_directory');?>/resources/images/cycle.png">
                <div class="coin-wrap">
                    <img src="<?php bloginfo('template_directory');?>/resources/images/token2.png">
                </div>
				<div class="titles">
                    <div class="top-first">
                        <div class="first-title">ssssssssss</div>
                    </div>
                    <div class="top-second">
                        <div class="second-title">ssssssssss</div>
                        <div class="third-title">ssssssssss</div>
                    </div>

                    <div class="bottom-first">
                        <div class="fourth-title">ssssssssss</div>
                        <div class="fifth-title">ssssssssss</div>
                    </div>
                    <div class="bottom-second">
                        <div class="sixth-title">ssssssssss</div>
                    </div>
				</div>
			</div>
			
		</div>
	</div>
</div> 