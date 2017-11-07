<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function city()
    {
    	return $this->belongsTo(\App\Models\City::class);
    }

    public function scopeBogorOnly($query)
    {
    	return $query->where('city_id', '=', 64);
    }

    public function villages()
    {
    	return $this->hasMany(\App\Models\Village::class);
    }
}
