<?php


/**
 * Categories and Custom Taxonomies
 */

//Categories for Posts
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Sushi',
    'parent_id' => 0,
    'description' => '',
));


//Categories for WooCommerce Shop
$preview_shop_cat_1_id = ale_demo_category::add_term(array(
    'term_name' => 'Asia Sushi Set',
    'taxonomy'=>'product_cat',
    'parent_id' => 0,
    'description' => '',
));



/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Lipsum fimajority humour ",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_blog1',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheadingwithdefaults',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
));
ale_demo_content::add_post(array(
    'title' => "Lipsum randomised words",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_blog2',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheadingwithdefaults',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
));
ale_demo_content::add_post(array(
    'title' => "Lorems randomised words",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => 'ale_blog3',
    'post_type' => 'post',
    'ale_maskonheading' => 'disable',
    'ale_featuredimagecover' => '',
    'ale_post_pre_title' => '',
    'ale_post_title_position' => 'afterheadingwithdefaults',
    'ale_post_info_line' => 'before_content',
    'ale_featured_position' => 'no',
    'ale_author_info' => 'disable',
    'ale_sidebar_position' => 'no',
));




//WooCommerce Products
ale_demo_content::add_post(array(
    'title' => "Sushi Mik0",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p1',
    'post_type' => 'product',
    '_regular_price' => '35',
    '_price' => '35',
    '_sale_price' => '',
    '_visibility' => 'visible',
));
ale_demo_content::add_post(array(
    'title' => "Sushi Miko",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p2',
    'post_type' => 'product',
    '_regular_price' => '24',
    '_price' => '24',
    '_sale_price' => '',
    '_visibility' => 'visible',
));
ale_demo_content::add_post(array(
    'title' => "Tako sushi",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p3',
    'post_type' => 'product',
    '_regular_price' => '27',
    '_price' => '27',
    '_sale_price' => '',
    '_visibility' => 'visible',
));
ale_demo_content::add_post(array(
    'title' => "Tako sushi",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p4',
    'post_type' => 'product',
    '_regular_price' => '19',
    '_price' => '19',
    '_sale_price' => '',
    '_visibility' => 'visible',
));
ale_demo_content::add_post(array(
    'title' => "loko moko",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p5',
    'post_type' => 'product',
    '_regular_price' => '29',
    '_price' => '29',
    '_sale_price' => '',
    '_visibility' => 'visible',
));
ale_demo_content::add_post(array(
    'title' => "loko moko",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p6',
    'post_type' => 'product',
    '_regular_price' => '34',
    '_price' => '34',
    '_sale_price' => '',
    '_visibility' => 'visible',
));
ale_demo_content::add_post(array(
    'title' => "Takumi set",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p7',
    'post_type' => 'product',
    '_regular_price' => '14',
    '_price' => '14',
    '_sale_price' => '',
    '_visibility' => 'visible',
));
ale_demo_content::add_post(array(
    'title' => "Takumi set",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p8',
    'post_type' => 'product',
    '_regular_price' => '54',
    '_price' => '54',
    '_sale_price' => '',
    '_visibility' => 'visible',
));
ale_demo_content::add_post(array(
    'title' => "mikumi set",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p9',
    'post_type' => 'product',
    '_regular_price' => '36',
    '_price' => '36',
    '_sale_price' => '',
    '_visibility' => 'visible',
));
ale_demo_content::add_post(array(
    'title' => "mikumi set",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/post_default.dat',
    'post_excerpt' => 'Donec rutrum libero odio, eget vehicula lacus tristique vel. Sed eu scelerisque diam. Donec convallis, tortor et dapibus malesuada, lorem libero semper tellus.',
    'taxonomy_id_array' => array($preview_shop_cat_1_id),
    'taxonomy_name' => 'product_cat',
    'featured_image_ale_id' => 'ale_p10',
    'post_type' => 'product',
    '_regular_price' => '26',
    '_price' => '26',
    '_sale_price' => '',
    '_visibility' => 'visible',
));


/**
 * Pages
 */

