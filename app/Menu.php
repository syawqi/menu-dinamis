<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    public function submenu(){
        return $this->hasMany('App\Menu', 'parent_id');
    }
}
