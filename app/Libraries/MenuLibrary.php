<?php

namespace App\Libraries;

class MenuLibrary
{
    public static function get_menu($role = null)
    {

        $list = [
            'Orders' => '/'
        ];

        return $list;
    }
}
