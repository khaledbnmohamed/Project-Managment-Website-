<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =[

        'name',
        'description',
        'company_id',
        'user_id',
        'days',
        'hours',
        'project_id' 

    ];
    
    public function user()
    {

        return $this->belongsTo('App\User');
    }
    public function projects()
    {

        return $this->belongsTo('App\Projects');
    }
    public function company()
    {

        return $this->belongsTo('App\Company');
    }
    public function users()
    {

        return $this->belongsToMany('App\User');
    }

}

