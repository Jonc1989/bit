<div class="col-md-12 clear-pads" id="video">
	<div class="container">
		<h1 class="title">Инвестировать в реальное предприятие</h1>
		<div class="col-md-6">
			<a href="" class="" data-toggle="modal" data-target="#videoModal">


				<?php
				$video_id = null;
				if( strpos( 'https://www.youtube.com/embed/iXAbte4QXKs', "=") != 0 ){
					$video_id  = substr( 'https://www.youtube.com/embed/iXAbte4QXKs', strpos( 'https://www.youtube.com/embed/iXAbte4QXKs', "=") + 1);
				}else{
					$parts = explode("/", 'https://www.youtube.com/embed/iXAbte4QXKs' );
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

								src="https://www.youtube.com/embed/iXAbte4QXKs"
								frameborder="0" gesture="media"
								allowfullscreen></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="col-md-6 text-block">
			Обратный выкуп опционов WPCoin начнется через 15 месяцев после окончания
			сбора средств в размере, 50% от прибыли исходя из квартальных отчетов.
			Также инвесторы получат право обмена WPCoin на соответствующее количество
			древесных гранул исходя из расчета  1тонна древесных гранул =100 WPCoin = на условиях FCA.


		</div>
		<div class="col-md-6">
			<div class="col-md-12 clear-pads opts">
				<div class="yellow-text yellow-bg">Pre ico</div><span>1 ETH = 600WPCOIN</span>
			</div>
			<div class="col-md-12 clear-pads opts">
				<div class="yellow-text yellow-bg">Pre ico</div><span>1 ETH = 600WPCOIN</span>
			</div>
			<div class="col-md-12 clear-pads opts">
				<span>1 WPCOIN = 1 EUR</span>
			</div>
		</div>
	</div>

</div>