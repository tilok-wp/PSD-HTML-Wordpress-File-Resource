<?php
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
    