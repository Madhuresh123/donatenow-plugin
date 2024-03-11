<?php

global $wpdb, $table_prefix;

$wp_districts = $table_prefix . 'districts';

$state_value = $_POST['state_value'];

if($state_value){
    $query = $wpdb->prepare("SELECT * FROM $wp_districts WHERE mid = %s", $state_value);

    $results = $wpdb->get_results($query);

    foreach ($results as $row) {
        echo '<option value="' . $row->mid . '">' . $row->districts . '</option>';
    }
    
}
else{
    $query = $wpdb->prepare("SELECT * FROM $wp_districts");

    $results = $wpdb->get_results($query);
}

wp_die();

?>