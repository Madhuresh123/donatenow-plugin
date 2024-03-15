<?php

global $wpdb, $table_prefix;

//states data
$wp_states = $table_prefix . 'states';

$state_input = isset($_POST['state_input']) ? $_POST['state_input'] : '';

$query = $wpdb->prepare("SELECT * FROM $wp_states WHERE states LIKE %s", $state_input . '%');

$results = $wpdb->get_results($query);


if($results){

    foreach ($results as $row) {
        echo '<li value="' . $row->mid . '">' . $row->states . '</li>';
    }
    wp_die();
}
else{
    echo '<li value=0> No state found </li>';
    wp_die();
}
