<?php

global $wpdb, $table_prefix;

//states data
$wp_districts = $table_prefix . 'districts';

$city_input = $_POST['city_input'];

$query = $wpdb->prepare("SELECT * FROM $wp_districts WHERE districts LIKE %s", $city_input . '%');

$results = $wpdb->get_results($query);


if($results){

    foreach ($results as $row) {
        echo '<li value="' . $row->mid . '">' . $row->districts . '</li>';
    }
    wp_die();
}
else{
    echo '<li> No state found </li>';
    wp_die();
}
