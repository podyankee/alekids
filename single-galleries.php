<?php get_header(); ?>

<div class="wrapper alekids_single_gallery">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php get_template_part('partials/posthead' );?>
	<?php get_template_part('partials/gallerycontent' );?>
	<?php get_template_part('partials/postfooter' );?>
	<?php endwhile; else: ?>
	<?php get_template_part('partials/notfound')?>
	<?php endif; ?>

	<?php if (comments_open() || get_comments_number()) : ?>
	<?php comments_template(); ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>