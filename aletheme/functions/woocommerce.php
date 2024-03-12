<?php

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    //Declare WooCommerce support
    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

		//CSS Styles for Shop
    function alekids_enqueue_wc_styles() {
        wp_enqueue_style( 'alekids_woocommerce', ALETHEME_THEME_URL . '/assets/css/alekids_woocommerce.css', array(), ALETHEME_THEME_VERSION, 'all');

    }
    add_action( 'wp_enqueue_scripts', 'alekids_enqueue_wc_styles' );

//Columns Settings based on Theme Options
    add_filter( 'loop_shop_columns', 'loop_columns' );
    if ( ! function_exists( 'loop_columns' ) ) {

        function loop_columns() {
            $ale_column = ale_get_option( 'woo_columns' );

            switch ( $ale_column ) {
                case '1' :
                    return 1;
                    break;
                case '2' :
                    return 2;
                    break;
                case '3' :
                    return 3;
                    break;
                case '4' :
                    return 4;
                    break;
            }
        }
    }

		//Related products count based on columns option settings
    add_filter( 'woocommerce_output_related_products_args', 'alekids_related_products_args' );
    function alekids_related_products_args( $args ) {
        $ale_column = ale_get_option( 'woo_columns' );

        switch ( $ale_column ) {
            case '1' :
                $args['posts_per_page'] = 1;
                $args['columns']        = 1;

                return $args;
                break;
            case '2' :
                $args['posts_per_page'] = 2;
                $args['columns']        = 2;

                return $args;
                break;
            case '3' :
                $args['posts_per_page'] = 3;
                $args['columns']        = 3;

                return $args;
                break;
            case '4' :
                $args['posts_per_page'] = 4;
                $args['columns']        = 4;

                return $args;
                break;
        }
    }

    //Up sells Products columns based on options columns
  /*  remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
    add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );

    if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
        function woocommerce_output_upsells() {
            $ale_column = ale_get_option( 'woo_columns' );

            switch ( $ale_column ) {
                case '1' :
                    woocommerce_upsell_display( 1, 1 );
                    break;
                case '2' :
                    woocommerce_upsell_display( 2, 2 );
                    break;
                case '3' :
                    woocommerce_upsell_display( 3, 3 );
                    break;
                case '4' :
                    woocommerce_upsell_display( 4, 4 );
                    break;
            }
        }
    } */

		//Products per page based on theme options
    
    if(ale_get_option('products_per_page')){
			function alekids_woo_products_per_page_options_value($cols){
        return esc_attr(ale_get_option('products_per_page'));
    }
      add_filter( 'loop_shop_per_page', 'alekids_woo_products_per_page_options_value', 20 );
    }

	function alekids_woo_get_excerpt() { ?>
<div class="woo_excerpt">
	<?php echo wp_kses_post(ale_trim_excerpt(9)); ?>
</div>
<?php }

function alekids_custom_pagination() {
	return get_template_part('partials/pagination'); 
}

function alekids_get_sidebar() {
	if ( is_active_sidebar( 'shop-sidebar' ) ) { ?>
<aside class="sidebar cf">
	<?php dynamic_sidebar( 'shop-sidebar' ); ?>
</aside>
<?php } 
}

//Hooks


//Remove breadcrumbs
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
//Remove opening and closing tags on archive
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//Remove cart button from product, move to hover box
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
add_action('alekids_custom_woo_product_hover','woocommerce_template_loop_add_to_cart',50);

//Link, Title, Excerpt for Hover Product
add_action('alekids_custom_woo_product_hover','woocommerce_template_loop_product_link_open',10);
add_action('alekids_custom_woo_product_hover','woocommerce_template_loop_product_link_close',20);
add_action('alekids_custom_woo_product_hover','woocommerce_template_loop_product_link_open',4);
add_action('alekids_custom_woo_product_hover','alekids_woo_get_excerpt',5);
add_action('alekids_custom_woo_product_hover','woocommerce_template_loop_product_link_close',6);
add_action('alekids_custom_woo_product_hover','woocommerce_template_loop_product_title',15);
add_action('alekids_custom_woo_product_hover','woocommerce_template_loop_price',25);

//Move Sale icon
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
add_action('alekids_custom_product_sale', 'woocommerce_show_product_loop_sale_flash', 10);

//Remove rating from product
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

//Remove opening and closing link for product
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

//Move notices block
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
add_action('alekids_custom_woo_notices', 'woocommerce_output_all_notices', 10);

//Replace pagination
remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
add_action( 'woocommerce_after_shop_loop', 'alekids_custom_pagination', 10 );

//disable zeros for price
// add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

//Custom image size for archive
add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
return array(
'width' => 230,
'height' => 320,
'crop' => 1,
);
} );

//Specify custom sidebar for shop archive
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
add_action('woocommerce_sidebar', 'alekids_get_sidebar', 10);

// add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');


//Move product rating on single page
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

}