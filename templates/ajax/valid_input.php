<?php

interface DatabaseInterface {
    public function insert($table, $data);
  }

function current_time( $type = 'mysql' ) {
    return '2024-03-28 18:15:00'; // Fixed time for testing
}


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
