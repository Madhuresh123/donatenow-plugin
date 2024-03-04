<?php

namespace Inc\Pages;

use \Inc\Base\BaseController;

class Admin extends BaseController
{
    public function register(){
        
        add_action('admin_menu', array($this, 'add_admin_pages'));

        add_action('wp_ajax_my_search_func',array($this, 'my_search_func'));
        add_action('wp_ajax_nopriv_my_search_func',array($this, 'my_search_func'));

        // add_action('wp_ajax_spinnal_form',array($this, 'spinnal_form'));
        // add_action('wp_ajax_nopriv_spinnal_form', array($this, 'spinnal_form'));

    }

    public function add_admin_pages(){

       add_menu_page('Donate Now Plugin', 'Donation', 'manage_options', 'donate_plugin', array( $this, 'admin_index' ), 'dashicons-store', 60);

       add_submenu_page('null', 'update-donation', 'Update donation', 'manage_options', 'donation-edit',array( $this, 'my_plugin_donation_edit' ));

       add_submenu_page('null', 'delete-donation', 'Delete donation', 'manage_options', 'donation-delete', array( $this, 'my_plugin_donation_delete' ));

       add_submenu_page('donate_plugin', 'Volunteer', 'Volunteer', 'manage_options', 'my-plugin-volunteer', array( $this, 'volunteer_form'));

       add_submenu_page('donate_plugin', 'Contact', 'Contact', 'manage_options', 'my-plugin-contact', array( $this, 'contact_form'));

    }

    public function admin_index(){
        require_once $this->plugin_path .'/templates/admin/donation_form.php';
    }

    public function my_search_func(){
        require_once $this->plugin_path .'/templates/my_search_func.php';
    }

    public function my_plugin_donation_edit(){
        require_once $this->plugin_path .'/templates/admin/donation.edit.php';
     }
    
    public function my_plugin_donation_delete(){
        require_once $this->plugin_path .'/templates/admin/donation.delete.php';
     }

     public function volunteer_form(){
        require_once $this->plugin_path .'/templates/admin/volunteer_form.php';
     }

     public function contact_form(){
        require_once $this->plugin_path .'/templates/admin/contact_form.php';
     }

    //  public function spinnal_form(){
    //     $contact_name = $_POST['contact_name'];
    //     echo $contact_name;
    //     wp_die();
    // }

}