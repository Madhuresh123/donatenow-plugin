<?php

global $wpdb, $table_prefix;

$wp_spiral_contact_form = $table_prefix . 'spiral_volunteer_form';

        $volunteer_fullname = $_POST['volunteer_fullname'];
        $volunteer_email = $_POST['volunteer_email'];
        $volunteer_aadhaar = $_POST['volunteer_aadhaar'];
        $volunteer_age = $_POST['volunteer_age'];
        $volunteer_profession = $_POST['volunteer_profession'];
        $volunteer_duration = $_POST['volunteer_duration'];
        $volunteer_preferences = $_POST['volunteer_preferences'];
        $volunteer_availability = $_POST['volunteer_availability'];
        $volunteer_contact = $_POST['volunteer_contact'];
        $volunteer_address_1 = $_POST['volunteer_address_1'];   
        $volunteer_address_2 = $_POST['volunteer_address_2'];
        $volunteer_city = $_POST['volunteer_city'];
        $volunteer_state = $_POST['volunteer_state'];
        $volunteer_zip = $_POST['volunteer_zip'];
        $volunteer_country = $_POST['volunteer_country'];
        $volunteer_comments = $_POST['volunteer_comments'];
        $myCheckbox = $_POST['myCheckbox'];


        function noSpecialChars($value) {
            return preg_match('/^[a-zA-Z][a-zA-Z\s]*[a-zA-Z]$/', $value);
        }
        
        function validEmail($value) {
            return preg_match('/^[a-z]+\d*@(?:gmail|yahoo|outlook)\.com$|^[a-z][a-z0-9._]*@(?:gmail|yahoo|outlook)\.com$/', $value);
        }

        function validPhone($value) {
            return preg_match('/^\d{10}$/', $value);
        }

        function isValidAadhaar($value) {
            return preg_match('/^[2-9]{1}[0-9]{3}\s[0-9]{4}\s[0-9]{4}$/', $value);
        }

    if( !empty($volunteer_fullname) && noSpecialChars($volunteer_fullname) 
        && !empty($volunteer_email) && validEmail($volunteer_email)
        && !empty($volunteer_contact) && validPhone($volunteer_contact) 
        && $myCheckbox=== 'true'){  

        if(!empty($volunteer_aadhaar) && !isValidAadhaar($volunteer_aadhaar)){
            echo 'error';
        }

        echo 'success';
        
    }else{
        echo 'error';
    }

wp_die();