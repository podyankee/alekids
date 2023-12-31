<?php

/* Text */

add_filter( 'of_sanitize_text', 'sanitize_text_field' );

/* Textarea */

function of_sanitize_textarea($input) {
	global $allowedposttags;
	$output = wp_kses( $input, $allowedposttags);
	return $output;
}

add_filter( 'of_sanitize_textarea', 'of_sanitize_textarea' );

/* Select */

add_filter( 'of_sanitize_select', 'of_sanitize_enum', 10, 2);

/* Radio */

add_filter( 'of_sanitize_radio', 'of_sanitize_enum', 10, 2);

/* Images */

add_filter( 'of_sanitize_images', 'of_sanitize_enum', 10, 2);

/* Checkbox */

function of_sanitize_checkbox( $input ) {
	if ( $input ) {
		$output = '1';
	} else {
		$output = false;
	}
	return $output;
}
add_filter( 'of_sanitize_checkbox', 'of_sanitize_checkbox' );

/* Multicheck */

function of_sanitize_multicheck( $input, $option ) {
    $output = array();
	if ( is_array( $input ) ) {
		foreach( $option['options'] as $key => $value ) {
			$output[$key] = false;
		}
		foreach( $input as $key => $value ) {
			if ( array_key_exists( $key, $option['options'] ) && $value ) {
				$output[$key] = "1";
			}
		}
	}
	return $output;
}
add_filter( 'of_sanitize_multicheck', 'of_sanitize_multicheck', 10, 2 );

/* Color Picker */

add_filter( 'of_sanitize_color', 'of_sanitize_hex' );

/* Uploader */

function of_sanitize_upload( $input ) {
	$output = '';
	$filetype = wp_check_filetype($input);
	if ( $filetype["ext"] ) {
		$output = $input;
	}
	return $output;
}
add_filter( 'of_sanitize_upload', 'of_sanitize_upload' );

/* Editor */

function of_sanitize_editor($input) {
	if ( current_user_can( 'unfiltered_html' ) ) {
		$output = $input;
	}
	else {
		global $allowedtags;
		$output = wpautop(wp_kses( $input, $allowedtags));
	}
	return $output;
}
add_filter( 'of_sanitize_editor', 'of_sanitize_editor' );

/* Allowed Tags */

function of_sanitize_allowedtags($input) {
	global $allowedtags;
	$output = wpautop(wp_kses( $input, $allowedtags));
	return $output;
}

/* Allowed Post Tags */

function of_sanitize_allowedposttags($input) {
	global $allowedposttags;
	$output = wpautop(wp_kses( $input, $allowedposttags));
	return $output;
}

add_filter( 'of_sanitize_info', 'of_sanitize_allowedposttags' );


/* Check that the key value sent is valid */

function of_sanitize_enum( $input, $option ) {
	$output = '';
	if ( array_key_exists( $input, $option['options'] ) ) {
		$output = $input;
	}
	return $output;
}

/* Header Styles */

function of_sanitize_header_styles( $input ) {
	$output = wp_parse_args( $input, array(
		'color' => '',
		'image'  => '',
		'text-color' => ''
	) );

	$output['color'] = apply_filters( 'of_sanitize_hex', $input['color'] );
	$output['image'] = apply_filters( 'of_sanitize_upload', $input['image'] );
	$output['width'] = apply_filters( 'of_sanitize_text', $input['width'] );
	$output['height'] = apply_filters( 'of_sanitize_text', $input['height'] );
	$output['text-color'] = apply_filters( 'of_sanitize_hex', $input['text-color'] );



	return $output;
}
add_filter( 'of_sanitize_header_styles', 'of_sanitize_header_styles' );

/* Background */

function of_sanitize_background( $input ) {
	$output = wp_parse_args( $input, array(
		'color' => '',
		'image'  => '',
		'repeat'  => 'repeat',
		'position' => 'top center',
		'attachment' => 'scroll'
	) );

	$output['color'] = apply_filters( 'of_sanitize_hex', $input['color'] );
	$output['image'] = apply_filters( 'of_sanitize_upload', $input['image'] );
	$output['repeat'] = apply_filters( 'of_background_repeat', $input['repeat'] );
	$output['position'] = apply_filters( 'of_background_position', $input['position'] );
	$output['attachment'] = apply_filters( 'of_background_attachment', $input['attachment'] );

	return $output;
}
add_filter( 'of_sanitize_background', 'of_sanitize_background' );

function of_sanitize_background_repeat( $value ) {
	$recognized = of_recognized_background_repeat();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'of_default_background_repeat', current( $recognized ) );
}
add_filter( 'of_background_repeat', 'of_sanitize_background_repeat' );

function of_sanitize_background_position( $value ) {
	$recognized = of_recognized_background_position();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'of_default_background_position', current( $recognized ) );
}
add_filter( 'of_background_position', 'of_sanitize_background_position' );

function of_sanitize_background_attachment( $value ) {
	$recognized = of_recognized_background_attachment();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'of_default_background_attachment', current( $recognized ) );
}
add_filter( 'of_background_attachment', 'of_sanitize_background_attachment' );


