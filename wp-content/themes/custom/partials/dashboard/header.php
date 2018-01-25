<div class="col-md-12 col-sm-12 col-xs-12 dashboard-header yellow-bg">
	<div class="balance">
		<div class="text">Ваш баланс</div>
		<div class="summ">2,0007</div>
		<img src="<?php bloginfo('template_directory');?>/resources/images/vikup_tokena.png">
	</div>

	<button class="btn- btn-success invest">Инвестировать</button>

	<div class="dropdown user-info">
		<button class="dropdown-toggle" type="button" data-toggle="dropdown">
			<span class="locale"><?php echo wp_get_current_user()->user_login ; ?></span>
			<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="<?php echo home_url() ?>/dashboard">
					<div class="menu-img-wrap">
						<img src="<?php bloginfo('template_directory');?>/resources/images/dropdown/personal_cabinet.png">
					</div>

					<div class="">личные данные инвестора </div>
				</a>
			</li>
			<li><a href="">

					<div class="menu-img-wrap">
						<img src="<?php bloginfo('template_directory');?>/resources/images/dropdown/change_password.png">
					</div>

					<div class="">Сменить пароль</div>
				</a></li>
			<li class="lang-switch-wrap">
					<div class="lang-switch">
						<?php foreach(qtrans_getSortedLanguages() as $language) { ?>
							<a href="<?php echo qtrans_convertURL($current_url, $language, false, true)?>">
								<div class="language">
									<?php echo $language; ?>
								</div>
							</a>
						<?php } ?>
					</div>
				<div class="menu-img-wrap">
					<img src="<?php bloginfo('template_directory');?>/resources/images/dropdown/arrow.png">
				</div>

					<div class="">Сменить язык</div>

			</li>
			<li><a class="" href="<?php echo wp_logout_url( site_url() ); ?>">
					<div class="menu-img-wrap">
						<img src="<?php bloginfo('template_directory');?>/resources/images/dropdown/exit.png">
					</div>

					<div class="">Выйти</div>

				</a> </li>

		</ul>
	</div>
</div>