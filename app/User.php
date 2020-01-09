<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_active','role_id','photo_id',
    ];

    public function Role(){
      return  $this->belongsTo('App\Role');
    }

    public function photo(){
        return $this->belongsTo('App\photo');
    }

    public function post(){
        return $this->hasMany('App\post');
    }

    public function isAdmin() {
        if($this->role()->where('name','Administrator')->exists() ) {
            return true;
        }
        return false;
    }



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
