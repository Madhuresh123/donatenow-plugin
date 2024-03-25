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
}
