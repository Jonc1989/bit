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