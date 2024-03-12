<?php
/**
 * Enqueue Theme Styles
 */
function ale_enqueue_styles() {

	//Add general css files
	wp_register_style( 'venobox', ALETHEME_THEME_URL . '/assets/css/libs/venobox.min.css', array(), ALETHEME_THEME_VERSION, 'all');
	wp_enqueue_style( 'slick', ALETHEME_THEME_URL . '/assets/css/libs/slick.min.css', array(), ALETHEME_THEME_VERSION, 'all');
	wp_enqueue_style( 'ale_theme_styles', ALETHEME_THEME_URL . '/assets/css/ale_theme_styles.css', array(), ALETHEME_THEME_VERSION, 'all');

}
add_action( 'wp_enqueue_scripts', 'ale_enqueue_styles' );


/**
 * Enqueue Theme Scripts
 */
function ale_enqueue_scripts() {

	// add html5 for old browsers.
	wp_register_script( 'html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), ALETHEME_THEME_VERSION, false );

    //Libs Register
    wp_register_script( 'ale-counter', ALETHEME_THEME_URL . '/assets/js/libs/jquery.counter.min.js', array( 'jquery' ), ALETHEME_THEME_VERSION, true );

	//Custom JS Code
	
	
	wp_enqueue_script( 'html5-shim' );
	wp_script_add_data( 'html5-shim', 'conditional', 'lt IE 9' );
	
	wp_register_script( 'venobox', ALETHEME_THEME_URL . '/assets/js/libs/venobox.min.js', array( 'jquery' ), ALETHEME_THEME_VERSION, true );
	wp_register_script( 'slick', ALETHEME_THEME_URL . '/assets/js/libs/slick.min.js', array( 'jquery' ), ALETHEME_THEME_VERSION, true );
	wp_register_script( 'alekids-appear', ALETHEME_THEME_URL . '/assets/js/libs/jquery.appear.js', array( 'jquery' ), ALETHEME_THEME_VERSION, true );
	wp_register_script( 'alekids-counter', ALETHEME_THEME_URL . '/assets/js/libs/jquery.counter.js', array( 'jquery' ), ALETHEME_THEME_VERSION, true );
	wp_enqueue_script( 'ale-scripts', ALETHEME_THEME_URL . '/assets/js/scripts.min.js', array( 'jquery' ), ALETHEME_THEME_VERSION, true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'ale_enqueue_scripts');

/**
 * Register Fonts
 */
function ale_google_fonts_url() {
	$font_url = '';

	/* Get fonts names selected by administrator in theme options */

	$ale_font_one = ale_get_option('font_one');
	$ale_font_two = ale_get_option('font_two');

	$ale_font_one_ex = ale_get_option('font_one_ex');
	$ale_font_two_ex = ale_get_option('font_two_ex');


	$ale_default_fonts = ale_get_safe_webfonts();
	$ale_load_urls = '';

	if(in_array($ale_font_one,$ale_default_fonts)){ $ale_load_urls .= ""; }
	else {$ale_load_urls .= str_replace ('+',' ',$ale_font_one).":".$ale_font_one_ex."|"; }

	if(in_array($ale_font_two,$ale_default_fonts)){ $ale_load_urls .= ""; }
	else { $ale_load_urls .= str_replace ('+',' ',$ale_font_two).":".$ale_font_two_ex."|"; }

	


	/*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
	if ( 'off' !== _x( 'on', 'Google font: on or off', 'ale' ) ) {
		$font_url = add_query_arg( 'family', urlencode($ale_load_urls), "//fonts.googleapis.com/css" );
	}
	return $font_url;
}
/**
 * Enqueue scripts and styles.
 */
function ale_google_fonts_scripts() {
	wp_enqueue_style( 'olins-fonts', ale_google_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'ale_google_fonts_scripts' );


/**
 * Add header information 
 */
function ale_head() {
	?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php esc_html_e('RSS Feed','ale') ?>" href="<?php ale_rss(); ?>" />
<?php
	get_template_part('partials/css-option');
}
add_action('wp_head', 'ale_head');


/**
 * Comment callback function
 * @param object $comment
 * @param array $args
 * @param int $depth
 */


function alekids_comment_default($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
    ?>
<<?php echo esc_attr($tag) ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<?php if ($depth > 1) { ?>
		<div class="comment-item comment2 second-level cf">
			<div class="response"></div>
			<?php } else { ?>
			<div class="comment-item comment1 first-level cf">
				<?php } ?>
				<div class="left_part">
					<div class="commenter-avatar">
						<div class="circle-avatar"></div>
						<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
					</div>
					<span class="comment_date font_one">
						<?php echo esc_html(get_comment_date()); ?>
					</span>
				</div>
				<div class="comment-box">
					<div class="info-meta font-one">
						<?php printf("<span class='author'>".esc_html__('%s','ale')."</span>", get_comment_author_link()); ?>
						<?php if($depth == 1){ ?><span class="reply-link"><?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span><?php } ?>
					</div>
					<div class="info-content">
						<?php if ($comment->comment_approved == '0') : ?>
						<em class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.','ale') ?></em>
						<br />
						<?php endif; ?>
						<?php comment_text() ?>
					</div>
				</div>

			</div>
			<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
		<?php
}