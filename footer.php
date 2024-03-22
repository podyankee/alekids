<div class="colored_line">
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
</div>

<footer class="site_footer">
	<div class="alekids_footer_ic1"></div>
	<div class="alekids_footer_ic2"></div>
	<div class="alekids_footer_ic3"></div>
	<div class="alekids_footer_ic4"></div>
	<div class="alekids_footer_ic5"></div>
	<div class="alekids_footer_ic6"></div>
	<div class="alekids_footer_ic"></div>
	<div class="wrapper">
		<div class="info_box">
			<a href="<?php echo esc_url(home_url("/")); ?>">
				<?php if(ale_get_option('footerlogo')){?>
				<img src="<?php echo esc_url(ale_get_option('footerlogo')); ?>" <?php if(!empty(ale_get_option('footerlogoretina'))){ ?>srcset="<?php echo esc_url(ale_get_option('footerlogoretina')); ?> 2x" <?php } ?> alt="logo" />
				<?php } ?>
			</a>
			<?php if(ale_get_option('footer_info')){ ?> <div class="footer_info"><?php echo wp_kses_post(ale_get_option('footer_info')); ?></div> <?php } ?>
		</div>
		<div class="opening_box">
			<?php if(ale_get_option('footer_opening_title')){ ?> <h4><?php echo esc_html(ale_get_option('footer_opening_title')); ?></h4> <?php } ?>
			<?php if(ale_get_option('footer_opening_info')){ ?> <div class="footer_opening_info"><?php echo wp_kses_post(ale_get_option('footer_opening_info')); ?></div> <?php } ?>
		</div>
		<div class="navigation_box">
			<nav>
				<?php if(ale_get_option('footer_navigation_title')){ ?> <h4><?php echo esc_html(ale_get_option('footer_navigation_title')); ?></h4> <?php } ?>

				<?php
					if (has_nav_menu( 'footer_menu' )) {
						wp_nav_menu( array(
							'theme_location' => 'footer_menu',
							'menu' => 'Footer Menu',
							'menu_class' => 'menu footer_menu',
							'walker' => new Aletheme_Nav_Walker(),
							'container' => '',
							
						) );
					}
				?>
			</nav>
		</div>
		<div class="contact_box">
			<?php if(ale_get_option('footer_contacts_title')){ ?> <h4><?php echo esc_html(ale_get_option('footer_contacts_title')); ?></h4> <?php } ?>
			<?php if(ale_get_option('footer_address')){ ?>
			<div class="alekids_address">
				<?php echo esc_html(ale_get_option('footer_address')); ?>
			</div>
			<?php } ?>

			<?php if(ale_get_option('footer_phone1')  or ale_get_option('footer_phone2')){ ?>
			<div class="alekids_phone">
				<?php if(ale_get_option('footer_phone1')) { echo '<strong>' . esc_html(ale_get_option('footer_phone1')) . '</strong>'; } ?>
				<?php if(ale_get_option('footer_phone2')) { echo '<strong>' . esc_html(ale_get_option('footer_phone2')) . '</strong>'; } ?>
			</div>
			<?php } ?>

			<?php if(ale_get_option('footer_email')){ ?>
			<div class="alekids_email">
				<a href="mailto:<?php echo esc_html(ale_get_option('footer_email')); ?>"><?php echo esc_html(ale_get_option('footer_email')); ?></a>
			</div>
			<?php } ?>

		</div>
	</div>
	<div class="scroll_top_line">
		<div class="scroll_top_container">
			<a href="#" class="alekids_button alekids_scroll_top">
				<div class="container">
					<span><?php esc_html_e('Scroll Top', 'alekids'); ?></span>
					<span>
						<svg class="alekids_dashed">
							<rect x="5px" y="5px" rx="25px" ry="25px" width="0" height="0"></rect>
						</svg>
					</span>
				</div>
			</a>
		</div>
	</div>
	<!-- test -->
	<div class="wrapper footer_line">
		<?php if(ale_get_option('copyrights')){ ?> <div class="copyrights"><?php echo wp_kses_post(esc_html(ale_get_option('copyrights'))); ?></div> <?php } ?>
		<div class="social">
			<?php get_template_part('partials/social_profiles'); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>