<?php
namespace App\Util;
use App\Models\Menus;

/**
 * Created by PhpStorm.
 * User: hemisphere_dev
 * Date: 7/10/2018
 * Time: 12:55 PM
 */
class Util
{
    const DYNAMIC_FIELD =  array(
                                    'home'  => array('icon' => false,
                                        'header' => true,
                                        'content' => true,
                                        'sub_content' => false,
                                        'img' => true,
                                        'id_tag' => false,
                                        'id_tag2' => false,
                                        'description' => false,
                                        'percent_data' => false,
                                    ),
                                    'about' =>  array('icon' => true,
                                        'header' => true,
                                        'content' => false,
                                        'sub_content' => false,
                                        'img' => false,
                                        'id_tag' => false,
                                        'id_tag2' => false,
                                        'description' => false,
                                        'percent_data' => false,
                                    ),
                                    'services' =>  array('icon' => true,
                                        'header' => true,
                                        'content' => true,
                                        'sub_content' => false,
                                        'img' => false,
                                        'id_tag' => false,
                                        'id_tag2' => false,
                                        'description' => false,
                                        'percent_data' => false,
                                    ),
                                    'skills' =>  array('icon' => false,
                                        'header' => true,
                                        'content' => false,
                                        'sub_content' => false,
                                        'img' => false,
                                        'id_tag' => false,
                                        'id_tag2' => false,
                                        'description' => false,
                                        'percent_data' => true,
                                    ),
                                    'education' =>  array('icon' => false,
                                        'header' => true,
                                        'content' => true,
                                        'sub_content' => false,
                                        'img' => false,
                                        'id_tag' => true,
                                        'id_tag2' => true,
                                        'description' => false,
                                        'percent_data' => false,
                                    ),
                                    'experience' =>  array('icon' => false,
                                        'header' => true,
                                        'content' => true,
                                        'sub_content' => true,
                                        'img' => false,
                                        'id_tag' => false,
                                        'id_tag2' => false,
                                        'description' => false,
                                        'percent_data' => false,
                                    ),
                                    'work' =>  array('icon' => false,
                                        'header' => true,
                                        'content' => true,
                                        'sub_content' => false,
                                        'img' => true,
                                        'id_tag' => false,
                                        'id_tag2' => false,
                                        'description' => false,
                                        'percent_data' => false,
                                    ),
                                    'blog' =>  array('icon' => false,
                                        'header' => false,
                                        'content' => false,
                                        'sub_content' => false,
                                        'img' => false,
                                        'id_tag' => false,
                                        'id_tag2' => false,
                                        'description' => false,
                                        'percent_data' => false,
                                    ),
                                    'contact' =>  array('icon' => false,
                                        'header' => false,
                                        'content' => false,
                                        'sub_content' => false,
                                        'img' => false,
                                        'id_tag' => false,
                                        'id_tag2' => false,
                                        'description' => false,
                                        'percent_data' => false,
                                    )
                                );

    public static function getMenu(){
        $menus =  Menus::orderBy('sort_order')
            ->get();
        return $menus;
    }

    public static function getFieldBySlug($slug){

        return Util::DYNAMIC_FIELD[$slug];

    }

}