<?php if (function_exists('is_shop') and is_shop() or is_product_category()) { ?>
<form class="search alekids_search" role="search" method="get" id="searchform" action="<?php echo esc_url(site_url());?>">
	<input type="text" class="searchinput" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_html_e('Search products', 'alekids')?>" />
	<input type="hidden" name="post_type" value="product">

	<a href="#" class="alekids_submit_search">
		<div class="ale_search_icon">
			<div class="mask"></div>
			<div class="icon"></div>
		</div>
	</a>
</form>

<?php	} else { ?>
<form class="search alekids_search" role="search" method="get" id="searchform" action="<?php echo esc_url(site_url());?>">
	<input type="text" class="searchinput" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_html_e('Search posts', 'alekids')?>" />

	<a href="#" class="alekids_submit_search">
		<div class="ale_search_icon">
			<div class="mask"></div>
			<div class="icon"></div>
		</div>
	</a>
</form>
<?php } ?>