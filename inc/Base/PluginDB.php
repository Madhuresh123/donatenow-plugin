<?php

namespace Inc\Base;

class PluginDB
{
    public static $wp_donation;
    public static $wpdb;
    
    public function __construct(){

        global $wpdb, $table_prefix;
        
        $this->wp_donation = $table_prefix . 'donation';
        $this->wpdb = $wpdb;
    }
}