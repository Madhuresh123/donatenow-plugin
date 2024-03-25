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
    $wpdb->query($q);

    $wp_volunteer = $table_prefix.'spiral_volunteer_form';

    $q = "TRUNCATE `$wp_volunteer`";
    $wpdb->query($q);

    $wp_contact = $table_prefix.'spiral_contact_form';

    $q = "TRUNCATE `$wp_contact`";
    $wpdb->query($q);
    }
}
