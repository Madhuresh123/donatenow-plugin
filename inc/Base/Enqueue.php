<?php

namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController
{
    public function register(){
      add_action('admin_enqueue_scripts', array($this, 'admin_enqueue'));
      add_action('wp_enqueue_scripts', array($this, 'wp_enqueue'));
    }

    public function admin_enqueue(){

        $styleVer = filemtime($this->plugin_path .'assert/admin/myStyle.css');
        $scriptVer = filemtime($this->plugin_path .'assert/admin/myScript.js');
        
        wp_enqueue_style('my_admin_plugin_style', $this->plugin_url . 'assert/admin/myStyle.css', '',  $styleVer,'');
        wp_enqueue_script('my-custom-js', $this->plugin_url . 'assert/admin/myScript.js', array('jquery'),  $scriptVer,true);
        //ajax call
        wp_add_inline_script('my-custom-js', 'var ajaxUrl = "'.admin_url('admin-ajax.php').'";' , 'before');

    }

    public function wp_enqueue(){

        $styleVer = filemtime($this->plugin_path .'assert/wp/myStyle.css');
        $scriptVer = filemtime($this->plugin_path .'assert/wp/myScript.js');
        
        wp_enqueue_style('my_wp_plugin_style', $this->plugin_url . 'assert/wp/myStyle.css', '',  $styleVer,'');
        wp_enqueue_script('my_wp_plugin_script', $this->plugin_url . 'assert/wp/myScript.js', array('jquery'),  $scriptVer,true);
        
        //ajax call
        wp_add_inline_script('my_wp_plugin_script', 'var ajaxUrl = "'.admin_url('admin-ajax.php').'";' , 'before');

    }

}
