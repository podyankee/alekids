<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function ale_get_options() {

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll',
        'background-size'=>'cover'
    );
    
    
    $archive_sidebar = array(
        'no' => esc_html__('No Sideabar','ale'),
        'left_third' => esc_html__('1/3 Left','ale'),
        'left_fourth' => esc_html__('1/4 Left','ale'),
        'right_third' => esc_html__('1/3 Right','ale'),
        'right_fourth' => esc_html__('1/4 Right','ale')
    );

		$archive_columns = array(
			'1' => esc_html__('One Column', 'ale'),
			'2' => esc_html__('Two Columns', 'ale'),
			'3' => esc_html__('Three Columns', 'ale'),
			'4' => esc_html__('Four Columns', 'ale')
		);

    
    

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();

    $options[] = array("name" => esc_html__("Brand","ale"),
                        "tab" => "ale-brand",
                        "type" => "heading",
                        "icon" => "fa-desktop"); 

    $options[] = array( "name" => esc_html__("Site Logo","ale"),
                        "desc" => esc_html__("Upload or put the site logo link.","ale"),
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Site Logo Retina","ale"),
                        "desc" => esc_html__("Upload or put the site logo link forretina devices. 2X.","ale"),
                        "id" => "ale_sitelogoretina",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Footer Logo","ale"),
                        "desc" => esc_html__("Upload or put the footer logo link.","ale"),
                        "id" => "ale_footerlogo",
                        "std" => "",
                        "type" => "upload",
                    );
    $options[] = array( "name" => esc_html__("Footer Logo Retina","ale"),
                        "desc" => esc_html__("Upload or put the footer logo link for retina devices. 2X.","ale"),
                        "id" => "ale_footerlogoretina",
                        "std" => "",
                        "type" => "upload",
                    );
		
	$options[] = array("name" => esc_html__("Style","ale"),
                        "tab" => "ale-style",
						"type" => "heading",
                        "icon" => "fa-window-restore");

    

    $options[] = array( "name" => esc_html__("Custom Page Wrapper","ale"),
                        "desc" => esc_html__("If you need a custom Wrapper width, add your value in that field. ex: 900px or 90%. Also make sure the previous field is selected Custom","ale"),
                        "id" => "ale_custom_wrapper",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Inner Wrapper/Content Wrapper","ale"),
                        "desc" => esc_html__("Specify the inner wrapper if it should be different then the default wrapper. Let the field empty to be equal to the default wrapper. Use \"px\" or \"%\".","ale"),
                        "id" => "ale_inner_wrapper",
                        "std" => "1000px",
                        "type" => "text");

    $options[] = array( 'name' => esc_html__("Manage Background","ale"),
                        'desc' => esc_html__("Select the background color, or upload a custom background image. Default background is the #f5f5f5 color","ale"),
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => esc_html__("Site Pre Loader","ale"),
                        "desc" => esc_html__("Enable or Disable the site preloader","ale"),
                        "id" => "ale_preloder",
                        "std" => "disable",
                        "type" => "select",
                        "options" => array(
                            'disable' => esc_html__('Disable','ale'),
                            'enable' => esc_html__('Enable','ale')
                        ));

    $options[] = array( "name" => esc_html__("Pre loader Animation","ale"),
                        "desc" => esc_html__("Select Pre Loader animation","ale"),
                        "id" => "ale_preloder_style",
                        "std" => "1",
                        "type" => "select",
                        "options" => array(
                            '1' => esc_html__('Rotating Plane','ale'),
                            '2' => esc_html__('Double Bounce','ale'),
                            '3' => esc_html__('Wave','ale'),
                            '4' => esc_html__('Wandering Cubes','ale'),
                            '5' => esc_html__('Spinner','ale'),
                            '6' => esc_html__('Chasing Dots','ale'),
                            '7' => esc_html__('Three Bounce','ale'),
                            '8' => esc_html__('Circle','ale'),
                            '9' => esc_html__('Cube Grid','ale'),
                            '10' => esc_html__('Fading Circle','ale'),
                            '11' => esc_html__('Folding Cube','ale'),
                            '12' => esc_html__('Loader','ale'),
                            '13' => esc_html__('Hand','ale'),
                        ),
                        "dependency" => array("ale_preloder","enable"),
                    );

    $options[] = array( "name" => esc_html__("Background color","ale"),
                        "desc" => esc_html__("Select a background color for Pre loader","ale"),
                        "id" => "ale_loader_bg",
                        "std" => "",
                        "type" => "color",
                        "dependency" => array("ale_preloder","enable"),
                    );

    $options[] = array( "name" => esc_html__("Animation color","ale"),
                        "desc" => esc_html__("Select a color for Animation","ale"),
                        "id" => "ale_loader_animation",
                        "std" => "",
                        "type" => "color",
                        "dependency" => array("ale_preloder","enable"),
                    );

    


    $options[] = array("name" => esc_html__("Footer Options","ale"),
                        "tab" => "ale-footer-settings",
                        "type" => "heading",
                        "icon" => "fa-copyright");

		$options[] = array( "name" => esc_html__("Footer Info","ale"),
                        "desc" => esc_html__("Insert the footer info text","ale"),
                        "id" => "ale_footer_info",
                        "std" => "",
                        "type" => "editor",
									);										

		$options[] = array( "name" => esc_html__("Opening Hours Title","ale"),
                        "desc" => esc_html__("Specify the title","ale"),
                        "id" => "ale_footer_opening_title",
                        "std" => "",
                        "type" => "text",
                        );
		$options[] = array( "name" => esc_html__("Opening Hours","ale"),
                        "desc" => esc_html__("Insert the text","ale"),
                        "id" => "ale_footer_opening_info",
                        "std" => "",
                        "type" => "editor",
                        );

		$options[] = array( "name" => esc_html__("Navigation Title","ale"),
                        "desc" => esc_html__("Specify the title","ale"),
                        "id" => "ale_footer_navigation_title",
                        "std" => "",
                        "type" => "text",
                        );
		$options[] = array( "name" => esc_html__("Contacts Title","ale"),
                        "desc" => esc_html__("Specify the title","ale"),
                        "id" => "ale_footer_contacts_title",
                        "std" => "",
                        "type" => "text",
                        );

		$options[] = array( "name" => esc_html__("Address","ale"),
                        "desc" => esc_html__("Specify the Address","ale"),
                        "id" => "ale_footer_address",
                        "std" => "",
                        "type" => "text",
                        );

		$options[] = array( "name" => esc_html__("Phone 1","ale"),
                        "desc" => esc_html__("Specify the Phone","ale"),
                        "id" => "ale_footer_phone1",
                        "std" => "",
                        "type" => "text",
                        );

		$options[] = array( "name" => esc_html__("Phone 2","ale"),
                        "desc" => esc_html__("Specify the Phone","ale"),
                        "id" => "ale_footer_phone2",
                        "std" => "",
                        "type" => "text",
											);
		$options[] = array( "name" => esc_html__("Email","ale"),
                        "desc" => esc_html__("Specify the Email","ale"),
                        "id" => "ale_footer_email",
                        "std" => "",
                        "type" => "text",
                        );


    $options[] = array( "name" => esc_html__("Widget #1 Title","ale"),
                        "desc" => esc_html__("Insert the title","ale"),
                        "id" => "ale_footer_burger_col1_tit",
                        "std" => "",
                        "type" => "text",
                        "dependency" => array("ale_design_variant","burger"),
                    );

    $options[] = array( "name" => esc_html__("Widget #1 Content","ale"),
                        "desc" => esc_html__("Insert the content","ale"),
                        "id" => "ale_footer_burger_col1_content",
                        "std" => "",
                        "type" => "textarea",
                        "dependency" => array("ale_design_variant","burger"),
                    );

    $options[] = array( "name" => esc_html__("Widget #2 Title","ale"),
                        "desc" => esc_html__("Insert the title","ale"),
                        "id" => "ale_footer_burger_col2_tit",
                        "std" => "",
                        "type" => "text",
                        "dependency" => array("ale_design_variant","burger"),
                    );

    $options[] = array( "name" => esc_html__("Widget #2 Content","ale"),
                        "desc" => esc_html__("Insert the content","ale"),
                        "id" => "ale_footer_burger_col2_content",
                        "std" => "",
                        "type" => "textarea",
                        "dependency" => array("ale_design_variant","burger"),
                    );

    $options[] = array( "name" => esc_html__("Widget #3 Title","ale"),
                        "desc" => esc_html__("Insert the title","ale"),
                        "id" => "ale_footer_burger_col3_tit",
                        "std" => "",
                        "type" => "text",
                        "dependency" => array("ale_design_variant","burger"),
                    );

    $options[] = array( "name" => esc_html__("Widget #3 Content","ale"),
                        "desc" => esc_html__("Insert the content","ale"),
                        "id" => "ale_footer_burger_col3_content",
                        "std" => "",
                        "type" => "textarea",
                        "dependency" => array("ale_design_variant","burger"),
                    );

    $options[] = array( "name" => esc_html__("Widget #4 Title","ale"),
                        "desc" => esc_html__("Insert the title","ale"),
                        "id" => "ale_footer_burger_col4_tit",
                        "std" => "",
                        "type" => "text",
                        "dependency" => array("ale_design_variant","burger"),
                    );

    $options[] = array( "name" => esc_html__("Widget #4 Content","ale"),
                        "desc" => esc_html__("Insert the content","ale"),
                        "id" => "ale_footer_burger_col4_content",
                        "std" => "",
                        "type" => "textarea",
                        "dependency" => array("ale_design_variant","burger"),
                    );


    $options[] = array( "name" => esc_html__("Footer Call Number","ale"),
                        "desc" => esc_html__("Insert the call number","ale"),
                        "id" => "ale_footer_callnumber",
                        "std" => "",
                        "type" => "text",
                        "dependency" => array("ale_footer_variant","default"),
                        "hidefor" => array("ale_design_variant", array('burger','laptica','cosushi')),
                    );

    $options[] = array( "name" => esc_html__("Footer Email Address","ale"),
                        "desc" => esc_html__("Insert the Email Address.","ale"),
                        "id" => "ale_footer_email_address",
                        "std" => "",
                        "type" => "text",
                        "dependency" => array("ale_footer_variant","default"),
                        "hidefor" => array("ale_design_variant", array('burger','laptica')),
                    );

    $options[] = array( "name" => esc_html__("Your Address","ale"),
                        "desc" => esc_html__("Insert the Address.","ale"),
                        "id" => "ale_footer_address",
                        "std" => "",
                        "type" => "text",
                        "dependency" => array("ale_footer_variant","default"),
                        "hidefor" => array("ale_design_variant", array('burger','laptica')),
                    );

    $options[] = array( "name" => esc_html__("Copyrights","ale"),
                        "desc" => esc_html__("Insert the Copyrights text","ale"),
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor",
                    );

    $options[] = array( "name" => esc_html__("Footer Background","ale"),
                        "desc" => esc_html__("Upload or put the image link. Used on specific style variants.","ale"),
                        "id" => "ale_footerbg",
                        "std" => "",
                        "type" => "upload",
                        "hidefor" => array("ale_design_variant", array('bebe'))
                    );

    

    $options[] = array( "name" => esc_html__("Typography","ale"),
                        "tab" => "ale-typography",
                        "type" => "heading",
                        "icon" => "fa-font");

    $options[] = array( "name" => esc_html__("Select the First Font from Google Library","ale"),
                        "desc" => esc_html__("The default Font is - Nunito","ale"),
                        "id" => "ale_font_one",
                        "std" => "Nunito",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => esc_html__("Select the First Font Properties from Google Library","ale"),
                        "desc" => esc_html__("The default Font (extended) is - 700,900","ale"),
                        "id" => "ale_font_one_ex",
                        "std" => "700,900",
                        "type" => "text",
                        );

    $options[] = array( "name" => esc_html__("Select the Second Font from Google Library","ale"),
                        "desc" => esc_html__("The default Font is - Roboto","ale"),
                        "id" => "ale_font_two",
                        "std" => "Roboto",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => esc_html__("Select the Second Font Properties from Google Library","ale"),
                        "desc" => esc_html__("The default Font (extended) is - 400","ale"),
                        "id" => "ale_font_two_ex",
                        "std" => "400",
                        "type" => "text",
                        );

    $options[] = array( 'name' => esc_html__("H1 Style","ale"),
                        'desc' => esc_html__("Change the h1 style","ale"),
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '32px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H2 Style","ale"),
                        'desc' => esc_html__("Change the h2 style","ale"),
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '28px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H3 Style","ale"),
                        'desc' => esc_html__("Change the h3 style","ale"),
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '24px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H4 Style","ale"),
                        'desc' => esc_html__("Change the h4 style","ale"),
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '20px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#ffffff'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H5 Style","ale"),
                        'desc' => esc_html__("Change the h5 style","ale"),
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '16px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H6 Style","ale"),
                        'desc' => esc_html__("Change the h6 style","ale"),
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '14px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("Body Style","ale"),
                        'desc' => esc_html__("Change the body font style","ale"),
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '18px','face' => 'Roboto','style' => 'normal','transform'=>'none', 'weight'=>'400','lineheight'=>'28px','color' => '#7d7d7d'),
                        'type' => 'typography');

	$options[] = array( "name" => esc_html__("Social Profiles & Share","ale"),
                        "tab" => "ale-social-profile",
						"type" => "heading",
                        "icon" => "fa-address-book");

    $options[] = array( "name" => esc_html__("Twitter","ale"),
                        "desc" => esc_html__("Your twitter profile URL.","ale"),
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");

	$options[] = array( "name" => esc_html__("Facebook","ale"),
						"desc" => esc_html__("Your facebook profile URL.","ale"),
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");

    $options[] = array( "name" => esc_html__("Youtube","ale"),
                        "desc" => esc_html__("Your youtube profile URL.","ale"),
                        "id" => "ale_you",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("LinkedIn","ale"),
                        "desc" => esc_html__("Your LinkedIn profile URL.","ale"),
                        "id" => "ale_lin",
                        "std" => "",
                        "type" => "text",
                        "hidefor" => array("ale_design_variant", array('bebe'))
                    );

    $options[] = array( "name" => esc_html__("Pinterest","ale"),
                        "desc" => esc_html__("Your Pinterest profile URL.","ale"),
                        "id" => "ale_pin",
                        "std" => "",
                        "type" => "text"
                    );

    $options[] = array( "name" => esc_html__("Tumblr","ale"),
                        "desc" => esc_html__("Your Tumblr profile URL.","ale"),
                        "id" => "ale_tum",
                        "std" => "",
                        "type" => "text",
                        "hidefor" => array("ale_design_variant", array('bebe'))
                    );

    $options[] = array( "name" => esc_html__("Instagram","ale"),
                        "desc" => esc_html__("Your Instagram profile URL.","ale"),
                        "id" => "ale_insta",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Reddit","ale"),
                        "desc" => esc_html__("Your Reddit profile URL.","ale"),
                        "id" => "ale_red",
                        "std" => "",
                        "type" => "text",
                        "hidefor" => array("ale_design_variant", array('bebe'))
                    );

    $options[] = array( "name" => esc_html__("VK","ale"),
                        "desc" => esc_html__("Your VK profile URL.","ale"),
                        "id" => "ale_vk",
                        "std" => "",
                        "type" => "text",
                        "hidefor" => array("ale_design_variant", array('bebe'))
                    );

    

    $options[] = array("name" => esc_html__("Blog Settings","ale"),
                      "tab" => "ale-blog-settings",
                      "type" => "heading",
                      "icon" => "fa-newspaper-o");

    $options[] = array("name" => esc_html__("Gallery Settings","alekids"),
                      "tab" => "ale-gallery-settings",
                      "type" => "heading",
										);
		$options[] = array( "name" => esc_html__("Posts Count","ale"),
                        "desc" => esc_html__("Specify posts per page count","alekids"),
                        "id" => "ale_gallery_count",
                        "std" => "4",
                        "type" => "text",
                    );
		$options[] = array("name" => esc_html__("Woocommerce Settings","ale"),
                      "tab" => "ale-woocommerce-settings",
                      "type" => "heading",
                      "icon" => "fa-newspaper-o");

		$options[] = array("name" => esc_html__("Columns Count","ale"),
                      "desc" => esc_html__("Select the column count for WooCommerce pages", "ale"),
                      "id" => "ale_woo_columns",
                      "std" => "3",
                      "type" => "select",
                      "options" => $archive_columns);

		$options[] = array("name" => esc_html__("Products per page","ale"),
                      "desc" => esc_html__("Specify the products per page count. By default it is 9", "ale"),
                      "id" => "ale_products_per_page",
                      "std" => "9",
                      "type" => "text");


	return $options;
}




/**
 * Get image sizes for images
 * 
 * @return array
 */
function ale_get_images_sizes() {
	return array(

        'post' => array(
            array(
                'name'      => 'post-smallimage',
                'width'     => 380,
                'height'    => 300,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-bigimage',
                'width'     => 780,
                'height'    => 300,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-featured',
                'width'     => 880,
                'height'    => 520,
                'crop'      => true,
            ),
        ),

        'gallery' => array(
            array(
                'name'      => 'gallery-square',
                'width'     => 495,
                'height'    => 500,
                'crop'      => true,
            ),
        ),
        'gallery' => array(
            array(
                'name'      => 'gallery-slider',
                'width'     => 780,
                'height'    => 480,
                'crop'      => true,
            ),
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function ale_get_post_formats() {
	return array('gallery','link','quote','video','audio');
}


/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function ale_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function ale_media_custom_fields() {
	return array();
}