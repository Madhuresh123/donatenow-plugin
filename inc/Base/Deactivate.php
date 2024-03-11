<?php

namespace Inc\Base;

class Deactivate
{
    public static function deactivate(){
         global $wpdb, $table_prefix;
    $wp_donation = $table_prefix.'donation';

    $q = "TRUNCATE `$wp_donation`";
    // $q = "DROP TABLE `$wp_donation`;";
    $wpdb->query($q);

    $wp_states = $table_prefix.'states';

    $q = "TRUNCATE `$wp_states`";
    // $q = "DROP TABLE `$wp_donation`;";
    $wpdb->query($q);


    $wp_districts = $table_prefix.'districts';

    $q = "TRUNCATE `$wp_districts`";
    // $q = "DROP TABLE `$wp_donation`;";
    $wpdb->query($q);
    }
}
