<?php 
    function auservice_custom_post(){
        register_post_type('services', array(
            'labels' => array(
                    'name'=> 'Service Content',
                    'menu_name' => 'Service Item',
                    'all_items' =>'All Service content',
                    'add_new' => 'Add New Service content',
                    'add_new_item' => 'Add New Service content Item'
                    
            ),
            'public' => true,
            'supports'=>array(
                'title','revisions','page-attributes'
            )
        ));

        register_post_type('galerrys', array(
            'labels' => array(
                    'name'=> 'Galerry Content',
                    'menu_name' => 'Galerry Item',
                    'all_items' =>'All Galerry content',
                    'add_new' => 'Add New Galerry content',
                    'add_new_item' => 'Add New Galerry content Item'
                    
            ),
            'public' => true,
            'supports'=>array(
                'title','revisions','editor','thumbnail','custom-fields','page-attributes'
            )
        ));

        register_post_type('claient-logo', array(
            'labels' => array(
                    'name'=> 'Claient Content',
                    'menu_name' => 'Claient Item',
                    'all_items' =>'All Claient',
                    'add_new' => 'Add New Claient Logo',
                    'add_new_item' => 'Add New Claient Logo Item'
                    
            ),
            'public' => true,
            'supports'=>array(
                'title','revisions','thumbnail'
            )
        ));
        register_post_type('testimonial', array(
            'labels' => array(
                    'name'=> 'Testimonial Content',
                    'menu_name' => 'Testimonial Item',
                    'all_items' =>'All Testimonial',
                    'add_new' => 'Add New Testimonial',
                    'add_new_item' => 'Add New Testimonial Item',
            ),
            'public' => true,
            'supports'=>array(
                'title','revisions','thumbnail','custom-fields','page-attributes'
            )
        ));
    }
    add_action('init','auservice_custom_post');