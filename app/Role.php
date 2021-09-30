<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function menuoptions()
    {
        return $this->belongsToMany(MenuOPtion::class,'menu_options_role','role_id','menu_option_id');
    }
    public function rights()
    {
        return $this->hasMany('App\Rights','role_id','id');
    }

    public function rightss()
    {
        return $this->belongsToMany('App\Rights','Rights','menu');
    }
}
