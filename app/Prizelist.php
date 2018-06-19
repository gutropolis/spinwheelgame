<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prizelist extends Authenticatable
{
    // relation with Permissions
  

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table = 'prizelist';
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

 public function user() {
  return $this->belongsTo('App\User');
 }
}
