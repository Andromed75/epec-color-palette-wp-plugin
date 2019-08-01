<?php
/*
Plugin Name: ColorPlus
Description: Personalize your colors
Version: 0.1
Author: Lord_Arthur
*/

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Brand Color 1', 'epec-custom-palette' ),
            'slug' => 'Brand-Color-1',
            'color' => '#6128A1',
        ),
        array(
            'name' => __( 'Brand Color 2', 'epec-custom-palette' ),
            'slug' => 'Brand-Color-2',
            'color' => '#E94B59',
        ),
        array(
            'name' => __( 'very dark gray', 'epec-custom-palette' ),
            'slug' => 'very-dark-gray',
            'color' => '#111111',
        ),
        array(
            'name' => __( 'White', 'epec-custom-palette' ),
            'slug' => 'White',
            'color' => '#FFFFFF',
        ),
    ) );
}
 
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

function my_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'style.css', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'style.css' );
    }
    
    add_action('wp_enqueue_scripts','my_scripts');
