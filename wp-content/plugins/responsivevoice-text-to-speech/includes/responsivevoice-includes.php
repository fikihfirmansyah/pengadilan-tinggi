<?php

function RV_load_scripts()
{
    $options = get_option('RV_settings');
    $appendScriptTag = [
        'source=wp-plugin'
    ];

    if($options['RV_text_api_key']){
        $appendScriptTag[] = "key={$options['RV_text_api_key']}";
    }

    wp_enqueue_style('rv-style', plugin_dir_url(__FILE__) . 'css/responsivevoice.css');
    wp_enqueue_script('responsive-voice', 'https://code.responsivevoice.org/1.8.2/responsivevoice.js?' . implode('&', $appendScriptTag));
}

add_action('wp_enqueue_scripts', 'RV_load_scripts');