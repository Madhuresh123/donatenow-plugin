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


    //volunteer form
    $wp_spiral_volunteer_form = $table_prefix . 'spiral_volunteer_form';

    $table3 = "CREATE TABLE IF NOT EXISTS `$wp_spiral_volunteer_form` (
        `id` INT(50) NOT NULL AUTO_INCREMENT ,  
        `name` TEXT NOT NULL , 
        `email` TEXT NOT NULL , 
        `aadhaar` TEXT NOT NULL , 
        `age` TEXT NOT NULL , 
        `profession` TEXT NOT NULL , 
        `duration` TEXT NOT NULL , 
        `preferences` TEXT NOT NULL , 
        `availability` TEXT NOT NULL , 
        `contact` TEXT NOT NULL , 
        `address_1` TEXT NOT NULL , 
        `address_2` TEXT NOT NULL , 
        `city` TEXT NOT NULL , 
        `state` TEXT NOT NULL , 
        `zip` TEXT NOT NULL , 
        `country` TEXT NOT NULL , 
        `comments` TEXT NOT NULL , 
        `date` DATE NOT NULL , 
        PRIMARY KEY (`id`)) 
        ENGINE = InnoDB;";

    $wpdb->query($table3);

     // Insert dummy data if needed
    
     $volunteer_form_data = array(
        'name' => 'Goku',
        'email' => 'goku@gmail.com',
        'aadhaar' => '9349413345',
        'age' => '18 years - 25 years',
        'profession' => 'student',
        'duration' => '1',
        'preferences' => 'POSH',
        'availability' => 'Weekdays',
        'contact' => '8989877767',
        'address_1' => 'India',
        'address_2' => 'USA',
        'city' => 'Hyderabad',
        'state' => 'Jharkhand',
        'zip' => '500032',
        'country' => 'India',
        'comments' => 'This is working',
        'date' => current_time('mysql')
    );

    $wpdb->insert($wp_spiral_volunteer_form,$volunteer_form_data);

    }
}
