<?php
function auseervice_theme_init(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('post-thum',400, 400, true);
    add_image_size('client-thum',175, 50, true);
    add_image_size('page-thum',200, auto, true);

    register_nav_menus(array(
        'main_menu' => 'Main Menu',
        'other_menu' => 'Other Menu'
    ));

}
add_action('after_setup_theme','auseervice_theme_init');