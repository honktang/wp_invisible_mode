<?php
/**
 * @package Invisible_Mode
 * @version 0.1
 */

/*
Plugin Name: Invisible Mode
Plugin URI: http://wordpress.org/plugins/invisible_mode/
Description: make wordpress invisible, user cann't see the content if not logged in. it's useful when you use wordpress as your cms admin and api server.
Author: Honk Tang
Version: 0.1
Author URI: http://honktang.com/
*/


function invisible_mode() {
    if(!is_user_logged_in()){
        wp_redirect(wp_login_url());
        exit;
    }
}

add_action('get_header', 'invisible_mode', -1);
