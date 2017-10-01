<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocationRawData extends Model
{
    protected $table = "location_raw_data";

    public function district()
    {
    	return $this->hasOne(\App\Models\District::class, 'name', 'kecamatan');
    }

    public function village()
    {
    	return $this->hasOne(\App\Models\Village::class, 'name', 'kelurahan');
    }
}
