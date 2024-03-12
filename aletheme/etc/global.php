<?php
class ale_global {

    //generate unique_ids
    private static $ale_unique_counter = 0;

    static function ale_generate_unique_id() {
        self::$ale_unique_counter++;
        return 'ale_uid_' . self::$ale_unique_counter . '_' . uniqid();
    }

    // Demo and plugins list
    public static $demo_list = array ();
    public static $plugins_list = array();

    static $ale_options;
}

//Demos Base
ale_global::$demo_list = array (
    'bebe' => array(
        'text' => 'Bebe',
        'folder' => get_template_directory() . '/aletheme/demos/bebe/',
        'demo_url' => ALETHEME_DEMOS_HOST .'ale-bebe/',
        'category' => array('all','micro-niche','creative'),
        'date-create' => '2021-08-09',
        'demo_preview' => ALETHEME_DEMOS_HOST .'olins_base/preview_screen/bebe.jpg',
        'required_plugins' => array('cpt-alekids','elementor'),
        'builder' => array('js_composer')
    ),

);

ale_global::$plugins_list = array(

    'elementor' => array(
        'name'=>'Elementor Website Builder',
        'location'=>'wp_repo',
        'slug'=>'elementor'
    ),
    
    'woocommerce' => array(
        'name'=>'WooCommerce',
        'location'=>'wp_repo',
        'slug'=>'woocommerce'
    ),
    
    'cpt-alekids' => array(
        'name'=>'Ale Core',
        'location'=>'bundled',
        'slug'=>'cpt-aletheme',
        'source' => ALETHEME_THEME_URL . '/plugins/cpt-alekids.zip'
    ),
);