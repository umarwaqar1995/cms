<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}