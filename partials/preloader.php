<?php



if(ale_get_option('preloder') == 'enable') { ?>

<div class="alekids_preloader_content">
	<div class="alekids_content">
		<div class="planet">
			<div class="ring"></div>
			<div class="cover-ring"></div>
			<div class="spots">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>

			</div>
		</div>
		<p><?php esc_html_e('loading', 'alekids'); ?></p>
	</div>
</div>

<?php  }?>