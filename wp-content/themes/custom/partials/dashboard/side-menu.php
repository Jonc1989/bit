<?php
$menu_locations = get_nav_menu_locations();
$menu = $menu_locations[ 'side-menu' ];
$menu = wp_get_nav_menu_items( $menu );
?>
<div class="col-md-3 col-sm-3 col-xs-3 side-menu clear-pads open">
    <a class="home-link" href="<?php echo home_url() ?>">
        <div class="menu-logo">
            <img src="<?php bloginfo('template_directory');?>/resources/images/logo.png"
                 srcset="<?php bloginfo('template_directory');?>/resources/images/logo@3x.png 3x"
                 class="header-logo">
        </div>
    </a>
    <div class="menu">

        <?php foreach ( $menu as $item ){?>
            <a href="<?php echo $item->url;?>">
                <div class="menu-item">
                    <div class="li-img-wrap">
                        <!--<img src="<?php bloginfo('template_directory');?>/resources/images/marketing.png">-->
                        <div class="menu-img"></div>
                    </div>
                    <p class="title-text"><?php echo $item->title;?></p>
                </div>
            </a>
        <?php } ?>


    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 menu-collapse">
        <div class="colapse-text">Collapse</div>
        <img class="colapse-icon" src="<?php bloginfo('template_directory');?>/resources/images/vikup_tokena.png">
    </div>
</div>