<?php

        function noSpecialChars($value) {
            $flag = preg_match('/^[a-zA-Z][a-zA-Z\s]{0,48}[a-zA-Z]$/', $value);
            return $flag==1 ? true : false;
        }
        
        function validEmail($value) {
            $flag = preg_match('/^[a-z]+\d*@(?:gmail|yahoo|outlook)\.com$|^[a-z][a-z0-9._]*@(?:gmail|yahoo|outlook)\.com$/', $value);
            return $flag==1 ? true : false;
        }

        function validPhone($value) {
            $flag = preg_match('/^[1-9]\d{9}$/', $value);
            return $flag==1 ? true : false;

        }

        function isValidAadhaar($value) {
            $flag = preg_match('/^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/', $value);
            return $flag==1 ? true : false;
        }

        function validZipcode($value) {
            $flag = preg_match('/^[1-9]\d{5}$/', $value);
            return $flag==1 ? true : false;
        }

    function processData($formData, $wpdb){
        global $table_prefix;
        $wp_spiral_volunteer_form  = $table_prefix . 'spiral_volunteer_form';

        $volunteer_fullname = isset($formData['volunteer_fullname']) ? $formData['volunteer_fullname'] : '';
        $volunteer_email = isset($formData['volunteer_email']) ? $formData['volunteer_email'] : '';
        $volunteer_aadhaar = isset($formData['volunteer_aadhaar']) ? $formData['volunteer_aadhaar'] : '';
        $volunteer_age = isset($formData['volunteer_age']) ? $formData['volunteer_age'] : '';
        $volunteer_profession = isset($formData['volunteer_profession']) ? $formData['volunteer_profession'] : '';
        $option1 = isset($formData['option1']) ? $formData['option1'] : '';
        $volunteer_duration = isset($formData['volunteer_duration']) ? $formData['volunteer_duration'] : '';
        $volunteer_preferences = isset($formData['volunteer_preferences']) ? $formData['volunteer_preferences'] : '';
        $volunteer_availability = isset($formData['volunteer_availability']) ? $formData['volunteer_availability'] : '';
        $volunteer_contact = isset($formData['volunteer_contact']) ? $formData['volunteer_contact'] : '';
        $volunteer_address_1 = isset($formData['volunteer_address_1']) ? $formData['volunteer_address_1'] : '';
        $volunteer_address_2 = isset($formData['volunteer_address_2']) ? $formData['volunteer_address_2'] : '';
        $volunteer_city = isset($formData['volunteer_city']) ? $formData['volunteer_city'] : '';
        $volunteer_state = isset($formData['volunteer_state']) ? $formData['volunteer_state'] : '';
        $volunteer_zip = isset($formData['volunteer_zip']) ? $formData['volunteer_zip'] : '';
        $volunteer_country = isset($formData['volunteer_country']) ? $formData['volunteer_country'] : '';
        $volunteer_comments = isset($formData['volunteer_comments']) ? $formData['volunteer_comments'] : '';
        $myCheckbox = isset($formData['myCheckbox']) ? $formData['myCheckbox'] : '';
    
        if( !empty($volunteer_fullname) && noSpecialChars($volunteer_fullname) 
                && !empty($volunteer_email) && validEmail($volunteer_email)
                && !empty($volunteer_contact) && validPhone($volunteer_contact) 
                && !empty($volunteer_aadhaar) && isValidAadhaar($volunteer_aadhaar)
                && $myCheckbox=== 'true'){  
    
        if(!empty($volunteer_zip)  && !validZipcode($volunteer_zip)){
            echo 'error_zip';
        }
        else if($option1 === 'true' && $volunteer_duration === 'null' ){
            echo 'duration_error';
        }
        else{
    
            $volunteer_form_data = array(
                'name' => $volunteer_fullname,
                'email' =>  $volunteer_email,
                'aadhaar' => $volunteer_aadhaar,
                'age' => $volunteer_age,
                'profession' => $volunteer_profession,
                'duration' => $volunteer_duration,
                'preferences' => $volunteer_preferences,
                'availability' => $volunteer_availability,
                'contact' => $volunteer_contact,
                'address_1' => $volunteer_address_1,
                'address_2' => $volunteer_address_2,
                'city' => $volunteer_city ,
                'state' => $volunteer_state,
                'zip' => $volunteer_zip,
                'country' => $volunteer_country,
                'comments' =>  $volunteer_comments,
                'date' => current_time('mysql')
            );
    
            $isSubmit =  $wpdb->insert($wp_spiral_volunteer_form,$volunteer_form_data);
    
            // if($isSubmit){
                echo 'success';
            // }else{
            //     echo 'data submission error';
            // }
    
        }
        
    }else{
    
        if($myCheckbox === 'false'){
            echo 'false';
        }else{
            echo 'error';
        }
    
    }

    }

global $wpdb;
processData($_POST,$wpdb);

