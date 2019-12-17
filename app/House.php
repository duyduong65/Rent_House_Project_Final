<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'houses';
    public $timestamps = false;
    protected $fillable = [
        'title', 'kindHouse', 'kindRoom', 'address', 'numBedroom', 'numBathroom', 'description', 'price', 'city_id'
    ];
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
