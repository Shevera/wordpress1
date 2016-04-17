<?php
if(!defined('WP_UNINSTALL_PLUGIN')) exit;

include dirname(__FILE__). '/wfm-check.php';

if ( wfm_check_field('wfm-views') ){
    global $wpdb;
    $query = "ALTER TABLE $wpdb->posts DROP wfm_views INT NOT NULL DEFAULT '0'";
    $wpdb->query($query);
}

