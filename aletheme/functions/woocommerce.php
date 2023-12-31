<?php
/*
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    //Declare WooCommerce support
    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

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
                case '5' :
                    return 5;
                    break;
            }
        }
    }

    function ale_show_custom_keira_thumbnail(){
        echo '<div class="keira_product_thumbnail post_image_holder">';
        woocommerce_template_loop_product_link_open();
        echo get_the_post_thumbnail(get_the_ID(),'full');
        woocommerce_template_loop_product_link_close();
        echo '</div>';
    }

    function ale_exotico_custom_button(){
        echo '<a href="'.get_the_permalink().'" class="buy-btn"><i class="buy-btn__icon"></i>'.esc_html__('Buy','ale').'</a>';
    }

    function ale_exotico_custom_title(){ ?>
        <span class="shop-item__title"><?php the_title(); ?></span>
    <?php }

    function ale_exotico_custom_single_image(){
        echo get_the_post_thumbnail(get_the_ID(),'large');
    }

    function ale_start_custom_keira_data(){
        echo '<div class="keira_product_data"><span class="prod_cat font_two">'.esc_html__('our products','ale').'</span>';
    }

    function ale_end_custom_keira_data(){
        echo '</div>';
    }

    //AJAX Change Cart items in Header
    add_filter( 'woocommerce_add_to_cart_fragments', 'ale_header_add_to_cart_fragment' );
    function ale_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;

        ob_start();

        if(ALETHEME_DESIGN_STYLE == 'keira'){
            echo '<a href="' . esc_url(wc_get_cart_url()) . '" title="' . esc_html__( 'Cart','ale' ) . '" class="cart_link ale_cart_link_location"><span class="cart"><span>'. esc_attr(WC()->cart->get_cart_contents_count()) .'</span></span></a>';
            $fragments['a.ale_cart_link_location'] = ob_get_clean();
        } else {
            echo '<a href="' . esc_url(wc_get_cart_url()) . '" title="' . esc_html__( 'Cart','ale' ) . '" class="cart_link ale_cart_link_location"><span>'.esc_attr(WC()->cart->get_cart_contents_count()).'</span></a>';
            $fragments['a.ale_cart_link_location'] = ob_get_clean();
        }

        ob_end_clean();
        return $fragments;
    }

    //Related products count based on columns option settings
    add_filter( 'woocommerce_output_related_products_args', 'ale_related_products_args' );
    function ale_related_products_args( $args ) {
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
            case '5' :
                $args['posts_per_page'] = 5;
                $args['columns']        = 5;

                return $args;
                break;
        }
    }

    //Up sells Products columns based on options columns
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
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
                case '5' :
                    woocommerce_upsell_display( 5, 5 );
                    break;
            }
        }
    }

    //CSS Styles for Shop
    function ale_enqueue_wc_styles() {
        wp_enqueue_style( 'ale-wc-general', ALETHEME_THEME_URL . '/assets/css/wc/wc_general.css', array(), ALETHEME_THEME_VERSION, 'all');

        //Load Selected Variant Style
        $wc_variant_name = ale_get_option('woo_grid_style');

        if($wc_variant_name){
            switch($wc_variant_name){
                case 'rosi' :
                    wp_enqueue_style( 'ale-wc-rosi', ALETHEME_THEME_URL . '/assets/css/wc/wc_rosi_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'fashion' :
                    wp_enqueue_style( 'ale-wc-fashion', ALETHEME_THEME_URL . '/assets/css/wc/wc_fashion_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'minimal' :
                    wp_enqueue_style( 'ale-wc-minimal', ALETHEME_THEME_URL . '/assets/css/wc/wc_minimal_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'vintage' :
                    wp_enqueue_style( 'ale-wc-vintage', ALETHEME_THEME_URL . '/assets/css/wc/wc_vintage_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'keira' :
                    wp_enqueue_style( 'ale-wc-keira', ALETHEME_THEME_URL . '/assets/css/wc/wc_keira_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'exotico' :
                    wp_enqueue_style( 'ale-wc-exotico', ALETHEME_THEME_URL . '/assets/css/wc/wc_exotico_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'organic' :
                    wp_enqueue_style( 'ale-wc-organic', ALETHEME_THEME_URL . '/assets/css/wc/wc_organic_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'smoothie' :
                    wp_enqueue_style( 'ale-wc-smoothie', ALETHEME_THEME_URL . '/assets/css/wc/wc_smoothie_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'burger' :
                    wp_enqueue_style( 'ale-wc-burger', ALETHEME_THEME_URL . '/assets/css/wc/wc_burger_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'laptica' :
                    wp_enqueue_style( 'ale-wc-laptica', ALETHEME_THEME_URL . '/assets/css/wc/wc_laptica_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'kitty' :
                    wp_enqueue_style( 'ale-wc-kitty', ALETHEME_THEME_URL . '/assets/css/wc/wc_kitty_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'moka' :
                    wp_enqueue_style( 'ale-wc-moka', ALETHEME_THEME_URL . '/assets/css/wc/wc_moka_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'delizioso' :
                    wp_enqueue_style( 'ale-wc-delizioso', ALETHEME_THEME_URL . '/assets/css/wc/wc_delizioso_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
                case 'cosushi' :
                    wp_enqueue_style( 'ale-wc-cosushi', ALETHEME_THEME_URL . '/assets/css/wc/wc_cosushi_style.css', array('ale-wc-general'), ALETHEME_THEME_VERSION, 'all');
                    break;
            }
        }
    }
    add_action( 'wp_enqueue_scripts', 'ale_enqueue_wc_styles' );

    //Remove breadcrumb

    add_action( 'init', 'ale_remove_wc_breadcrumbs' );
    function ale_remove_wc_breadcrumbs() {
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
    }

    //Load Custom Select JS and CSS
    function ale_woo_enqueue_styles() {
        wp_register_style( 'select2',
            ALETHEME_THEME_URL . '/assets/css/libs/select2.min.css',
            array(),
            ALETHEME_THEME_VERSION,
            'all' );
        wp_enqueue_style( 'select2' );

        wp_register_script( 'select2',
            ALETHEME_THEME_URL . '/assets/js/libs/select2.min.js',
            array( 'jquery' ),
            ALETHEME_THEME_VERSION,
            true );
        wp_enqueue_script( 'select2' );

        wp_register_script( 'ale-woocommerce',
            ALETHEME_THEME_URL . '/assets/js/woocommerce.min.js',
            array( 'jquery' ),
            ALETHEME_THEME_VERSION,
            true );
        wp_enqueue_script( 'ale-woocommerce' );
    }

    add_action( 'wp_enqueue_scripts', 'ale_woo_enqueue_styles' );



    //Products per page based on theme options
    function ale_woo_products_per_page_options_value($cols){
        return esc_attr(ale_get_option('products_per_page'));
    }
    if(ale_get_option('products_per_page')){
        add_filter( 'loop_shop_per_page', 'ale_woo_products_per_page_options_value', 20 );
    }


    //Single Product Slider for Woocommerce
    add_action( 'after_setup_theme', 'ale_woocommerse_plugin_setup' );

    function ale_woocommerse_plugin_setup() {
        if(!in_array(ale_get_option('woo_grid_style'), array('burger','moka','cosushi'))){
            add_theme_support( 'wc-product-gallery-zoom' );
        }
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }


    //Share options
    function ale_get_woo_share(){
        echo '<div class="ale_woo_share">';
        echo esc_html_e('Share:','ale') . get_template_part('partials/shop_single/wooshare');
        echo '</div>';
    }


}

*/