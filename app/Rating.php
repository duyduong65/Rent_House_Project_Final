<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['star', 'content', 'user_id', 'house_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function house()
    {
        return $this->belongsTo('App\House');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
