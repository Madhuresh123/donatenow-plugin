<?php

require_once dirname(__FILE__,2) . '/templates/ajax/ajax_volunteer_form.php';

use PHPUnit\Framework\TestCase;

class VounteerFormTest extends TestCase
{

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

    public function testisValidAadhaar()
    {
        // Test with valid input
        $this->assertTrue(isValidAadhaar("609878985634"));

        $this->assertFalse(isValidAadhaar("109878985634"));

        $this->assertFalse(isValidAadhaar("6098 7898 5634"));

        $this->assertFalse(isValidAadhaar(" 609878985634"));

        $this->assertFalse(isValidAadhaar("609878985634 "));
    }

    public function testvalidPhone()
    {
        // Test with valid input
        $this->assertTrue(validPhone("8987898856"));

        $this->assertFalse(validPhone("9189877677787"));

        $this->assertFalse(validPhone(" 8098789856"));

        $this->assertFalse(validPhone("8098789856 "));

        $this->assertFalse(validPhone("0898789887"));

    }

    public function testvalidZipcode()
    {
        // Test with valid input
        $this->assertTrue(validZipcode("500032"));

        $this->assertFalse(validZipcode(" 500032"));

        $this->assertFalse(validZipcode("500032 "));

    }

    public function testProcessDataWithValidData()
    {
        $formData = [
            'volunteer_fullname' => 'John Doe',
            'volunteer_email' => 'john@gmail.com',
            'volunteer_aadhaar' => '609878985634',
            'volunteer_age' => '',
            'volunteer_profession' => '',
            'option1' => '',
            'volunteer_duration' => '',
            'volunteer_preferences' => '',
            'volunteer_availability' => '',
            'volunteer_contact' => '8789878865',
            'volunteer_address_1' => '',
            'volunteer_address_2' => '',
            'volunteer_city' => '' ,
            'volunteer_state' => '',
            'volunteer_zip' => '',
            'volunteer_country' => '',
            'volunteer_comments' =>  '',
            'myCheckbox' => 'true',
        ];

           // Start output buffering to capture echoed messages
            ob_start();
    
            // Call the function
            processData($formData);
            
            // Get the contents of the output buffer
            $output = ob_get_clean();

            // Assert against the echoed message
            $this->assertEquals('success', $output);

            ob_end_clean();

    }
}
