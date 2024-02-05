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

<?php
		if (!is_front_page(  )) { ?>
<div class="inner_header">
	<h1>
		<?php
		if(is_category()){
    echo esc_html__( 'Category: ', 'alekids' ) . single_cat_title("", false);
			} else if(is_author()){
					echo esc_html__( 'Author: ', 'alekids' ) .  get_the_author();
			} else if(is_tag()){
					echo esc_html__( 'Tag: ', 'alekids' ) . single_tag_title("", false);
			} else if(is_search()){
					echo esc_html__( 'Search for: ', 'alekids' ) . get_search_query();
			} elseif (is_post_type_archive('galleries')) {
				$galleries = get_post_type_object('galleries');
				echo esc_html( $galleries->labels->name );
			}	elseif(is_tax('gallery-category')) {
				echo esc_html('Gallery Category ', 'alekids');
			}
			elseif(function_exists('is_woocommerce') and is_woocommerce()) {
				echo woocommerce_page_title();
			}
			else if(is_archive()) {
					if ( is_day() ) :
							echo sprintf( esc_html__( 'Daily Archive: %s', 'alekids' ), get_the_date() );
					elseif ( is_month() ) :
							echo sprintf( esc_html__( 'Monthly Archive: %s', 'alekids' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'alekids' ) ) );
					elseif ( is_year() ) :
							echo sprintf( esc_html__( 'Yearly Archive: %s', 'alekids' ), get_the_date( _x( 'Y', 'yearly archives date format', 'alekids' ) ) );
					else :
							echo esc_html__( 'Archive', 'alekids' );
					endif;
			} else if(is_404()){
					echo esc_html__('page not found','alekids');
			}elseif(is_singular('galleries'))  {
				$alekids_post_type_obj = get_post_type_object('galleries');
				echo esc_html($alekids_post_type_obj->labels->singular_name);
			}
			elseif(is_single()) {
				esc_html_e('Blog', 'alekids');
			}
			else {
				echo esc_html__(wp_title(''));
			}
		?>
	</h1>
	<?php echo ale_get_breadcrumbs(); ?>
	<?php do_action( 'alekids_custom_heading_icon' );  ?>
</div>
<?php }
	?>