<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','company','location','priv','right'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	public function isAdmin()
{
    return $this->admin; // this looks for an admin column in your users table
}
	public function doc(){
		return $this->hasMany('App\doc');
	}
	public function item(){
		return $this->hasManyThrough('App\item', 'App\doc');
	}	
}
