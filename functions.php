<?php

// this function save menu
function register_my_menu(){ 
    register_nav_menu('main', "Main menu");
 }
 add_action('after_setup_theme', 'register_my_menu');

// Permet d'afficher le logo
 function nafa_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'nafa_custom_logo_setup' );
   