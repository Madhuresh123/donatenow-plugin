<?php

require_once dirname(__FILE__,2) . '/templates/ajax/ajax_volunteer_form.php';
require_once dirname(__FILE__,2) . '/templates/ajax/valid_input.php';


use PHPUnit\Framework\TestCase;


class VounteerFormTest extends TestCase
{

    //test1
    public function testNoSpecialChars()
    {
        // Test with valid input
        $this->assertTrue(noSpecialChars("Madhuresh Ranjan"));

        // Test with invalid input containing pre space
        $this->assertFalse(noSpecialChars(" Madhuresh ranjan"));

        // Test with invalid input containing only 1 letter character
        $this->assertFalse(noSpecialChars("M"));

        // Test with invalid input containing numbers character
        $this->assertFalse(noSpecialChars("Madhuresh1 ranjan"));

        // Test with invalid input containing special character
        $this->assertFalse(noSpecialChars("Madhuresh%ranjan"));

        // Test with invalid input containing more than 50 characters
        $this->assertFalse(noSpecialChars("This string has more than 50 characters, so it should fail"));

        // Test with valid input containing spaces
        $this->assertTrue(noSpecialChars("Madhuresh ranjan This Is A Test"));

        // Test with valid input containing maximum allowed characters
        $this->assertTrue(noSpecialChars("ABCDEFGHIJKLMN OPQRSTUVWXYZ abcdefghijklmnopqrstuv"));

    }

    //test2
    public function testvalidEmail()
    {
        // Test with valid input
        $this->assertTrue(validEmail("madhuresh@gmail.com"));

        $this->assertTrue(validEmail("madhuresh@yahoo.com"));

        $this->assertTrue(validEmail("madhuresh@outlook.com"));

        $this->assertFalse(validEmail("1madhuresh@outlook.com"));

        $this->assertFalse(validEmail("madh%uresh@outlook.com"));

        $this->assertFalse(validEmail("madhureshRanjan@outlook.com"));

        $this->assertTrue(validEmail("madhuresh1221ranjan@outlook.com"));

        $this->assertTrue(validEmail("madhuresh.ranjan@outlook.com"));

        $this->assertFalse(validEmail("madhuresh1221ranjan@dsds.com"));

    }

    //test3
    public function testisValidAadhaar()
    {
        // Test with valid input
        $this->assertTrue(isValidAadhaar("609878985634"));

        $this->assertFalse(isValidAadhaar("109878985634"));

        $this->assertFalse(isValidAadhaar("6098 7898 5634"));

        $this->assertFalse(isValidAadhaar(" 609878985634"));

        $this->assertFalse(isValidAadhaar("609878985634 "));
    }

    //test4
    public function testvalidPhone()
    {
        // Test with valid input
        $this->assertTrue(validPhone("8987898856"));

        $this->assertFalse(validPhone("9189877677787"));

        $this->assertFalse(validPhone(" 8098789856"));

        $this->assertFalse(validPhone("8098789856 "));

        $this->assertFalse(validPhone("0898789887"));

    }

    //test5
    public function testvalidZipcode()
    {
        // Test with valid input
        $this->assertTrue(validZipcode("500032"));

        $this->assertFalse(validZipcode(" 500032"));

        $this->assertFalse(validZipcode("500032 "));

        $this->assertFalse(validZipcode("50032"));

    }

