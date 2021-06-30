<?php
    //Add Scipts
    function yts_add_scripts(){
        //Add Main Css
        wp_enqueue_style('yts-main-style', plugins_url(). '/nuezca-ytwidget/css/style.css');

        //Add Main JS
        wp_enqueue_script('yts-main-script', plugins_url(). '/nuezca-ytwidget/js/main.js');

        //Add Google Script
        wp_register_script('google', 'https://apis.google.com/js/platform.js');
        wp_enqueue_script('google');
        
        //Add Twitter Script
        // wp_register_script('twitter', 'https://platform.twitter.com/widgets.js');
        // wp_enqueue_script('twitter');

    }

    add_action('wp_enqueue_scripts', 'yts_add_scripts');