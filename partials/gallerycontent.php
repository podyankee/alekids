<?php $alekids_images = get_post_meta($post->ID, 'ale_gallery_id', true); ?>

<div class="top_gallery_section">
	<div class="left_content">
		<h4><?php the_title(); ?></h4>
		<div class="gallery_meta font_one">
			<?php if(ale_get_meta('author')) {
				echo '<span class="meta_item"><span>'.esc_html__('Author: ', 'alekids').'</span>'.esc_html(ale_get_meta('author')).'</span>';
			}
			?>
			<?php if(ale_get_meta('year')) {
				echo '<span class="meta_item"><span>'.esc_html__('Year: ', 'alekids').'</span>'.esc_html(ale_get_meta('year')).'</span>';
			}
			?>
			<span class="meta_item">
				<span><?php esc_html_e('Category: ', 'alekids'); ?></span> <?php
					$alekids_galleries_cats = get_the_terms(get_the_ID(), 'gallery-category');
					if ($alekids_galleries_cats) {
						foreach($alekids_galleries_cats as $cat) {
							echo '<a href="'.esc_url(get_term_link($cat->slug, 'gallery-category')).'">'.$cat->name.'</a>';
						}
					}
				?>
			</span>
			<?php
				if (!empty($alekids_images)) { ?>
			<span class="meta_item">
				<span><?php esc_html_e('Photos: ', 'alekids'); ?></span>

				<?php echo count($alekids_images); ?>
			</span>
			<?php } ?>
			<?php if(ale_get_meta('location: ')) {
				echo '<span class="meta_item"><span>'.esc_html__('Location:', 'alekids').'</span>'.esc_html(ale_get_meta('location')).'</span>';
			}
			?>
			<span class="meta_item">
				<span><?php esc_html_e('Share: ', 'alekids'); ?> <?php if(function_exists('ale_get_share')) { ?></span>

				<a href="<?php esc_url(ale_get_share('fb')); ?>" onclick="window.open(this.href, 'Share this post', 'width=600, height=300'); return false">
					<?php esc_html_e('fb', 'alekids'); ?>
				</a> /
				<a href="<?php esc_url(ale_get_share('twi')); ?>" onclick="window.open(this.href, 'Share this post', 'width=600, height=300'); return false">
					<?php esc_html_e('tw', 'alekids'); ?>
				</a> /
				<a href="<?php esc_url(ale_get_share('pin')); ?>" onclick="window.open(this.href, 'Share this post', 'width=600, height=300'); return false">
					<?php esc_html_e('pin', 'alekids'); ?>
				</a> /
				<a href="<?php esc_url(ale_get_share('vk')); ?>" onclick="window.open(this.href, 'Share this post', 'width=600, height=300'); return false">
					<?php esc_html_e('vk', 'alekids'); ?>
				</a>
				<?php } ?>
			</span>
		</div>
	</div>
	<div class=" alekids_gallery_slider">
		<?php
		wp_enqueue_script('slick');

			if ($alekids_images) {
				foreach ($alekids_images as $attachment) {
					echo "<div>".wp_get_attachment_image($attachment, 'gallery-slider')."</div>";
				}
			}
		?>
	</div>
</div>
<div class="bottom_gallery_section">
	<?php the_content(); ?>
	<div class="colored_line gallery_single_bottom">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>