    //test6
    public function test_processData_validData_success() {

       
        $formData = array(
            'volunteer_fullname' => 'John Doe',
            'volunteer_email' => 'john.doe@gmail.com',
            'volunteer_contact' => '9890989987',
            'volunteer_aadhaar' => '678989876787',
            'volunteer_age' => '',
            'volunteer_profession' => '',
            'option1' => '', 
            'volunteer_duration' => '', 
            'volunteer_preferences' => '',
            'volunteer_availability' => '',
            'volunteer_address_1' => '',
            'volunteer_address_2' => '',
            'volunteer_city' => '',
            'volunteer_state' => '',
            'volunteer_zip' => '', 
            'volunteer_country' => '',
            'volunteer_comments' => '',
            'myCheckbox' => 'true',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        processData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('success', $result);
    }

    //test7
    public function test_processData_checkbox_false() {
        
        $formData = array(
            'volunteer_fullname' => 'John Doe',
            'volunteer_email' => 'john.doe@gmail.com',
            'volunteer_contact' => '9890989987',
            'volunteer_aadhaar' => '678989876787',
            'volunteer_age' => '',
            'volunteer_profession' => '',
            'option1' => '', 
            'volunteer_duration' => '', 
            'volunteer_preferences' => '',
            'volunteer_availability' => '',
            'volunteer_address_1' => '',
            'volunteer_address_2' => '',
            'volunteer_city' => '',
            'volunteer_state' => '',
            'volunteer_zip' => '', 
            'volunteer_country' => '',
            'volunteer_comments' => '',
            'myCheckbox' => 'false',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        processData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('false', $result);
    }

     //test8
     public function test_processData_Name_missing() {
        
        $formData = array(
            'volunteer_fullname' => '',
            'volunteer_email' => 'john.doe@gmail.com',
            'volunteer_contact' => '9890989987',
            'volunteer_aadhaar' => '678989876787',
            'volunteer_age' => '',
            'volunteer_profession' => '',
            'option1' => '', 
            'volunteer_duration' => '', 
            'volunteer_preferences' => '',
            'volunteer_availability' => '',
            'volunteer_address_1' => '',
            'volunteer_address_2' => '',
            'volunteer_city' => '',
            'volunteer_state' => '',
            'volunteer_zip' => '', 
            'volunteer_country' => '',
            'volunteer_comments' => '',
            'myCheckbox' => 'true',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        processData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('error', $result);
    }

    //test9
    public function test_processData_email_missing() {
        
        $formData = array(
            'volunteer_fullname' => 'Jhone',
            'volunteer_email' => '',
            'volunteer_contact' => '9890989987',
            'volunteer_aadhaar' => '678989876787',
            'volunteer_age' => '',
            'volunteer_profession' => '',
            'option1' => '', 
            'volunteer_duration' => '', 
            'volunteer_preferences' => '',
            'volunteer_availability' => '',
            'volunteer_address_1' => '',
            'volunteer_address_2' => '',
            'volunteer_city' => '',
            'volunteer_state' => '',
            'volunteer_zip' => '', 
            'volunteer_country' => '',
            'volunteer_comments' => '',
            'myCheckbox' => 'true',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        processData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('error', $result);
    }

    //test10
    public function test_processData_contact_missing() {
        
        $formData = array(
            'volunteer_fullname' => 'Jhone',
            'volunteer_email' => 'jone@gmail.com',
            'volunteer_contact' => '',
            'volunteer_aadhaar' => '678989876787',
            'volunteer_age' => '',
            'volunteer_profession' => '',
            'option1' => '', 
            'volunteer_duration' => '', 
            'volunteer_preferences' => '',
            'volunteer_availability' => '',
            'volunteer_address_1' => '',
            'volunteer_address_2' => '',
            'volunteer_city' => '',
            'volunteer_state' => '',
            'volunteer_zip' => '', 
            'volunteer_country' => '',
            'volunteer_comments' => '',
            'myCheckbox' => 'true',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        processData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('error', $result);
    }

        //test11
        public function test_processData_aadhaar_missing() {
        
            $formData = array(
                'volunteer_fullname' => 'Jhone',
                'volunteer_email' => 'jone@gmail.com',
                'volunteer_contact' => '9898787767',
                'volunteer_aadhaar' => '',
                'volunteer_age' => '',
                'volunteer_profession' => '',
                'option1' => '', 
                'volunteer_duration' => '', 
                'volunteer_preferences' => '',
                'volunteer_availability' => '',
                'volunteer_address_1' => '',
                'volunteer_address_2' => '',
                'volunteer_city' => '',
                'volunteer_state' => '',
                'volunteer_zip' => '', 
                'volunteer_country' => '',
                'volunteer_comments' => '',
                'myCheckbox' => 'true',
            );
    
            $mockedDb = $this->createMock('DatabaseInterface');
    
            ob_start();
            processData($formData,$mockedDb);
            $result = ob_get_clean();
    
            $this->assertEquals('error', $result);
        }

        //test12
        public function test_processData_zipcode_error() {
        
            $formData = array(
                'volunteer_fullname' => 'Jhone',
                'volunteer_email' => 'jone@gmail.com',
                'volunteer_contact' => '9898787767',
                'volunteer_aadhaar' => '787678765434',
                'volunteer_age' => '',
                'volunteer_profession' => '',
                'option1' => '', 
                'volunteer_duration' => '', 
                'volunteer_preferences' => '',
                'volunteer_availability' => '',
                'volunteer_address_1' => '',
                'volunteer_address_2' => '',
                'volunteer_city' => '',
                'volunteer_state' => '',
                'volunteer_zip' => '50003', 
                'volunteer_country' => '',
                'volunteer_comments' => '',
                'myCheckbox' => 'true',
            );
    
            $mockedDb = $this->createMock('DatabaseInterface');
    
            ob_start();
            processData($formData,$mockedDb);
            $result = ob_get_clean();
    
            $this->assertEquals('error_zip', $result);
        }

        //test13
        public function test_processData_zipcode_success() {
        
            $formData = array(
                'volunteer_fullname' => 'Jhone',
                'volunteer_email' => 'jone@gmail.com',
                'volunteer_contact' => '9898787767',
                'volunteer_aadhaar' => '787678765434',
                'volunteer_age' => '',
                'volunteer_profession' => '',
                'option1' => '', 
                'volunteer_duration' => '', 
                'volunteer_preferences' => '',
                'volunteer_availability' => '',
                'volunteer_address_1' => '',
                'volunteer_address_2' => '',
                'volunteer_city' => '',
                'volunteer_state' => '',
                'volunteer_zip' => '500032', 
                'volunteer_country' => '',
                'volunteer_comments' => '',
                'myCheckbox' => 'true',
            );
    
            $mockedDb = $this->createMock('DatabaseInterface');
    
            ob_start();
            processData($formData,$mockedDb);
            $result = ob_get_clean();
    
            $this->assertEquals('success', $result);
        }

        //test14
        public function test_processData_duration_true() {
        
            $formData = array(
                'volunteer_fullname' => 'Jhone',
                'volunteer_email' => 'jone@gmail.com',
                'volunteer_contact' => '9898787767',
                'volunteer_aadhaar' => '787678765434',
                'volunteer_age' => '',
                'volunteer_profession' => '',
                'option1' => 'true', 
                'volunteer_duration' => 'null', 
                'volunteer_preferences' => '',
                'volunteer_availability' => '',
                'volunteer_address_1' => '',
                'volunteer_address_2' => '',
                'volunteer_city' => '',
                'volunteer_state' => '',
                'volunteer_zip' => '500032', 
                'volunteer_country' => '',
                'volunteer_comments' => '',
                'myCheckbox' => 'true',
            );
    
            $mockedDb = $this->createMock('DatabaseInterface');
    
            ob_start();
            processData($formData,$mockedDb);
            $result = ob_get_clean();
    
            $this->assertEquals('duration_error', $result);
        }
}
