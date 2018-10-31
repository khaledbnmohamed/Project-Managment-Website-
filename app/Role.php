<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable =[

        'name',
      

    ];

    public function user()
    {

        return $this->hasMany('App\User');
    }
    public function projects()
    {

        return $this->belongsTo('App\Projects');
    }
    public function company()
    {

        return $this->belongsTo('App\Company');
    }
}
