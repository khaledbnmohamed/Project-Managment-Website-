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
        'name', 'email', 'password','first_name','last_name','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function commments(){

        return $this->morphMany('App\Comment','commentable');
    }
    public function role(){

        return $this->belongsTo('App\Role');
    }
    public function companies(){

        return $this->hasMany('App\Company');
    }
    public function task(){

        return $this->belongsToMany('App\Task');
    }

    public function projects()
    {

        return $this->belongsTo('App\Projects');
    }

}
