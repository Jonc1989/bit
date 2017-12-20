<div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="banner">

    <?php get_template_part('partials/menu');?>



	<div class="container banner-container">

		<div class="col-md-6 col-sm-6 col-xs-12 left-side">
			<div class="yellow-text yellow-bg"><?php echo get_bloginfo( 'name' ) ?></div>
			<h1><?php echo get_bloginfo( 'description' ) ?></h1>
			<p><?php echo __( 'Индустрия по производству пеллет в блокчейне', 'preico' ) ?></p>

			<div class="col-md-12 clear-pads recycle">
				<img src="<?php bloginfo('template_directory');?>/resources/images/recycle.png">
				<span>100%</span>
			</div>


			<div class="col-md-12 clear-pads head-description">
				<p><?php echo __( 'Экологически чистое, безотходное производство, замкнутого цикла из бозобнобляемых источников энергии и применением новейший ИТ технологий', 'preico' ) ?></p>
			</div>

			<div class="col-md-12 clear-pads welcome-links">
				<div class="col-md-6 col-sm-6 clear-pads">
					<a class="btn join-link" href="/login"><?php echo __( 'УЧАСТВОВАТЬ', 'preico' ) ?></a>
				</div>
				<div class="col-md-6 col-sm-6 clear-pads soc-icon">
					<a target="_blank" href="<?php echo get_option( 'vk_input' );?>" class="vk"><img src="<?php bloginfo('template_directory');?>/resources/images/icons/vk@2x.png"> </a>
					<a target="_blank" href="<?php echo get_option( 'facebook_input' );?>" class="fb"><img src="<?php bloginfo('template_directory');?>/resources/images/icons/fb@2x.png"></a>
					<a target="_blank" href="<?php echo get_option( 'telegraph_input' );?>" class="telegraph"><img src="<?php bloginfo('template_directory');?>/resources/images/icons/telegraph@2x.png"></a>
				</div>
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
                        <div class="first-title">
	                        <?php echo __( 'Когенерационная станция - электрическая мощность 4,5 МWТ - тепловая мощность 14,74 МWТ', 'preico' ) ?>
                        </div>
                    </div>


                    <div class="top-second">
                        <div class="second-title">
	                        <?php echo __( 'Завод древесных пеллет - мощность 120 000 тонн/год', 'preico' ) ?>
                        </div>
                        <div class="third-title">
	                        <?php echo __( 'Mайнинг - фермa 4,5 MWT 6750 Th/s', 'preico' ) ?>
                        </div>
                    </div>

                    <div class="bottom-first">
                        <div class="fourth-title">

	                        <?php echo __( 'Лесозавод - мощность 120 000 м3/год', 'preico' ) ?>
                        </div>
                        <div class="fifth-title">
	                        <?php echo __( 'Тепличный комплекс выращивание 2 млн саженцев ели /год', 'preico' ) ?>

                        </div>
                    </div>
                    <div class="bottom-second">
                        <div class="sixth-title">
	                        <?php echo __( 'Лесные ресурсы - площадь лесного фонда 71 967 га', 'preico' ) ?>

                        </div>
                    </div>
				</div>
			</div>
			
			<div class="details-sm">
				<div>
					<img src="<?php bloginfo('template_directory');?>/resources/images/wood.png">
					<p><?php echo __( 'Лесные ресурсы - площадь лесного фонда 71 967 га', 'preico' ) ?></p>
					<img class="bullet" src="<?php bloginfo('template_directory');?>/resources/images/bullet.png">
				</div>

				<div>
					<img src="<?php bloginfo('template_directory');?>/resources/images/factory-2.png">
					<p><?php echo __( 'Лесозавод - мощность 120 000 м3/год', 'preico' ) ?></p>
					<img class="bullet" src="<?php bloginfo('template_directory');?>/resources/images/bullet.png">
				</div>

				<div>
					<img src="<?php bloginfo('template_directory');?>/resources/images/factory.png">
					<p><?php echo __( 'Завод древесных пеллет - мощность 120 000 тонн/год', 'preico' ) ?></p>
					<img class="bullet" src="<?php bloginfo('template_directory');?>/resources/images/bullet.png">
				</div>

				<div>
					<img src="<?php bloginfo('template_directory');?>/resources/images/electr-factory.png">
					<p><?php echo __( 'Когенерационная станция - электрическая мощность 4,5 МWТ - тепловая мощность 14,74 МWТ', 'preico' ) ?></p>
					<img class="bullet" src="<?php bloginfo('template_directory');?>/resources/images/bullet.png">
				</div>

				<div>
					<img src="<?php bloginfo('template_directory');?>/resources/images/farm.png">

					<p><?php echo __( 'Mайнинг - фермa 4,5 MWT 6750 Th/s', 'preico' ) ?></p>
					<img class="bullet" src="<?php bloginfo('template_directory');?>/resources/images/bullet.png">
				</div>

				<div>
					<img src="<?php bloginfo('template_directory');?>/resources/images/warmhouse.png">

					<p><?php echo __( 'Тепличный комплекс выращивание 2 млн саженцев ели /год', 'preico' ) ?></p>
				</div>
			</div>
			
		</div>
	</div>
</div> 