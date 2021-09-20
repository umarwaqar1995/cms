<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
       protected $table = 'comments';

    public function GeneralComments(){

        return $this->belongsTo('App\Sale','sale_id','id');
    }
}