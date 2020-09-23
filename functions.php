<?php

function register_my_menu(){ // this function save menu
    register_nav_menu('main', "Main menu");
 }
 add_action('after_setup_theme', 'register_my_menu');