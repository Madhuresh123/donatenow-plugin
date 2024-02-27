<?php

namespace Inc\Pages;

use \Inc\Base\BaseController;

class Admin extends BaseController
{
    public function register(){
        
        add_action('admin_menu', array($this, 'add_admin_pages'));
        add_action('wp_ajax_my_search_func',array($this, 'my_search_func'));

    }

    public function add_admin_pages(){

       add_menu_page('Donate Now Plugin', 'Donation', 'manage_options', 'donate_plugin', array( $this, 'admin_index' ), 'dashicons-store', 60);

       add_submenu_page('null', 'update-donation', 'Update donation', 'manage_options', 'donation-edit',array( $this, 'my_plugin_donation_edit' ));

       add_submenu_page('null', 'delete-donation', 'Delete donation', 'manage_options', 'donation-delete', array( $this, 'my_plugin_donation_delete' ));
    }

    public function admin_index(){
        require_once $this->plugin_path .'/templates/admin.php';
    }

    public function my_search_func(){

        require_once $this->plugin_path .'/templates/my_search_func.php';
    }

    public function my_plugin_donation_edit(){
        require_once $this->plugin_path .'/templates/donation.edit.php';
     }
    
    public function my_plugin_donation_delete(){
        require_once $this->plugin_path .'/templates/donation.delete.php';
     }

}