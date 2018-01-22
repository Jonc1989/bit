<?php
$menu_locations = get_nav_menu_locations();
$menu = $menu_locations[ 'side-menu' ];
$menu = wp_get_nav_menu_items( $menu );
?>
<div class="col-md-3 col-sm-3 col-xs-3 side-menu clear-pads open">
    <a class="home-link" href="<?php echo home_url() ?>/dashboard">
        <div class="menu-logo">
            <img src="<?php bloginfo('template_directory');?>/resources/images/logo.png"
                 srcset="<?php bloginfo('template_directory');?>/resources/images/logo@3x.png 3x"
                 class="header-logo">
        </div>
    </a>
    <div class="menu">
        <?php $num = 0;?>
        <?php foreach ( $menu as $item ){
            $icon_class = '';
             switch  ($num) {
                case 0:
                    $icon_class = 'cctv';
                    break;
                case 1:
                    $icon_class = 'documents';
                    break;
                case 2:
                    $icon_class = 'rules';
                    break;
                case 3:
                    $icon_class = 'cashout';
                    break;
                case 4:
                    $icon_class = 'oferta';
                    break;
                case 5:
                    $icon_class = 'news';
                    break;
            }
            ?>
            <a href="<?php echo $item->url;?>" class="<?php echo $icon_class; ?>">
                <div class="menu-item">
                    <div class="li-img-wrap">
                        <!--<img src="<?php bloginfo('template_directory');?>/resources/images/marketing.png">-->
                        <div class="menu-img"></div>
                    </div>
                    <p class="title-text"><?php echo $item->title;?></p>
                </div>
            </a>
        <?php $num++; } ?>


    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 menu-collapse">
        <div class="colapse-text">Collapse</div>
        <div class="colapse-icon" src="<?php bloginfo('template_directory');?>/resources/images/arrow.png"></div>
    </div>
</div>