/* Typography */

function of_sanitize_typography( $input, $option ) {

	$output = wp_parse_args( $input, array(
		'size'  => '',
		'face'  => '',
		'style' => '',
		'color' => ''
	) );

	if ( isset( $option['options']['faces'] ) && isset( $input['face'] ) ) {
		if ( !( array_key_exists( $input['face'], $option['options']['faces'] ) ) ) {
			$output['face'] = '';
		}
	}
	else {
		$output['face']  = apply_filters( 'of_font_face', $output['face'] );
	}

	$output['size']  = apply_filters( 'of_font_size', $output['size'] );
	$output['style'] = apply_filters( 'of_font_style', $output['style'] );
	$output['color'] = apply_filters( 'of_sanitize_color', $output['color'] );
	return $output;
}
add_filter( 'of_sanitize_typography', 'of_sanitize_typography', 10, 2 );

function of_sanitize_font_size( $value ) {
	$recognized = of_recognized_font_sizes();
	$value_check = preg_replace('/px/','', $value);
	if ( in_array( (int) $value_check, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'of_default_font_size', $recognized );
}
add_filter( 'of_font_size', 'of_sanitize_font_size' );


function of_sanitize_font_style( $value ) {
	$recognized = of_recognized_font_styles();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'of_default_font_style', current( $recognized ) );
}
add_filter( 'of_font_style', 'of_sanitize_font_style' );


function of_sanitize_font_face( $value ) {
	$recognized = of_recognized_font_faces();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'of_default_font_face', current( $recognized ) );
}
add_filter( 'of_font_face', 'of_sanitize_font_face' );

/**
 * Get recognized background repeat settings
 *
 * @return   array
 *
 */
function of_recognized_background_repeat() {
	$default = array(
		'no-repeat' => esc_html__('No Repeat', 'ale'),
		'repeat-x'  => esc_html__('Repeat Horizontally', 'ale'),
		'repeat-y'  => esc_html__('Repeat Vertically', 'ale'),
		'repeat'    => esc_html__('Repeat All', 'ale'),
		);
	return apply_filters( 'of_recognized_background_repeat', $default );
}

/**
 * Get recognized background positions
 *
 * @return   array
 *
 */
function of_recognized_background_position() {
	$default = array(
		'top left'      => esc_html__('Top Left', 'ale'),
		'top center'    => esc_html__('Top Center', 'ale'),
		'top right'     => esc_html__('Top Right', 'ale'),
		'center left'   => esc_html__('Middle Left', 'ale'),
		'center center' => esc_html__('Middle Center', 'ale'),
		'center right'  => esc_html__('Middle Right', 'ale'),
		'bottom left'   => esc_html__('Bottom Left', 'ale'),
		'bottom center' => esc_html__('Bottom Center', 'ale'),
		'bottom right'  => esc_html__('Bottom Right', 'ale')
		);
	return apply_filters( 'of_recognized_background_position', $default );
}

/**
 * Get recognized background attachment
 *
 * @return   array
 *
 */
function of_recognized_background_attachment() {
	$default = array(
		'scroll' => esc_html__('Scroll Normally', 'ale'),
		'fixed'  => esc_html__('Fixed in Place', 'ale')
		);
	return apply_filters( 'of_recognized_background_attachment', $default );
}

/**
 * Get recognized size attachment
 *
 * @return   array
 *
 */
function of_recognized_background_size() {
	$default = array(
		'auto' => esc_html__('Auto', 'ale'),
		'cover'  => esc_html__('Cover', 'ale'),
		'contain'  => esc_html__('Contain', 'ale'),
		'initial'  => esc_html__('Initial', 'ale'),

	);
	return apply_filters( 'of_recognized_background_size', $default );
}

/**
 * Get recognized aligns
 *
 * @return   array
 *
 */
function of_recognized_menu_text_align() {
	$default = array(
		'left' => esc_html__('Left', 'ale'),
		'center'  => esc_html__('Center', 'ale'),
		'right'  => esc_html__('Right', 'ale'),

	);
	return apply_filters( 'of_recognized_menu_text_align', $default );
}

/**
 * Sanitize a color represented in hexidecimal notation.
 *
 * @param    string    Color in hexidecimal notation. "#" may or may not be prepended to the string.
 * @param    string    The value that this function should return if it cannot be recognized as a color.
 * @return   string
 *
 */

function of_sanitize_hex( $hex, $default = '' ) {
	if ( of_validate_hex( $hex ) ) {
		return $hex;
	}
	return $default;
}

/**
 * Get recognized font sizes.
 *
 * Returns an indexed array of all recognized font sizes.
 * Values are integers and represent a range of sizes from
 * smallest to largest.
 *
 * @return   array
 */

function of_recognized_font_sizes() {
	$sizes = range( 9, 71 );
	$sizes = apply_filters( 'of_recognized_font_sizes', $sizes );
	$sizes = array_map( 'absint', $sizes );
	return $sizes;
}

