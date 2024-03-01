<?php
/**
 * Plugin Name: Donate Now
 * Description: The most robust, flexible, and intuitive way to accept donations on WordPress.
 * Version: 2.0
 * Author: Madhuresh
 * 
 */

 /*
Donate Now is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Pay Now is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Pay Now. If not, see {URI to Plugin License}.
*/

 /*
    Public - can be accesses everywhere
    Protected - can access within the class itself or extension of the class
    Private - can access only within the class itself

*/

//If thhis file called directly, Abort!!
if(!defined('ABSPATH')){
    header("Location: /");
    die();
 }

 //Require once the Composer Autoload
 if(file_exists( dirname(__FILE__) . '/vendor/autoload.php')){
    require_once dirname(__FILE__) . '/vendor/autoload.php';
 }


 function activate(){
    Inc\Base\Activate::activate();
  }

 function deactivate(){
    Inc\Base\Deactivate::deactivate();
  }

 //Plugin activation
 register_activation_hook(__FILE__, 'activate');


 //Plugin deactivation
 register_deactivation_hook(__FILE__,'deactivate');

//Initializing all the core classes of the plugin
 if(!class_exists('INC\\Init')){
    Inc\Init::register_services();
 }
