	<div class="alekids_search_modal">
		<form class="search" role="search" method="get" action="<?php echo esc_url(site_url());?>">
			<span class="close_info font_one"><?php echo esc_html_e( 'Press ESC to close search', 'alekids' ); ?></span>
			<input type="text" class="font_one" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_html_e('type here to search...', 'alekids')?>" />
			<input type="submit" class="font_one" value="<?php esc_html_e('Search', 'alekids')?>" />
		</form>
	</div>