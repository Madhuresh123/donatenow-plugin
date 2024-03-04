<?php

namespace Inc\Base;

class Activate
{
    public static function activate(){
        global $wpdb, $table_prefix;
    $wp_donation = $table_prefix . 'donation';

    $q = "CREATE TABLE IF NOT EXISTS `$wp_donation` (
        `id` INT(50) NOT NULL AUTO_INCREMENT , 
      `full_name` VARCHAR(100) NOT NULL , 
      `email` VARCHAR(100) NOT NULL , 
      `contact` TEXT NOT NULL , 
      `PAN` TEXT NOT NULL , 
      `amount` TEXT NOT NULL , 
      `status` BOOLEAN NOT NULL , 
      `date` DATE NOT NULL , 
      PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;";
    $wpdb->query($q);

    // Insert dummy data if needed
    
    $data = array(
        'full_name' => 'Akshay',
        'email' => 'akshay@gmai.com',
        'contact' => '9349413345',
        'PAN' => 'FGEOP2398K',
        'amount' => '100',
        'status' => 0,
        'Date' => current_time('mysql')
    );

    $wpdb->insert($wp_donation,$data);

    //contact form 
    $wp_spiral_contact_form = $table_prefix . 'spiral_contact_form';

    $table2 = "CREATE TABLE IF NOT EXISTS `$wp_spiral_contact_form` (
        `id` INT(50) NOT NULL AUTO_INCREMENT ,  
        `name` TEXT NOT NULL , 
        `email` TEXT NOT NULL , 
        `contact` TEXT NOT NULL , 
        `subject` TEXT NOT NULL , 
        `message` TEXT NOT NULL , 
        `date` DATE NOT NULL , 
        PRIMARY KEY (`id`)) 
        ENGINE = InnoDB;";

    $wpdb->query($table2);

     // Insert dummy data if needed
    
     $contact_form_data = array(
        'name' => 'Bear',
        'email' => 'bear@gmail.com',
        'contact' => '9349413345',
        'subject' => 'Hello world',
        'message' => 'This is working',
        'date' => current_time('mysql')
    );

    $wpdb->insert($wp_spiral_contact_form,$contact_form_data);

    }
}
