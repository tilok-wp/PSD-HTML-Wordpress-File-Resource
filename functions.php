<?php 

function auseervice_theme_init(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('post-thum',400, 400, true);
    add_image_size('client-thum',175, 50, true);

    register_nav_menus(array(
        'main_menu' => 'Main Menu',
        'other_menu' => 'Other Menu'
    ));

}
add_action('after_setup_theme','auseervice_theme_init');

function auseervice_theme_widgets(){
	register_sidebar( array(
		'name'          => 'Footer widgets',
		'id'            => 'footer_widget',
		'before_widget' => '<div class="col-md-3 col-sm-6"><div class="footer--box">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="heading-quaternary">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init', 'auseervice_theme_widgets');

function auseervice_theme_scripts(){
    //All css 
    wp_enqueue_style('Google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Roboto:900',null,'v-','all');
    wp_enqueue_style('bootstrap', get_template_directory_uri ().'/assets/css/bootstrap.min.css',null,'v-3.3.7','all');
    wp_enqueue_style('font-awesome', get_template_directory_uri ().'/assets/css/font-awesome.min.css',null,'v-4.7','all');
    wp_enqueue_style('icofont', get_template_directory_uri ().'/assets/css/icofont.min.css',null,'v-1.0','all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri ().'/assets/css/owl.carousel.min.css',null,'v2.3.4','all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri ().'/assets/css/magnific-popup.css',null,null,'all');
    wp_enqueue_style('Theme_CSS', get_template_directory_uri ().'/assets/css/main.css',null,'1.1.0','all');
    wp_enqueue_style('main-css', get_stylesheet_uri (), array('Theme_CSS','bootstrap','icofont','owl.carousel'), 'v-1.1.0');

    //All JS
    wp_enqueue_script('bootstrap', get_template_directory_uri ().'/assets/js/bootstrap.min.js',array('jquery'),'3.3.7',true);
    wp_enqueue_script('Owlcarousel', get_template_directory_uri ().'/assets/js/owl.carousel.min.js',array('jquery'),'1.12.0',true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri ().'/assets/js/jquery.magnific-popup.min.js',array('jquery'),'1.1.0',true);
    wp_enqueue_script('counterup', get_template_directory_uri ().'/assets/js/jquery.counterup.min.js',array('jquery'),'1.1.0',true);
    wp_enqueue_script('main-js', get_template_directory_uri ().'/assets/js/scripts.js',array('jquery'),'1.1.0',true);
    wp_enqueue_script('jquery');

}
add_action('wp_enqueue_scripts','auseervice_theme_scripts');

// Menu function
    function autheme_falback_menu (){ ?>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Feature 1</a></li>
                <li><a href="#">Feature 2</a></li>
                <li><a href="#">Feature 3</a></li>
                </ul>
            </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
                </ul>
            </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Blog 1</a></li>
                <li><a href="#">Blog 2</a></li>
                <li><a href="#">Blog 3</a></li>
                </ul>
            </li>
            <li class=""><a href="#">Contact</a></li>
            <li><a href="#"><i class="icofont-ui-search"></i></a></li>
        </ul>
    <?php }

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

    include_once('inc/cmb2_custome_fields.php');
    require_once('inc/redux-framework-master/redux-framework.php');
    require_once('inc/redux_auservice_config.php');
