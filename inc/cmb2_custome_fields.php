<?php
/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

function au_service_cmb2 (){
	$prefix = '_au_service';

	$auservice = new_cmb2_box( array(
		'id'            => $prefix . 'Services Metabox',
		'title'         => esc_html__( 'Test Metabox', 'au_service' ),
		'object_types'  => array( 'services' ), // Post type
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );
	
	$auservice->add_field( array(
		'name'       => __( 'Services item text', 'au_service' ),
		'desc'       => __( 'Write Service text ' , 'au_service' ),
		'id'         =>  $prefix.'item_text',
		'type'       => 'text',
		
	) );
	$auservice->add_field( array(
		'name'       => __( 'Services item_icon', 'au_service' ),
		'desc'       => __( 'Write only icon class ' , 'au_service' ),
		'id'         =>  $prefix.'item_icon',
		'type'       => 'text_medium',
		
	) );
	$auservice->add_field( array(
		'name'       => __( 'Services item button text', 'au_service' ),
		'desc'       => __( 'Write button text' , 'au_service' ),
		'id'         =>  $prefix.'button_text',
		'type'       => 'text_small',
		'default' => 'Read More',
		
	) );
}
add_action('cmb2_admin_init','au_service_cmb2');