<?php 
		
		wp_enqueue_style('venobox');
		wp_enqueue_script('venobox');

		$alekids_video_link = '';

		if (ale_get_meta('video_link')) {
			$alekids_video_link = ale_get_meta('video_link');
		}

		if (!empty($alekids_video_link)) {
			echo '<div class="video_post"><a href="'.esc_url($alekids_video_link).'" data-overlay="rgba(95, 164, 255, 0.8)" data-autoplay="true" data-vbtype="video" class="venobox open_video"><span class="video_icon"></span></a></div>';
		}
?>