$cf7_post_id = ale_demo_content::add_post(array(
    'title' => "Contact form sushi",
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/cf7.dat',
    'post_excerpt' => '',
    'post_type' => 'wpcf7_contact_form',
    'ale_sidebar_position' => 'no',
    '_form' => '<div class="book_form">
    <div class="left_part">
    [select persons class:cosushiselect "1 Person" "2 Persons" "3 Persons" "4 Persons" "5 Persons" "6 Persons" "7 Persons" "8 Persons" "9 Persons" "10 Persons"]
    
    [select times class:cosushiselect "5:00 pm" "6:00 pm" "7:00 pm" "8:00 pm" "9:00 pm" "10:00 pm" "11:00 pm" ]
    
    [text* date placeholder "Date*"]
    </div>
    <div class="right_part">
    [text* your-name placeholder "Your name*"]
    
    [email* your-phone placeholder "Your phone*"]
    
    [email* your-email placeholder "Your e-mail*"]
    </div>
    </div>
    <div class="submitcosushi"><div class="smalldecorbut"></div> [submit "Submit"] <div class="smalldecorbut"></div></div>',
));

//Blog page
$ale_blog_id = ale_demo_content::add_page(array(
    'title' => 'Blog',
    'template' => 'index.php',
    'ale_featured_position' => 'in_heading',
    'ale_post_title_position' => 'afterheading',
    'postspage'=>true,
));


//Import inner pages built with Page Builders
if(isset($_COOKIE['import_builder_coSushi'])){
    $selected_builder = $_COOKIE['import_builder_coSushi'];

    if($selected_builder == 'js_composer'){

        //Contact page with WPBakery
        $ale_contact_id = ale_demo_content::add_page(array(
            'title' => 'Contact',
            'file' => get_template_directory() . '/aletheme/demos/cosushi/data/contact.dat',
            'featured_image_ale_id' => '',
            'ale_maskonheading' => 'disable',
            'ale_featured_position' => 'no',
            'ale_featuredimagecover' => '',
            'ale_post_pre_title' => 'Gravida ullamcorper quis enim molestie elementum donec mauris, tempus sit. Ac semper morbi ut erat tristique tortor sodales dictums',
            'ale_post_title_position' => 'onheadingfeatured',
        ));
        $ale_about_id = ale_demo_content::add_page(array(
            'title' => 'About',
            'file' => get_template_directory() . '/aletheme/demos/cosushi/data/about.dat',
            'featured_image_ale_id' => '',
            'ale_maskonheading' => 'disable',
            'ale_featured_position' => 'no',
            'ale_featuredimagecover' => '',
            'ale_post_pre_title' => 'Gravida ullamcorper quis enim molestie elementum donec mauris, tempus sit. Ac semper morbi ut erat tristique tortor sodales dictums',
            'ale_post_title_position' => 'onheadingfeatured',
        ));
        $ale_promo_id = ale_demo_content::add_page(array(
            'title' => 'Promo',
            'file' => get_template_directory() . '/aletheme/demos/cosushi/data/promo.dat',
            'featured_image_ale_id' => '',
            'ale_maskonheading' => 'disable',
            'ale_featured_position' => 'no',
            'ale_featuredimagecover' => '',
            'ale_post_pre_title' => 'Gravida ullamcorper quis enim molestie elementum donec mauris, tempus sit. Ac semper morbi ut erat tristique tortor sodales dictums',
            'ale_post_title_position' => 'onheadingfeatured',
        ));
        
        //Home page with WPBakery
        $ale_homepage_id = ale_demo_content::add_page(array(
            'title' => 'Home',
            'homepage' => true,
            'file' => get_template_directory() . '/aletheme/demos/cosushi/data/home.dat',
            'template' => 'template-fullwidth.php',
        ));
    
    } else {
        $ale_contact_id = ale_demo_content::add_page(array(
            'title' => 'Contact',
            'featured_image_ale_id' => '',
            'ale_maskonheading' => 'disable',
            'ale_featured_position' => 'no',
            'ale_featuredimagecover' => '',
            'ale_post_pre_title' => 'Gravida ullamcorper quis enim molestie elementum donec mauris, tempus sit. Ac semper morbi ut erat tristique tortor sodales dictums',
            'ale_post_title_position' => 'onheadingfeatured',
            '_elementor_data' => get_template_directory() . '/aletheme/demos/cosushi/data/elementor_data_contact.dat',
            '_elementor_edit_mode' => 'builder',
        ));
        $ale_about_id = ale_demo_content::add_page(array(
            'title' => 'About',
            'featured_image_ale_id' => '',
            'ale_maskonheading' => 'disable',
            'ale_featured_position' => 'no',
            'ale_featuredimagecover' => '',
            'ale_post_pre_title' => 'Gravida ullamcorper quis enim molestie elementum donec mauris, tempus sit. Ac semper morbi ut erat tristique tortor sodales dictums',
            'ale_post_title_position' => 'onheadingfeatured',
            '_elementor_data' => get_template_directory() . '/aletheme/demos/cosushi/data/elementor_data_about.dat',
            '_elementor_edit_mode' => 'builder',
        ));
        $ale_promo_id = ale_demo_content::add_page(array(
            'title' => 'Promo',
            'featured_image_ale_id' => '',
            'ale_maskonheading' => 'disable',
            'ale_featured_position' => 'no',
            'ale_featuredimagecover' => '',
            'ale_post_pre_title' => 'Gravida ullamcorper quis enim molestie elementum donec mauris, tempus sit. Ac semper morbi ut erat tristique tortor sodales dictums',
            'ale_post_title_position' => 'onheadingfeatured',
            '_elementor_data' => get_template_directory() . '/aletheme/demos/cosushi/data/elementor_data_promo.dat',
            '_elementor_edit_mode' => 'builder',
        ));
        $ale_homepage_id = ale_demo_content::add_page(array(
            'title' => 'Home',
            'homepage' => true,
            'template' => 'template-fullwidth.php',
            '_elementor_data' => get_template_directory() . '/aletheme/demos/cosushi/data/elementor_data_home.dat',
            '_elementor_edit_mode' => 'builder',
        ));
    }
}






