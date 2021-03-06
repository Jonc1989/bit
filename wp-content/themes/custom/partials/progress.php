<div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="progress" style="background-color: #000000">
	<div class="container">
		<div class="col-md-6 col-sm-6 col-xs-12 progressbar">


			<div class="top-title">
				<p class="first"><?php echo __( 'Soft Cap', 'preico' ) ?> </p>
				<p class="second"><?php echo __( '2000 ETH goal', 'preico' ) ?></p>
			</div>
			<div class="granulas">

				<div class="circle wrapper">


					<div class="bg">
						<div class="coin">
							<img class="front" src="<?php bloginfo('template_directory');?>/resources/images/token2.png">
							<img class="back" src="<?php bloginfo('template_directory');?>/resources/images/token2.png">
						</div>
					</div>



				</div>



				<div class="opts-wrap">
					<div class="header-opt yellow-bg">
						<div class="header-opt-content right first">
							<img class="icon5" src="<?php bloginfo('template_directory');?>/resources/images/progress/wreckingball.png">
						</div>
					</div>
					<div class="header-opt yellow">
						<div class="header-opt-content right">
							<img class="icon6" src="<?php bloginfo('template_directory');?>/resources/images/progress/excavator.png">
						</div>
					</div>
					<div class="header-opt yellow">
						<div class="header-opt-content">
							<img class="icon1" src="<?php bloginfo('template_directory');?>/resources/images/progress/documents.png">
						</div>
					</div>
					<div class="header-opt yellow">
						<div class="header-opt-content fourth">

							<img class="icon2" src="<?php bloginfo('template_directory');?>/resources/images/progress/workbench.png">
						</div>
					</div>
					<div class="header-opt yellow ">
						<div class="header-opt-content">
							<img class="icon3" src="<?php bloginfo('template_directory');?>/resources/images/progress/flag.png">
						</div>
					</div>
					<div class="header-opt yellow">
						<div class="header-opt-content right">

							<img class="icon4" src="<?php bloginfo('template_directory');?>/resources/images/progress/camera.png">
						</div>
					</div>

				</div>

			</div>
			<div class="bottom-title">
				<p class="first"><?php echo __( 'Hard Cap', 'preico' ) ?></p>
				<p class="second"><?php echo __( '4000 ETH goal', 'preico' ) ?></p>
			</div>
			<div class="curently-recived"><?php echo __( 'Получено инвестиций', 'preico' ) ?><br><span class="yellow"></span></div>
		</div>


		<div class="col-md-6 col-sm-6 col-xs-12 wallet">

			<div class="">
				<div class="form-group">
					<label for="usr" style="display: block;"><?php echo __( 'Введите желаемую сумму токенов:', 'preico' ) ?></label>
					<input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/^0+/, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  class="form-control num-tocken" id="usr" style="width: 200px; height: 31px; display: inline-block;">
					<button class="btn eth_calc" style="background-color: #6fb600;margin-right: 15px;margin-left: 15px;">
						<span class=""><?php echo __( 'Расчитать', 'preico' ) ?></span>
					</button>

					<p class="must_pay" style="margin-top: 11px; display: none;"><?php echo __( 'Вы должны оплатить', 'preico' ) ?> <span>0.45845678</span></p>
				</div>
			</div>

			<span><?php echo __( 'Номер кошелька', 'preico' ) ?></span>
			<button class="btn copy" style="background-color: #6fb600;">

                    <span class="">
                        <?php echo __( 'Копировать', 'preico' ) ?>
                    </span>
			</button>

			<button class="btn openqr" style="background-color: #6fb600;"
			        data-toggle="modal" data-target="#qrModal">
				<?php echo __( 'Oткрить QR код', 'preico' ) ?>
			</button>


			<div class="col-md-12 clear-pads wallet-nr">
				<input id="clipboard-text" class="yellow" type="text" name="clipboard" value="<?php echo get_field( 'wallet_nr' ); ?>">

			</div>

			<!--<div class="col-md-12 clear-pads instruction">
				<?php if( get_field( 'instruction_text' )){?>
					<?php echo get_field( 'instruction_text' ); ?>
				<?php } ?>
			</div>-->
			<div class="col-md-12 clear-pads instruction-file">
				<?php if( get_field( 'instruction_link' )){?>
					<a target="_blank" href="<?php echo get_field( 'instruction_link' ); ?>">
						<?php echo get_field( 'instruction_text' ); ?>
					</a>
				<?php } ?>
			</div>


			<p class="bold"><?php echo __( 'Minimal 0.1 ETH', 'preico' ) ?></p>

			<p class="font15"><?php echo __( 'Для инвестирования, отправьте Эфир на официальный
                смарт контракт краудсейла.Нельзя переводить с
                обменников, только ETH кошельки. При транзакции,
                пожалуйста, ставте GAS LIMIT 200000.', 'preico' ) ?>
			</p>
			<div class="col-md-12 col-sm-12 col-xs-12 clear-pads divided-blocks">
				<div class="col-md-6 col-sm-12 col-xs-6 clear-pads border-right">
					<p class="font20"><?php echo get_field( 'investment_title' ); ?> <span class="bold"><?php echo get_field( 'sc_how_much' ); ?></span></p>
					<div class="col-md-12 clear-pads opts">
						<span><?php echo get_field( 'sc_equal' ); ?> </span><div class="black yellow-bg bold"><?php echo get_field( 'sc_bonus' ); ?></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-6 no-pad-right">
					<p class="font20"><?php echo get_field( 'hc_title' ); ?> <span class="bold"><?php echo get_field( 'hc_how_much' ); ?></span></p>
					<div class="col-md-12 clear-pads opts">
						<span><?php echo get_field( 'hc_equal' ); ?> </span><div class="black yellow-bg bold"><?php echo get_field( 'hc_bonus' ); ?></div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 clear-pads center-horizontaly" style="margin-bottom: 15px;">
				<div class="inline-block small-token">
					<img src="<?php bloginfo('template_directory');?>/resources/images/token2.png">
				</div>
				<div class="inline-block yellow ">
					1 Euro = <span class="bold">1 WPC</span>
				</div>
			</div>
			<div class="">
                <?php echo __( 'Стоимость 1 ETH = ', 'preico' ) ?><span class="eth_txt">
			</div>
		</div>
	</div>

</div>


<div class="modal fade" id="qrModal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>

				<div class="col-md-12 clear-pads qr">
					<?php if( get_field( 'qr' )){?>
						<img class="qrcode" src="<?php echo get_field( 'qr' ); ?>">
					<?php } ?>

				</div>
			</div>
		</div>

	</div>
</div>