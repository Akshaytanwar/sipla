<?php
/*
Plugin Name: Simplia Custom Branding
Plugin URI: https://example.com/simplia-plugin
Description: Replaces WordPress branding with "Simplia" and removes update and notification banners.
Version: 1.0
Author: Your Name
Author URI: https://example.com
*/

function simplia_change_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image: url(' . plugins_url('Hello', __FILE__) . ') !important; }
    </style>';
}
add_action('login_head', 'simplia_change_login_logo');

function simplia_hide_notifications() {
    echo '<style type="text/css">
        .update-nag, .updated, .error, .is-dismissible, .notice { display: none !important; }
    </style>';
}
add_action('admin_head', 'simplia_hide_notifications');
