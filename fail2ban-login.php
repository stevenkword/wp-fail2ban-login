<?php
/*
Plugin Name: Fail2ban Login
Version: 0.1-alpha
cription: WordPress returns authentication failure with the status code of 200, which is the same status code of an authentication success, so there’s no easy way to tell the difference between the two just by looking at nginx’s access log.
Author: Steven Word
Author URI: http://stevenword.com
Plugin URI: PLUGIN SITE HERE
Text Domain: fail2ban-login
Domain Path: /languages
*/

function s8d_login_failed_403() {
    status_header( 403 );
}
add_action( 'wp_login_failed', 's8d_login_failed_403' );
