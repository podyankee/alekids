<?php

//Background Object based on Theme Options Values
$ale_background = ale_get_option('background');


$ale_font_one = ale_get_option('font_one');
$ale_font_two = ale_get_option('font_two');
$ale_font_three = ale_get_option('font_three');
$ale_font_four = ale_get_option('font_four');
$ale_font_five = ale_get_option('font_five');

$ale_font_one_ex = ale_get_option('font_one_ex');
$ale_font_two_ex = ale_get_option('font_two_ex');

$ale_font = ale_get_option('bodystyle');
$ale_h1 = ale_get_option('h1sty');
$ale_h2 = ale_get_option('h2sty');
$ale_h3 = ale_get_option('h3sty');
$ale_h4 = ale_get_option('h4sty');
$ale_h5 = ale_get_option('h5sty');
$ale_h6 = ale_get_option('h6sty');
?>

<style type='text/css'>
body {
	<?php if($ale_font['size']) {
		echo "font-size:".$ale_font['size'].";";
	}

	if($ale_font['style']) {
		echo "font-style:".$ale_font['style'].";";
	}

	if($ale_font['color']) {
		echo "color:".$ale_font['color'].";";
	}

	if($ale_font['face']) {
		$fontfamily=str_replace ('+', ' ', $ale_font['face']);
		echo "font-family:".$fontfamily.";";
	}

	if($ale_font['transform']) {
		echo "text-transform:".$ale_font['transform'].";";
	}

	if($ale_font['weight']) {
		echo "font-weight:".$ale_font['weight'].";";
	}

	if($ale_font['lineheight']) {
		echo "line-height:".$ale_font['lineheight'].";";
	}

	//Dynamic Background Settings from Theme Options.
	if($ale_background['color']) {
		echo "background-color:".$ale_background['color'].";";
	}

	if($ale_background['image']) {
		echo "background-image: url(".$ale_background['image'].");";
	}

	if($ale_background['repeat']) {
		echo "background-repeat:".$ale_background['repeat'].";";
	}

	if($ale_background['position']) {
		echo "background-position:".$ale_background['position'].";";
	}

	if($ale_background['attachment']) {
		echo "background-attachment:".$ale_background['attachment'].";";
	}

	if($ale_background['background-size']) {
		echo "background-size:".$ale_background['background-size'].";";
	}

	?>
}

h1 {
	<?php if($ale_h1['size']) {
		echo "font-size:".$ale_h1['size'].";";
	}

	;

	if($ale_h1['style']) {
		echo "font-style:".$ale_h1['style'].";";
	}

	;

	if($ale_h1['color']) {
		echo "color:".$ale_h1['color'].";";
	}

	;

	if($ale_h1['face']) {
		$h1family=str_replace ('+', ' ', $ale_h1['face']);
		echo "font-family:".$h1family.";";
	}

	;

	if($ale_h1['transform']) {
		echo "text-transform:".$ale_h1['transform'].";";
	}

	if($ale_h1['weight']) {
		echo "font-weight:".$ale_h1['weight'].";";
	}

	if($ale_h1['lineheight']) {
		echo "line-height:".$ale_h1['lineheight'].";";
	}

	?>
}

h2 {
	<?php if($ale_h2['size']) {
		echo "font-size:".$ale_h2['size'].";";
	}

	;

	if($ale_h2['style']) {
		echo "font-style:".$ale_h2['style'].";";
	}

	;

	if($ale_h2['color']) {
		echo "color:".$ale_h2['color'].";";
	}

	;

	if($ale_h2['face']) {
		$h2family=str_replace ('+', ' ', $ale_h2['face']);
		echo "font-family:".$h2family.";";
	}

	;

	if($ale_h2['transform']) {
		echo "text-transform:".$ale_h2['transform'].";";
	}

	if($ale_h2['weight']) {
		echo "font-weight:".$ale_h2['weight'].";";
	}

	if($ale_h2['lineheight']) {
		echo "line-height:".$ale_h2['lineheight'].";";
	}

	?>
}

