<?php 
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