<?php
    require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

    function plugins_list(){
    
        $plugins = array(
            array(
                'name'=>'Classic Editor',
                'slug'=>'classic-editor',
                'required'=>true,
                'source'=>'classic-editor.zip',
                'force_activation'=>true,
                'force_deactivation'=>true
            ),
            array(
                'name'=>'Contact Form 7',
                'slug'=>'contact-form-7',
                'required'=>true,
                'source'=>'contact-form-7.zip',
                'force_activation'=>true,
                'force_deactivation'=>true
            ),
            array(
                'name'=>'Regenerate Thumbnails',
                'slug'=>'regenerate-thumbnails',
                'required'=>true,
                'source'=>'regenerate-thumbnails.zip',
                // 'force_activation'=>true,
                'force_deactivation'=>true
            ),
            array(
                'name'=>'Contact Form 7 Database',
                'slug'=>'cf7-database',
                'required'=>true,
                'source'=>'cf7-database.zip',
                // 'force_activation'=>true,
                'force_deactivation'=>true
            ),
        );
        
        $config = array(
            'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => get_template_directory_uri().'/plugins/',                      // Default absolute path to bundled plugins.
            'menu'         => 'tgmpa-install-plugins', // Menu slug.
            'parent_slug'  => 'themes.php',            // Parent menu slug.
            'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
            'has_notices'  => true,                    // Show admin notices or not.
            'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => false,                   // Automatically activate plugins after installation or not.
            'message'      => '', 
        );
        
        tgmpa($plugins, $config);
    }
    add_action('tgmpa_register', 'plugins_list');