h3 {
	<?php if($ale_h3['size']) {
		echo "font-size:".$ale_h3['size'].";";
	}

	;

	if($ale_h3['style']) {
		echo "font-style:".$ale_h3['style'].";";
	}

	;

	if($ale_h3['color']) {
		echo "color:".$ale_h3['color'].";";
	}

	;

	if($ale_h3['face']) {
		$h3family=str_replace ('+', ' ', $ale_h3['face']);
		echo "font-family:".$h3family.";";
	}

	;

	if($ale_h3['transform']) {
		echo "text-transform:".$ale_h3['transform'].";";
	}

	if($ale_h3['weight']) {
		echo "font-weight:".$ale_h3['weight'].";";
	}

	if($ale_h3['lineheight']) {
		echo "line-height:".$ale_h3['lineheight'].";";
	}

	?>
}

h4 {
	<?php if($ale_h4['size']) {
		echo "font-size:".$ale_h4['size'].";";
	}

	;

	if($ale_h4['style']) {
		echo "font-style:".$ale_h4['style'].";";
	}

	;

	if($ale_h4['color']) {
		echo "color:".$ale_h4['color'].";";
	}

	;

	if($ale_h4['face']) {
		$h4family=str_replace ('+', ' ', $ale_h4['face']);
		echo "font-family:".$h4family.";";
	}

	;

	if($ale_h4['transform']) {
		echo "text-transform:".$ale_h4['transform'].";";
	}

	if($ale_h4['weight']) {
		echo "font-weight:".$ale_h4['weight'].";";
	}

	if($ale_h4['lineheight']) {
		echo "line-height:".$ale_h4['lineheight'].";";
	}

	?>
}

h5 {
	<?php if($ale_h5['size']) {
		echo "font-size:".$ale_h5['size'].";";
	}

	;

	if($ale_h5['style']) {
		echo "font-style:".$ale_h5['style'].";";
	}

	;

	if($ale_h5['color']) {
		echo "color:".$ale_h5['color'].";";
	}

	;

	if($ale_h5['face']) {
		$h5family=str_replace ('+', ' ', $ale_h5['face']);
		echo "font-family:".$h5family.";";
	}

	;

	if($ale_h5['transform']) {
		echo "text-transform:".$ale_h5['transform'].";";
	}

	if($ale_h5['weight']) {
		echo "font-weight:".$ale_h5['weight'].";";
	}

	if($ale_h5['lineheight']) {
		echo "line-height:".$ale_h5['lineheight'].";";
	}

	?>
}

h6 {
	<?php if($ale_h6['size']) {
		echo "font-size:".$ale_h6['size'].";";
	}

	;

	if($ale_h6['style']) {
		echo "font-style:".$ale_h6['style'].";";
	}

	;

	if($ale_h6['color']) {
		echo "color:".$ale_h6['color'].";";
	}

	;

	if($ale_h6['face']) {
		$h6family=str_replace ('+', ' ', $ale_h6['face']);
		echo "font-family:".$h6family.";";
	}

	;

	if($ale_h6['transform']) {
		echo "text-transform:".$ale_h6['transform'].";";
	}

	if($ale_h6['weight']) {
		echo "font-weight:".$ale_h6['weight'].";";
	}

	if($ale_h6['lineheight']) {
		echo "line-height:".$ale_h6['lineheight'].";";
	}

	?>
}

<?php
/*
     * CSS Styles for Work Archive
     * ===========================
     */

if(ale_get_option('work_padding') !=='0') {
	$work_item_gutter=esc_attr(intval(ale_get_option('work_padding')));
	$work_item_gutter=$work_item_gutter/2;
	echo ".work_item_gutter { margin: ".$work_item_gutter."px;}";
}

/* Left Based Heading */
if(ale_get_option('page_heading_style')=='wedding_heading') {
	echo '.ale_container > .content_wrapper.flex_container {width:50%; float:right;box-sizing: border-box;padding-left:7%; min-height:calc(100vh - 280px);}';
}

//
if(ale_get_option('workpagebg')) {
	echo '.post-type-archive-works .ale_container { background-image: url('.esc_url(ale_get_option('workpagebg')).'); }';
}

