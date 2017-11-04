<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group stylish-input-group">
		<input type="search" class="form-control" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s">
            <span class="input-group-addon">
                <button type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
	</div>
</form>
