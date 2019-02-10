<?php 

function auseervice_theme_init(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
		'primary_menu' => 'Primary Menu'
    ));

}
add_action('after_setup_theme','auseervice_theme_init');

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
        register_post_type('Slider', array(
            'labels' => array(
                    'name'=> 'Hero Content',
                    'menu_name' => 'Hero Item',
                    'all_items' =>'All content',
                    'add_new' => 'Add New hero content',
                    'add_new_item' => 'Add New hero content Item'
                    
            ),
            'public' => true,
            'supports'=>array(
                'title', 'thumbnail','revisions','custom-fields','page-attributes'
            )
        ));
    }
    add_action('init','auservice_custom_post');