?><?php if($ale_font_one) {
	?>.font_one {
		<?php if($ale_font_one) {
			$font_one=str_replace ('+', ' ', $ale_font_one);
			echo "font-family:".$font_one.";";
		}

		;
		?>
	}

	<?php if(ALETHEME_DESIGN_STYLE=='taxipress') {

		?>.story .post_info_line,
		blockquote,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.comments .comments_name .comments_title,
		span.reply-link,
		body.single-post .comments .comment .info-meta .author,
		body.single-post .leave-a-comment input[type='submit'],
		.olins_booking_home header .right #submit {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one."!important;";
			}

			;
			?>
		}

		<?php
	}

	?><?php
}

?><?php if($ale_font_two) {

	//Font for specific demo variation
	if(ale_get_option('woo_grid_style')=='rosi') {

		?>.woocommerce div.product p.price,
		.woocommerce .button,
		.woocommerce-review-link,
		.woocommerce div.product .woocommerce-tabs ul.tabs,
		#review_form_wrapper .comment-reply-title {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		<?php
	}

	if(ale_get_option('woo_grid_style')=='keira') {

		?>.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce .quantity .qty,
		#add_payment_method table.cart td.actions .coupon .input-text,
		.woocommerce-cart table.cart td.actions .coupon .input-text,
		.woocommerce-checkout table.cart td.actions .coupon .input-text,
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt,
		.ale_single_product_page .product_meta>span,
		.woocommerce div.product .woocommerce-tabs ul.tabs li,
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt,
		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		.ale_single_product_page .product_meta>span span,
		.ale_single_product_page .product_meta>span a {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='keira') {
		?>div.ale_blog_archive .load-more {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='moka') {

		?>.woocommerce a.button,
		button[type="submit"],
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt,
		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='hai') {

		?>.olins_simple_form input[type="submit"],
		.pagination.simple_pagination,
		.leave-a-comment .line-item input[type="submit"],
		.olins_video_box .video_holder .video_data_mask .video_desc.font_one,
		.olins_testimonials_slider .testimonial {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		.olins_video_box .video_holder .video_data_mask .video_title.font_two {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='limpieza') {

		?>.comments .comments_name .comments_title,
		.comments .comment-item .comment-box .info-meta,
		.leave-a-comment .line-item input[type="submit"],
		.story blockquote,
		.order_form_limpieza .column_three input[type="submit"] {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='burger') {

		?>.ale_main_container .ale_container .page_title_container .page_title span.font_two,
		div.ale_blog_archive .load-more,
		.leave-a-comment .line-item input[type="submit"],
		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		span.onsale,
		.burger_single_product .summary .price,
		.burger_testimonials_slider .slide_container .slide_data .description,
		.popup_mobile_menu {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one."!important;";
			}

			;
			?>
		}

		.olins_simple_form .module_line input[type="text"],
		.olins_simple_form .module_line input[type="email"],
		.olins_simple_form .module_line .item_field {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='laptica') {

		?>.creative_title_item h2.creative_title,
		.leave-a-comment .line-item input[type="submit"],
		.button,
		.ale_laptica_single_cart_form_open .price,
		.ale_single_product_page .product_meta>span,
		.woocommerce #review_form #respond .form-submit input,
		.laptica_button_inner,
		.olins_years_tabs .tab_content .text .title,
		.olins_progress_bar h3 {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one."!important;";
			}

			;
			?>
		}

		.ale_single_product_page .product_meta>span>span,
		.ale_single_product_page .product_meta>span>a,
		textarea,
		input[type=text],
		input[type=email],
		input[type=url],
		input[type=search],
		input[type=password] {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='kitty') {

		?>.ale_main_container .ale_container .left_title_with_breadcrumbs h2,
		.pagination.simple_pagination,
		.creative_title_item h2,
		.shop_grid_kitty .kitty-item .bottom_price span.price .amount,
		.woocommerce div.product div.summary .price bdi {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one."!important;";
			}

			;
			?>
		}

		input[type=text],
		input[type=email],
		input[type=url],
		input[type=search],
		input[type=password],
		textarea,
		.olins_simple_form .module_line .font_one {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='nunta') {

		?>.ale_main_container .ale_container .centered_title h2,
		.countdown_amount {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one.";";
			}

			;
			?>
		}

		input[type=text],
		input[type=email],
		input[type=url],
		input[type=search],
		input[type=password],
		textarea,
		.olins_simple_form .module_line .font_one {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		.olins_simple_form .module_line input[type="submit"].font_one,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"] {
			<?php if($ale_font_three) {
				$font_three=str_replace ('+', ' ', $ale_font_three);
				echo "font-family:".$font_three .";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='donation') {

		?>aside.sidebar .widget h5.widget_title,
		footer .mc4wp-form input[type="submit"] {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='organic') {

		?>.ale_main_container .ale_container .simple_image_heading .page_title_container .white_page_title span.font_one,
		.olins_simple_form .module_line input[type="text"],
		.olins_simple_form .module_line input[type="email"],
		.olins_simple_form .module_line textarea,
		.submit_button,
		.olins_video_box .video_holder .video_data_mask .video_desc {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two.";";
			}

			;
			?>
		}

		.olins_video_box .video_holder .video_data_mask .video_title,
		.olins_corporate_team .name,
		.woocommerce span.onsale,
		.price .amount,
		.woocommerce div.product .woocommerce-tabs ul.tabs li a {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one.";";
			}

			;
			?>
		}

		<?php
	}

	if(ALETHEME_DESIGN_STYLE=='orquidea') {

		?>nav#topmenu ul li ul li,
		input[type=text],
		input[type=email],
		input[type=url],
		input[type=search],
		input[type=password],
		textarea {
			<?php if($ale_font_two) {
				$font_two=str_replace ('+', ' ', $ale_font_two);
				echo "font-family:".$font_two."!important;";
			}

			;
			?>
		}

		div.ale_blog_archive .load-more,
		.leave-a-comment .line-item input[type="submit"] {
			<?php if($ale_font_one) {
				$font_one=str_replace ('+', ' ', $ale_font_one);
				echo "font-family:".$font_one.";";
			}

			;
			?>
		}

		<?php
	}

	?>.font_two,
	blockquote,
	.font_two button {
		<?php if($ale_font_two) {
			$font_two=str_replace ('+', ' ', $ale_font_two);
			echo "font-family:".$font_two.";";
		}

		;
		?>
	}

	<?php
}

?><?php if($ale_font_one) {
	echo '.font_one {';
	$font_one=str_replace ('+', ' ', $ale_font_one);
	echo "font-family:".$font_one.";";
	echo '}';

}

;

if($ale_font_two) {
	echo '.font_two {';
	$font_two=str_replace ('+', ' ', $ale_font_two);
	echo "font-family:".$font_two.";";
	echo '}';

}

;

if (get_post_meta(get_the_ID(), 'ale_post_heading_icon', true)) {
	$alekids_icon=get_post_meta(get_the_ID(), 'ale_post_heading_icon', true);
	$alekids_icon_color='';

	if ($alekids_icon=='sun'or $alekids_icon=='map') {
		$alekids_icon_color="#fff888";
	}

	elseif ($alekids_icon=='sale') {
		$alekids_icon_color="#ffd38d";
	}

	elseif ($alekids_icon=='gallery') {
		$alekids_icon_color="#b3d0fd";
	}

	elseif ($alekids_icon=='feather') {
		$alekids_icon_color="#94edca";
	}

	if ( !empty($alekids_icon_color)) {
		echo '.inner_header h1::before {background-color: '.esc_attr($alekids_icon_color).'}';
	}

}

elseif(is_post_type_archive('galleries')) {
	echo '.inner_header h1::before {background-color: #b3d0fd}';
}

else {
	echo '.inner_header h1::before {background-color: #94edca}';
}

if(ale_get_option('customcsscode')) {
	echo esc_attr(ale_get_option('customcsscode'));
}

?>
</style>