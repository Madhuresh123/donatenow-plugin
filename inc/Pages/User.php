<?php

namespace Inc\Pages;

use \Inc\Base\BaseController;

class User extends BaseController
{
    public function register(){

        add_shortcode('donation_btn_2' , array( $this, 'donation_btn_2' ));
        add_shortcode('donation_form_2' , array( $this, 'donation_form_2' ));
        add_shortcode('donation_receipt_2' , array( $this, 'donation_receipt_2' ));
        add_shortcode('volunteer_form' , array( $this, 'volunteer_form' ));
        add_shortcode('contact_form' , array( $this, 'contact_form' ));

    }

    public function donation_btn_2(){
    
            ob_start();
            require_once $this->plugin_path .'/templates/donationBtn.php';
            return ob_get_clean();
    
    }

    public function donation_form_2(){
    
        ob_start();
        require_once $this->plugin_path .'/templates/donationForm.php';
        return ob_get_clean();

    }

    public function donation_receipt_2(){
    
    ob_start();
    require_once $this->plugin_path .'/templates/donationReceipt.php';
    return ob_get_clean();

    }

    public function volunteer_form(){
    
        ob_start();
        require_once $this->plugin_path .'/templates/volunteer_form.php';
        return ob_get_clean();
    
        }

    public function contact_form(){
    
            ob_start();
            require_once $this->plugin_path .'/templates/contact_form.php';
            return ob_get_clean();
        
    }

}