//WooCommerce Page
$ale_shop_id = ale_demo_content::add_page(array(
    'title' => 'Shop',
));
$ale_cart_id = ale_demo_content::add_page(array(
    'title' => 'Cart',
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/cart.dat',
    'ale_post_title_position' => 'onheadingfeatured',
));
$ale_checkout_id = ale_demo_content::add_page(array(
    'title' => 'Checkout',
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/checkout.dat',
    'ale_post_title_position' => 'onheadingfeatured',
));
$ale_my_account_id = ale_demo_content::add_page(array(
    'title' => 'My Account',
    'file' => get_template_directory() . '/aletheme/demos/cosushi/data/my_account.dat',
    'ale_post_title_position' => 'onheadingfeatured',
));



/**
 * Navigation Settings
 */
$ale_demo_right_menu = ale_demo_menus::create_menu('Header Right Menu', 'header_right_menu');
$ale_demo_left_menu = ale_demo_menus::create_menu('Header Left Menu', 'header_left_menu');
$ale_demo_mobile_menu = ale_demo_menus::create_menu('Mobile Menu', 'mobile_menu');
$ale_demo_footer_menu = ale_demo_menus::create_menu('Footer Menu', 'footer_menu');

//Header Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_left_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $ale_demo_left_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_left_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));

ale_demo_menus::add_page(array(
    'title' => 'Menu',
    'add_to_menu_id' => $ale_demo_right_menu,
    'page_id' => $ale_shop_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Promo',
    'add_to_menu_id' => $ale_demo_right_menu,
    'page_id' => $ale_promo_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_right_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));

//Mobile Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_homepage_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Menu',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_shop_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Promo',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_promo_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $ale_demo_mobile_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));


//WP Options Settings
ale_demo_options::update_shop_cart($ale_cart_id);
ale_demo_options::update_shop_checkout($ale_checkout_id);
ale_demo_options::update_shop_account($ale_my_account_id);

ale_demo_options::update_tagline('Sushi');
ale_demo_options::update_posts_per_page(3);

ale_demo_options::import_rev_slider('http://alethemes.com/olins_base/media/cosushi/cosushi.zip');