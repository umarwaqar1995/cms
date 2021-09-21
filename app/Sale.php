<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function CardDetails()
    {
        return $this->belongsTo('App\CardDetail','card_details_id','id');
    }
    public function Comments()
    {
        return $this->belongsTo('App\Comments','sale_id','id');
    }
}
