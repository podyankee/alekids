<?php get_header(); ?>

<div class="wrapper">
	<div class="posts_grid">
		<?php
		$alekids_blog_grid = ['featured_image' => 'small', 'post_class'=>'smallpost'];
		$i=1;
		
		if (have_posts()) : while (have_posts()) : the_post();
					if ($i == 4) {
						$alekids_blog_grid['featured_image'] = 'post-bigimage';
						$alekids_blog_grid['post_class'] = 'bigpost';
					} else {
						$alekids_blog_grid['featured_image'] = 'post-smallimage';
						$alekids_blog_grid['post_class'] = 'smallpost';
					}
					get_template_part('partials/postpreview', '', $alekids_blog_grid);
					$i++;
					endwhile; else: 
							get_template_part('partials/notfound');
					endif; ?>

	</div>
	<?php get_template_part('partials/pagination'); ?>
</div>

<?php get_footer(); ?>