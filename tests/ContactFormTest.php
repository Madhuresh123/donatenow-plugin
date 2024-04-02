<?php

require_once dirname(__FILE__,2) . '/templates/ajax/ajax_contact_form.php';
require_once dirname(__FILE__,2) . '/templates/ajax/valid_input.php';


use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    //test1
    public function test_validData_success() {

        $formData = array(
            'contact_name' => 'John Doe',
            'contact_email' => 'john.doe@gmail.com',
            'contact_phone' => '9890989987',
            'contact_subject' => 'm contacting you',
            'contact_message' => 'Hello world',
            'captcha_response' => 'true',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        proccessContactData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('success', $result);
    }

    //test2
     public function test_validName_success() {

       
        $formData = array(
            'contact_name' => '',
            'contact_email' => 'john.doe@gmail.com',
            'contact_phone' => '9890989987',
            'contact_subject' => 'm contacting you',
            'contact_message' => 'Hello world',
            'captcha_response' => 'true',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        proccessContactData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('error', $result);
    }

    //test3
    public function test_validEmail_success() {

       
        $formData = array(
            'contact_name' => 'Jhone',
            'contact_email' => '',
            'contact_phone' => '9890989987',
            'contact_subject' => 'm contacting you',
            'contact_message' => 'Hello world',
            'captcha_response' => 'true',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        proccessContactData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('error', $result);
    }

    //test4
    public function test_isValidPhone() {
       
        $formData = array(
            'contact_name' => 'Jhone',
            'contact_email' => 'jone@gmail.com',
            'contact_phone' => '',
            'contact_subject' => 'm contacting you',
            'contact_message' => 'Hello world',
            'captcha_response' => 'true',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        proccessContactData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('error', $result);
    }

    //test5
    public function test_isValidCatpcha() {
       
        $formData = array(
            'contact_name' => 'Jhone',
            'contact_email' => 'jone@gmail.com',
            'contact_phone' => '',
            'contact_subject' => 'm contacting you',
            'contact_message' => 'Hello world',
            'captcha_response' => 'false',
        );

        $mockedDb = $this->createMock('DatabaseInterface');

        ob_start();
        proccessContactData($formData,$mockedDb);
        $result = ob_get_clean();

        $this->assertEquals('error', $result);
    }

}