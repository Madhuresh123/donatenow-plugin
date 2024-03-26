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

    function processData($formaData){

        global $wpdb, $table_prefix;

        $wp_spiral_volunteer_form  = $table_prefix . 'spiral_volunteer_form';

        $volunteer_fullname =  $formaData['volunteer_fullname'];
        $volunteer_email = $formaData['volunteer_email'];
        $volunteer_aadhaar = $formaData['volunteer_aadhaar'];
        $volunteer_age = $formaData['volunteer_age'];
        $volunteer_profession = $formaData['volunteer_profession'];
        $option1 = $formaData['option1'];
        $volunteer_duration = $formaData['volunteer_duration'];
        $volunteer_preferences = $formaData['volunteer_preferences'];
        $volunteer_availability = $formaData['volunteer_availability'];
        $volunteer_contact = $formaData['volunteer_contact'];
        $volunteer_address_1 = $formaData['volunteer_address_1'];   
        $volunteer_address_2 = $formaData['volunteer_address_2'];
        $volunteer_city = $formaData['volunteer_city'];
        $volunteer_state = $formaData['volunteer_state'];
        $volunteer_zip = $formaData['volunteer_zip'];
        $volunteer_country = $formaData['volunteer_country'];
        $volunteer_comments = $formaData['volunteer_comments'];
        $myCheckbox = $formaData['myCheckbox'];

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

            if($isSubmit){
                echo 'success';
                exit;
            }else{
                echo 'data submition error';
            }

        }
        
    }else{

        if($myCheckbox === 'false'){
            echo 'false';
        }else{
            echo 'error';
        }

    }

    }

processData($_POST);

// wp_die();