<?php

class NOOF
{
    public static function get_user_data ( $what )
    {
        $user_data = file_get_contents( NOOF::get_config_data ( "user_data_file" ) );
        $user_data = explode('|', $user_data);
        
        if( !empty( $what ) && $what === "username" )
        {
            return $user_data[0];
        }
        elseif( !empty( $what ) && $what === "password" )
        {
            return $user_data[1];
        }
        else
        {
            return false;
        }
    }
    
    public static function get_config_data ( $what )
    {
        $config_data = include "config.php";
        return $config_data[$what];
    }
    
    public static function run ()
    {
        # echo NOOF::get_user_data( "password" );
    }
}
