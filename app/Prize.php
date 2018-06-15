<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prize extends Authenticatable
{
    // relation with Permissions
  

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 //protected $table = 'gsend_prize';
    protected $fillable = [
        'user_id',
        'prize',
        'point',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
