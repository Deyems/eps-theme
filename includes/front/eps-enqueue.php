<?php

function eps_enqueue(){
    $uri = get_theme_file_uri();
    $ver = EPS_DEV_MODE ? time() : false;
    wp_register_style('eps_google_fonts',
    'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',
    [],
    $ver
    );
    wp_register_style('eps_style', $uri. '/assets/css/style.css', [], $ver);
    // wp_register_style('eps_dark', $uri. '/assets/css/dark.css', [], $ver);
    // wp_register_style('eps_font-icons', $uri. '/assets/css/font-icons.css', [], $ver);
    // wp_register_style('eps_magnific-popup', $uri. '/assets/css/magnific-popup.css', [], $ver);
    // wp_register_style('eps_animate', $uri. '/assets/css/animate.css', [], $ver);
    // wp_register_style('eps_custom', $uri. '/assets/css/custom.css', [], $ver);
    wp_register_style('eps_responsive', $uri. '/assets/css/responsive.css', [], $ver);

    // wp_enqueue_style('eps_google_fonts');
    wp_enqueue_style('eps_style');
    // wp_enqueue_style('eps_dark');
    // wp_enqueue_style('eps_font-icons');
    // wp_enqueue_style('eps_magnific-popup');
    // wp_enqueue_style('eps_animate');
    // wp_enqueue_style('eps_custom');
    wp_enqueue_style('eps_responsive');

    // $read_more_color = get_theme_mod('eps_read_more_color');
    // wp_add_inline_style('eps_custom', 
    //     'a.more-link {color:'. $read_more_color .'; border-color:' . $read_more_color . '; }'
    // );

    // wp_register_script('eps_plugin', $uri. '/assets/js/plugins.js', [], $ver, true);
    wp_register_script('eps_themes_script', $uri. '/assets/js/functions.js', [], $ver, true);

    // wp_enqueue_script('jquery');
    // wp_enqueue_script('eps_plugin');
    wp_enqueue_script('eps_themes_script');
}
