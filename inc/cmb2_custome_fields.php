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
	$prefix = '_au_service_';

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

	$auservice_front = new_cmb2_box( array(
		'id'            => $prefix . 'front_page_Metabox',
		'title'         => esc_html__( 'Front Page Metabox', 'au_service' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on'		=> array (
			'key' => 'id',
			'value' => '12'
		)
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$auservice_front->add_field( array(
		'name'    => 'Hero Image',
		'desc'    => 'Upload an image or enter an URL.',
		'id'      => $prefix.'hero_image',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Select / Upload Hero Image' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			'type' => 'image/jpeg', // Make library only display PDFs.
			// Or only allow gif, jpg, or png images
			// 'type' => array(
			// 	'image/gif',
			// 	'image/jpeg',
			// 	'image/png',
			// ),
		),
		'preview_size' => 'large', // Image size to use when previewing in the admin.
	) );

	$auservice_front->add_field( array(
		'name'       => __( 'Hero Heading Text', 'au_service' ),
		'desc'       => __( 'Write Hero Heading Text' , 'au_service' ),
		'id'         =>  $prefix.'hero_heading_text',
		'type'       => 'text',
		'default'	 => 'FREE DIAGNOSTICS FOR CARS!',		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'Hero Content Text', 'au_service' ),
		'desc'       => __( 'Write Hero content Text' , 'au_service' ),
		'id'         =>  $prefix.'hero_content',
		'type'       => 'wysiwyg',
		'default'	 => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
		urae ellentesque habitant morbi tristique senectusv',		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'Hero button Text', 'au_service' ),
		'desc'       => __( 'Write Hero button Text' , 'au_service' ),
		'id'         =>  $prefix.'hero_button',
		'type'       => 'text_small',
		'default'	 => 'Read more',		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'Hero button Text', 'au_service' ),
		'desc'       => __( 'Write Hero button Text' , 'au_service' ),
		'id'         =>  $prefix.'hero_button',
		'type'       => 'text_small',
		'default'	 => 'Read more',		
	) );

	$auservice_front->add_field( array(
		'name'       => __( 'Hero CTA Text', 'au_service' ),
		'desc'       => __( 'Write Hero CTA Text' , 'au_service' ),
		'id'         =>  $prefix.'hero_text_cta',
		'type'       => 'text',
		'default'	 => 'You Have To Fix The Problem. Let’s Us Help You!',
		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'Hero CTA Text Button', 'au_service' ),
		'desc'       => __( 'Write Hero CTA Text Button' , 'au_service' ),
		'id'         =>  $prefix.'hero_text_cta_btn',
		'type'       => 'text',
		'default'	 => 'Make an Appionment',
		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'About Heading', 'au_service' ),
		'desc'       => __( 'Write About Headding' , 'au_service' ),
		'id'         =>  $prefix.'about_headding',
		'type'       => 'text',
		'default'	 => 'WELCOME TO AUSERVICE',
		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'About Content', 'au_service' ),
		'desc'       => __( 'Write About content' , 'au_service' ),
		'id'         =>  $prefix.'about_content',
		'type'       => 'textarea',
		'default'	 => 'In sed elit et diam eleifend accumsan. Vestibulum finibus condimentum eros, at auctor massa tincidunt sit amet. Nulla imperdiet commodo nisl in pretium. Quisque dolor sit amet est commodo, quis aliquet velit congue.',
		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'About Section Image', 'au_service' ),
		'desc'       => __( 'Write About content' , 'au_service' ),
		'id'         =>  $prefix.'about_image',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => true, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Select / Upload About Image' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			'type' => 'image/jpeg',
		),
		'preview_size' => 'large', // Image size to use when previewing in the admin.
	) );

	// Start About Repeat Able Group Field //
	$cmb_repeat_test = new_cmb2_box( array(
		'id'            => $prefix . 'progress',
		'title'         => __( 'About Section Progress Bar', 'au_service' ),
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'id', 'value' => '12' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
	) );


	// Repeatable group
	$group_repeat_test = $cmb_repeat_test->add_field( array(
		'id'          => $prefix . 'progress_sections',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => __( 'Progress Bar', 'au_service' ) . ' {#}', // {#} gets replaced by row number
			'add_button'    => __( 'Add another Progress bar', 'au_service' ),
			'remove_button' => __( 'Remove Progress bar', 'au_service' ),
		),
	) );


	//* Title
	$cmb_repeat_test->add_group_field( $group_repeat_test, array(
		'name'    => __( 'Progress Title', 'au_service' ),
		'id'      => $prefix . 'progress_title',
		'type'    => 'text',
	) );
	


	//* Textarea
	$cmb_repeat_test->add_group_field( $group_repeat_test, array(
		'name'    => __( 'Progress value', 'au_service' ),
		'id'      => $prefix . 'progress_value',
		'type'    => 'text',
		'options' => array( 'text_rows' => 8, ),
	) );
	// End Repeat Able Group Field //


	$auservice_front->add_field( array(
		'name'       => __( 'Sevice Headding', 'au_service' ),
		'desc'       => __( 'Write Sevice Headding' , 'au_service' ),
		'id'         =>  $prefix.'sevice_headding',
		'type'       => 'text',
		'default'	 => 'OUR SERVICES',
		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'Gallery Headding', 'au_service' ),
		'desc'       => __( 'Write gallery headding' , 'au_service' ),
		'id'         =>  $prefix.'gallery_headding',
		'type'       => 'text',
		'default'	 => 'Gallery',
		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'Testimonial Headding', 'au_service' ),
		'desc'       => __( 'Write testimonial headding' , 'au_service' ),
		'id'         =>  $prefix.'testimonial_headding',
		'type'       => 'text',
		'default'	 => 'WHAT OUR CLIENT SAY?',
		
	) );
	$auservice_front->add_field( array(
		'name'       => __( 'Clainet Headding', 'au_service' ),
		'desc'       => __( 'Write clainet headding' , 'au_service' ),
		'id'         =>  $prefix.'clainet_headding',
		'type'       => 'text',
		'default'	 => 'OUR PARTNER',
		
	) );	

	// Start Counter Repeat Able Group Field //
	$au_repeat_test = new_cmb2_box( array(
		'id'            => $prefix . 'counter_up',
		'title'         => __( 'Counter Section Progress Bar', 'au_service' ),
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'id', 'value' => '12' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
	) );

	// Repeatable group
	$group_repeat = $au_repeat_test->add_field( array(
		'id'          => $prefix . 'counter_sections',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => __( 'Counter Item', 'au_service' ) . ' {#}', // {#} gets replaced by row number
			'add_button'    => __( 'Add another Counter', 'au_service' ),
			'remove_button' => __( 'Remove Counter', 'au_service' ),
		),
	) );

	//* Title
	$au_repeat_test->add_group_field( $group_repeat, array(
		'name'    => __( 'Counter Title', 'au_service' ),
		'id'      => $prefix .'counter_title',
		'type'    => 'text',
		'default' => 'Years Of Experience',
	) );

	//* Textarea
	$au_repeat_test->add_group_field( $group_repeat, array(
		'name'    => __( 'Counter value', 'au_service' ),
		'id'      => $prefix . 'counter_value',
		'type'    => 'text',
		'options' => array( 'text_rows' => 8, ),
		'default' => 15,
	) );
	// End Repeat Able Group Field //

	// Start Contact page Repeat Able Group Field //
	$au_repeat_test = new_cmb2_box( array(
		'id'            => $prefix . 'office',
		'title'         => __( 'Branch Office List', 'au_service' ),
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'id', 'value' => '20' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
	) );

	// Repeatable group
	$group_repeat = $au_repeat_test->add_field( array(
		'id'          => $prefix . 'office_info',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => __( 'Office List', 'au_service' ) . ' {#}', // {#} gets replaced by row number
			'add_button'    => __( 'Add another Office', 'au_service' ),
			'remove_button' => __( 'Remove Office', 'au_service' ),
			
		),
	) );

	//* Title
	$au_repeat_test->add_group_field( $group_repeat, array(
		'name'    => __( 'Office name', 'au_service' ),
		'id'      => $prefix .'office_name',
		'type'    => 'text',
	) );

	//* Textarea
	$au_repeat_test->add_group_field( $group_repeat, array(
		'name'    => __( 'Office Address', 'au_service' ),
		'id'      => $prefix . 'office_address',
		'type'    => 'text',
		'options' => array( 'text_rows' => 8, ),
	) );
	$au_repeat_test->add_group_field( $group_repeat, array(
		'name'    => __( 'Office Email', 'au_service' ),
		'id'      => $prefix . 'office_email',
		'type'    => 'text',
		'options' => array( 'text_rows' => 8, ),
	) );
	$au_repeat_test->add_group_field( $group_repeat, array(
		'name'    => __( 'Office Phone', 'au_service' ),
		'id'      => $prefix . 'office_phone',
		'type'    => 'text',
		'options' => array( 'text_rows' => 8, ),
	) );

	// End Repeat Able Group Field //


}
add_action('cmb2_admin_init','au_service_cmb2');