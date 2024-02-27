<?php

namespace Inc\Base;

use \Inc\Base\BaseController;

class SettingLinks extends BaseController
{

    public function register(){

      add_filter("plugin_action_links_{$this->plugin}", array( $this, 'setting_links'));
    }

    public function setting_links($links) {
   
        //add custom settings link
        $settings_link = '<a href="admin.php?page=donate_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;

    }

}
