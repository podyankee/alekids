<div class="alekids_post_gallery">
	<?php
	wp_enqueue_script('slick');

		//$args - image size parameter
		$alekids_images = get_post_meta($post->ID, 'ale_gallery_id', true);
		if ($alekids_images) {
			foreach ($alekids_images as $attachment) {
				echo "<div>".wp_get_attachment_image($attachment, $args)."</div>";
			}
		}
	?>
</div>