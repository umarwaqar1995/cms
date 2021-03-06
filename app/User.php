<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'updated_at', 
        'deleted_at', 
        'remember_token', 
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    public function Roles()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }
    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function Users()
    {
        return $this->hasMany(User::class, 'agent_id');
    }

//---------------For Middleware------------------

    // public function hasAnyRoles($role_id)
    // {
    //     return null != $this->roles()->whereIn('title'.$roles)->first();
    // }
    // public function hasAnyRole($role_id)
    // {
    //     return null != $this->roles()->where('title'.$role_id)->first();
    // }
}
