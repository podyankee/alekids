<article <?php post_class('gallery_item'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
	<div class="gallery_content">
		<h3><a href="<?php esc_attr(the_permalink()); ?>"><?php the_title(); ?></a></h3>
		<?php echo wp_kses_post(ale_trim_excerpt(16)); ?>
		<a class="read_more font_one" href="<?php esc_attr(the_permalink()); ?>"><?php esc_html_e('Take a look', 'alekids'); ?></a>
	</div>
	<?php if(get_the_post_thumbnail(get_the_ID(), 'gallery-square')){ ?>
	<div class="featured_image">
		<a href="<?php esc_attr(the_permalink()); ?>">
			<?php echo get_the_post_thumbnail(get_the_ID(), 'gallery-square'); ?>
		</a>
		<div class="gallery_icon">
			<div class="icon"></div>
		</div>
	</div>
	<?php } ?>
</article>