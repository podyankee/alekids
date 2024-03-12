<?php get_header(); ?>
<div class="alekids_galleries">
	<?php if (have_posts()) : while (have_posts()) : the_post();
		get_template_part('partials/gallery_preview' );
	endwhile; else:
		get_template_part('partials/notfound'); 
	endif; ?>

</div>
<div class="alekids_gallery_archive">
	<?php get_template_part('partials/pagination'); ?>
</div>
<?php get_footer(); ?>