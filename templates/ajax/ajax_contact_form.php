<?php

        // require_once dirname(__FILE__) . '/valid_input.php';


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


function proccessContactData($formData,$wpdb){


    global $table_prefix;

    $wp_spiral_contact_form = $table_prefix . 'spiral_contact_form';
                        
            $contact_name = isset($formData['contact_name']) ? $formData['contact_name'] : '';
            $contact_email = isset($formData['contact_email']) ? $formData['contact_email'] : '';
            $contact_phone = isset($formData['contact_phone']) ? $formData['contact_phone'] : '';
            $contact_subject = isset($formData['contact_subject']) ? $formData['contact_subject'] : '';
            $contact_message = isset($formData['contact_message']) ? $formData['contact_message'] : '';
            $captcha_response = isset($formData['captcha_response']) ? $formData['captcha_response'] : '';


            if(!empty($contact_name) && noSpecialChars($contact_name) 
                && !empty($contact_email) && validEmail($contact_email) 
                && !empty($contact_phone) && validPhone($contact_phone)
                && $captcha_response === 'true'
                ){

                $contact_form_data = array(
                    'name' => $contact_name,
                    'email' => $contact_email,
                    'contact' => $contact_phone,
                    'subject' => $contact_subject,
                    'message' => $contact_message ,
                    'date' => current_time('mysql')
                );
            
                $wpdb->insert($wp_spiral_contact_form,$contact_form_data);
        
                // if($isSubmit){
                echo 'success';
                    // exit;
                // }else{
                //     echo 'error';
                // }
            }else{
                echo 'error';
            }
}

global $wpdb;
proccessContactData($_POST,$wpdb);