/**
 * Get recognized font faces.
 *
 * Returns an array of all recognized font faces.
 * Keys are intended to be stored in the database
 * while values are ready for display in in html.
 *
 * @return   array
 *
 */
function of_recognized_font_faces() {
	return apply_filters(
		'of_recognized_font_faces', 
		array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts())
	);
}

/**
 * Get recognized font styles.
 *
 * Returns an array of all recognized font styles.
 * Keys are intended to be stored in the database
 * while values are ready for display in in html.
 *
 * @return   array
 *
 */
function of_recognized_font_styles() {
	$default = array(
		'normal'      => esc_html__('Normal', 'ale'),
		'italic'      => esc_html__('Italic', 'ale'),
		'bold'        => esc_html__('Bold', 'ale'),
		'bold italic' => esc_html__('Bold Italic', 'ale')
		);
	return apply_filters( 'of_recognized_font_styles', $default );
}

/**
 * Get recognized font transforms.
 *
 * Returns an array of all recognized font transforms.
 * Keys are intended to be stored in the database
 * while values are ready for display in in html.
 *
 * @return   array
 *
 */
function of_recognized_font_transform() {
	$default = array(
		'none'      => esc_html__('None', 'ale'),
		'capitalize'      => esc_html__('Capitalize', 'ale'),
		'uppercase'        => esc_html__('Uppercase', 'ale'),
		'lowercase' => esc_html__('Lowercase', 'ale')
	);
	return apply_filters( 'of_recognized_font_styles', $default );
}

/**
 * Get recognized font weights.
 *
 * Returns an array of all recognized font weights.
 * Keys are intended to be stored in the database
 * while values are ready for display in in html.
 *
 * @return   array
 *
 */
function of_recognized_font_weight() {
	$default = array(
		'200' => esc_html__('Extra-Light 200', 'ale'),
		'300' => esc_html__('Light 300', 'ale'),
		'400' => esc_html__('Regular 400', 'ale'),
		'500' => esc_html__('Medium 500', 'ale'),
		'600' => esc_html__('Semi-Bold 600', 'ale'),
		'700' => esc_html__('Bold 700', 'ale'),
		'800' => esc_html__('Extra-Bold 800', 'ale'),
		'900' => esc_html__('Ultra-bold 900', 'ale')
	);
	return apply_filters( 'of_recognized_font_weight', $default );
}

/**
 * Is a given string a color formatted in hexidecimal notation?
 *
 * @param    string    Color in hexidecimal notation. "#" may or may not be prepended to the string.
 * @return   bool
 *
 */

function of_validate_hex( $hex ) {
	$hex = trim( $hex );
	/* Strip recognized prefixes. */
	if ( 0 === strpos( $hex, '#' ) ) {
		$hex = substr( $hex, 1 );
	}
	elseif ( 0 === strpos( $hex, '%23' ) ) {
		$hex = substr( $hex, 3 );
	}
	/* Regex match. */
	if ( 0 === preg_match( '/^[0-9a-fA-F]{6}$/', $hex ) ) {
		return false;
	}
	else {
		return true;
	}
}








/*********************************
 *********************************
 ** CUSTOM SANITIZATION **********
 *********************************
 *********************************/

function of_sanitize_typo( $input ) {
	$output = wp_parse_args( $input, array(
		'face'  => '',
		'style' => '',
		'weight' => '',
		'variant' => '',
		'transform' => '',
		'size'	=> '',
	));

	$output['size']  = apply_filters( 'of_typo_size', $output['size'] );
	$output['face']  = apply_filters( 'of_typo_face', $output['face'] );
	$output['style'] = apply_filters( 'of_typo_style', $output['style'] );
	$output['weight'] = apply_filters( 'of_typo_weight', $output['weight'] );
	$output['variant'] = apply_filters( 'of_typo_variant', $output['variant'] );
	$output['transform'] = apply_filters( 'of_typo_transform', $output['transform'] );

	return $output;
}
add_filter( 'of_sanitize_typo', 'of_sanitize_typo' );

function of_sanitize_header( $input ) {
	$output = wp_parse_args( $input, array(
		'face'  => '',
		'style' => '',
		'weight' => '',
		'variant' => '',
		'transform' => '',
	));

	$output['face']  = apply_filters( 'of_header_face', $output['face'] );
	$output['style'] = apply_filters( 'of_header_style', $output['style'] );
	$output['weight'] = apply_filters( 'of_header_weight', $output['weight'] );
	$output['variant'] = apply_filters( 'of_header_variant', $output['variant'] );
	$output['transform'] = apply_filters( 'of_header_transform', $output['transform'] );

	return $output;
}
add_filter( 'of_sanitize_header', 'of_sanitize_header' );

function of_sanitize_color_link( $input ) {
	
	$input['main'] = apply_filters( 'of_sanitize_hex', $input['main']);
	$input['hover'] = apply_filters( 'of_sanitize_hex', $input['hover']);
	
	return $input;
}
add_filter( 'of_sanitize_color_link', 'of_sanitize_color_link' );