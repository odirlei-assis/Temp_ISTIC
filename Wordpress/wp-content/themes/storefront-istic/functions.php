<?php

/**
 * IMPORTANT
 * 
 * Do not remove the code immediatly below. It is crucial to force this child theme to load the style presets from its
 * parent.
 */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() 
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}