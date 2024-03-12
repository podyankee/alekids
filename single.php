<?php get_header(); ?>

<!-- Content -->
<div class="wrapper alekids_single_post">
	<div class="post_content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part('partials/posthead' );?>
		<?php get_template_part('partials/postcontent' );?>
		<?php get_template_part('partials/postfooter' );?>
		<?php endwhile; else: ?>
		<?php get_template_part('partials/notfound')?>
		<?php endif; ?>
		<!-- <?php get_template_part('partials/pagination'); ?> -->

		<?php if (comments_open() || get_comments_number()) : ?>
		<?php comments_template(); ?>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>