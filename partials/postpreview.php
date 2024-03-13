<?php
$archive_year = get_the_time('Y');
$archive_month = get_the_time('m');
$archive_day = get_the_time('d');
$post_classes = 'alekids_blog_preview';
if (!empty($args['post_class'])) {
	$post_classes .= ' '.$args['post_class'];
}
if(!get_the_post_thumbnail( get_the_ID() )) {
	$post_classes .= ' no_featured_image';
}
?>

<article <?php post_class($post_classes); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
	<?php if(get_the_post_thumbnail( $post->ID, 'post-smallimage')) { ?>
	<div class="featured_image">
		<?php
		$alekids_post_format = get_post_format();
			if ($alekids_post_format == 'video') {
				//Get image
				if(!empty($args['featured_image'])) {
			echo get_the_post_thumbnail( $post->ID, $args['featured_image']); 
		}
			//Get video button
			
			get_template_part('partials/format/video');
			} elseif($alekids_post_format == 'gallery') {
				//Get slider
					get_template_part('partials/format/gallery','', $args['featured_image']);
				} else {
					//Get image
					if (!empty($args['featured_image'])) {
						echo '<div class="featured_image_holder"> <a href="'.esc_url(get_the_permalink()).'">';
							echo get_the_post_thumbnail($post->ID, $args['featured_image']);
						echo '</a></div>';
				}
			} 
		?>
		<span class="category font_one"><?php the_category(' '); ?></span>
	</div>
	<?php } ?>
	<span class="post_info"><?php esc_html_e('By', 'alekids');?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>//osted on <?php echo '<a href="'.esc_attr(get_day_link($archive_year, $archive_month, $archive_day)).'">' .get_the_date(). '</a>'; ?></span>
	<h3><a href="<?php echo esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h3>
	<?php 
	if (!empty($args['post_class']) and $args['post_class'] == 'bigpost') {
		echo wp_kses_post(ale_trim_excerpt(41)); 
	} else {
		echo wp_kses_post(ale_trim_excerpt(23)); 
	}
	?>
	<a class="read_more_blog font_one" href="<?php echo esc_url(the_permalink()); ?>"><?php esc_html_e('Read More','alekids'); ?></a>
</article>