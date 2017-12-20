<div class="col-md-12 col-sm-12 col-xs-12 clear-pads" id="video">
	<div class="container">
		<h1 class="title"><?php echo  __( 'Инвестировать в реальное предприятие', 'preico' );?></h1>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<a href="" class="" data-toggle="modal" data-target="#videoModal">


				<?php
				$video_id = null;
				if( strpos( get_field( 'video_url' ), "=") != 0 ){
					$video_id  = substr( get_field( 'video_url' ), strpos( get_field( 'video_url' ), "=") + 1);
				}else{
					$parts = explode("/", get_field( 'video_url' ) );
					$video_id = $parts[ count( $parts ) - 1 ];
				}

				$preview = '';
				if(@file_get_contents("https://img.youtube.com/vi/".$video_id."/maxresdefault.jpg"))
				{
					$preview = "https://img.youtube.com/vi/".$video_id."/maxresdefault.jpg";
				}
				elseif( @file_get_contents("https://img.youtube.com/vi/".$video_id."/maxresdefault.jpg") )
				{
					$preview = "https://img.youtube.com/vi/".$video_id."/sddefault.jpg";
				}else{
					$preview = "https://img.youtube.com/vi/".$video_id."/0.jpg";
				}


				?>

				<div class="col-md-12 clear-pads video-preview" style="background: url(<?php echo $preview; ?>)no-repeat center center;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;">

				</div>
			</a>


			<div class="modal fade" id="videoModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-body"><button type="button" class="close" data-dismiss="modal">&times;</button>
							<iframe

								src="<?php echo get_field( 'video_url' );?>"
								frameborder="0" gesture="media"
								allowfullscreen></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12 text-block">
			<?php echo  __( 'Обратный выкуп опционов WPCoin начнется через 15 месяцев после окончания сбора средств в размере, 50% от прибыли исходя из квартальных отчетов. Также инвесторы получат право обмена WPCoin на соответствующее количество древесных гранул исходя из расчета  1тонна древесных гранул =100 WPCoin = на условиях FCA.', 'preico' );?>
		</div>

		
	</div>

</div>