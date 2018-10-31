<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =[

        'body',
        'url',
        'commentable_id',
        'commentable_type',
        'user_id',

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
