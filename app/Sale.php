<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
   
        public function CardDetails(): HasMany
        {
            return $this->hasMany(CardDetail::class, 'sale_id', 'id');
        
    }

    
    
        public function Comments()
        {
            return $this->hasMany(Comment::class, 'sale_id');
        }
        public function status()
        {
            return $this->belongsTo(Status::class, 'status_id','id');
        }
        public function CreditCard()
        {
            return $this->hasMany(CardDetails::class, 'sale_id','id');
        }
        public function Users()
        {
            return $this->hasMany(User::class, 'user_id');
        }
        
}
