<?php

namespace Inc;

final class Init
{

    /**Store all the classes inside the array
     * @return array full list of classes
     */ 
    public static function get_services(){

        return [
            Base\Enqueue::class,
            Pages\Admin::class,
            Pages\User::class,
            Base\SettingLinks::class,
        ];
    }

    /** Loop through the classes, initialize them, and
     * and call the register() method if it exists
     * */   
    public static function register_services(){

        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
            if(method_exists( $service, 'register')){
                $service->register();
            }
        }
    }

    /**Initialize the class
     * @param class $class       class from the service array
     * @return class instance    new instance of the class
     */
    private static function instantiate($class){

        $service = new $class();
        return $service;
    }

}