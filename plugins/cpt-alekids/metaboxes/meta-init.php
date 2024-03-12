<?php

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function ale_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";

    $meta_boxes[] = array(
        'id'         => 'posts_metabox',
        'title'      => esc_html__('Posts Settings','ale'),
        'pages'      => array( 'page' ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(

            array(
                'name' => esc_html__('Select icon for heading','ale'),
                'desc' => esc_html__('Select custom icon for page heading','ale'),
                'id'   => $prefix . 'post_heading_icon',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Sun Icon','ale'), 'value' => 'sun', ),
                    array( 'name' => esc_html__('Map Icon','ale'), 'value' => 'map', ),
                    array( 'name' => esc_html__('Sale Icon','ale'), 'value' => 'sale', ),
                    array( 'name' => esc_html__('Gallery Icon','ale'), 'value' => 'gallery', ),
                    array( 'name' => esc_html__('Feather Icon','ale'), 'value' => 'feather', ),
                ),
            ),
				)
    );

    
	return $meta_boxes;
}