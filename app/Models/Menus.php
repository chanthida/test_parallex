<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';


    public function menuContents()
    {
        return $this->hasMany('App\Models\MenuContents', 'menu_id');
    }
}


