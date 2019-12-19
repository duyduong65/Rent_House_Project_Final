<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = [
        'name', 'city_id'
    ];

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function houses()
    {
        return $this->hasMany('App\House');
    }
}
