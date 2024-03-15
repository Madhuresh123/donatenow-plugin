<?php

global $wpdb, $table_prefix;

$wp_spiral_contact_form = $table_prefix . 'spiral_contact_form';

        $contact_name = $_POST['contact_name'];
        $contact_email = $_POST['contact_email'];
        $contact_phone = $_POST['contact_phone'];
        $contact_subject = $_POST['contact_subject'];
        $contact_message = $_POST['contact_message'];

        function noSpecialChars($value) {
            return preg_match('/^[a-zA-Z][a-zA-Z\s]{0,48}[a-zA-Z]$/', $value);
        }
        
        function validEmail($value) {
            return preg_match('/^[a-z]+\d*@(?:gmail|yahoo|outlook)\.com$|^[a-z][a-z0-9._]*@(?:gmail|yahoo|outlook)\.com$/', $value);
        }

        function validPhone($value) {
            return preg_match('/^[1-9]\d{9}$/', $value);
        }

    if( !empty($contact_name) && noSpecialChars($contact_name) && !empty($contact_email) && validEmail($contact_email) && !empty($contact_phone) && validPhone($contact_phone)){


        $contact_form_data = array(
            'name' => $contact_name,
            'email' => $contact_email,
            'contact' => $contact_phone,
            'subject' => $contact_subject,
            'message' => $contact_message ,
            'date' => current_time('mysql')
        );
    
        $isSubmit = $wpdb->insert($wp_spiral_contact_form,$contact_form_data);

        if($isSubmit){
            echo 'success';
            exit;
        }else{
            echo 'error';
        }
    }else{
        echo 'error';
    }

wp_die();