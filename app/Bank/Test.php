<?php
namespace App\Bank;
use App\Models\Menus;

/**
 * Created by PhpStorm.
 * User: hemisphere_dev
 * Date: 7/10/2018
 * Time: 12:55 PM
 */
class Test
{

    public static function getMenu(){
        $menus =  Menus::orderBy('sort_order')
            ->get();
        return $menus;
    }

}