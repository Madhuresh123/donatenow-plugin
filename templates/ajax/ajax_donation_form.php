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

        function validAmount($value) {
            $flag = preg_match('/^[1-9]\d*$/', $value) && (int)$value < 100000;
            return $flag==1 ? true : false;
        }


function proccessDonationData($formData,$wpdb){

    global $table_prefix;
    $wp_donation = $table_prefix . 'donation';
                        
            $donor_name = isset($formData['donor_name']) ? $formData['donor_name'] : '';
            $donor_email = isset($formData['donor_email']) ? $formData['donor_email'] : '';
            $donor_contact = isset($formData['donor_contact']) ? $formData['donor_contact'] : '';
            $donor_pan = isset($formData['donor_pan']) ? $formData['donor_pan'] : '';
            $donor_amount = isset($formData['donor_amount']) ? $formData['donor_amount'] : '';
            $donor_address = isset($formData['donor_address']) ? $formData['donor_address'] : '';


            if(!empty($donor_name) && noSpecialChars($donor_name) 
                && !empty($donor_email) && validEmail($donor_email) 
                && !empty($donor_contact) && validPhone($donor_contact)
                && !empty($donor_amount) && validAmount($donor_amount)
                && !empty($donor_address)
                ){

                $donor_data = array(
                    'full_name' => $donor_name,
                    'email' => $donor_email ,
                    'contact' => $donor_contact ,
                    'PAN' => $donor_pan,
                    'amount' => $donor_amount,
                    'status' => 0,
                    'Date' => current_time('mysql')
                );

                // Insert user data into the database
                $isSubmit = $wpdb->insert($wp_donation, $donor_data);
           
                if($isSubmit){
                echo 'success';
                }else{
                    echo 'database error';
                }
            }else{
                echo 'error';
            }
}

global $wpdb;
proccessDonationData($_POST,$wpdb);