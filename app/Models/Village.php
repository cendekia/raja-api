<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    public function district()
    {
    	return $this->belongsTo(\App\Models\District::class);
    }

    public function dapil()
    {
    	return $this->hasOne(\App\Models\DapilMapping::class);
    }
}
