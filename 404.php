<?php get_header(); ?>
<div class="wrapper not_found_page">
	<!-- Content -->

	<h2 class="sub-title errorh1"><?php esc_html_e('Error 404','ale'); ?></h2>
	<p class="errorp"><?php esc_html_e('Sorry, but the page you\'re looking for has not found. Try checking the URL for errors, then hit the refresh button on your browser.','ale'); ?></p>

	<a href="<?php echo esc_js('javascript:history.go(-1)'); ?>" class="alekids_button">
		<div class="container">
			<span>Go Back</span>
			<span>
				<svg class="alekids_dashed">
					<rect x="5px" y="5px" rx="25px" ry="25px" width="162.365" height="53"></rect>
				</svg>
			</span>
		</div>
	</a>

</div>
<?php get_footer(); ?>