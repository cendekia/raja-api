<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dapil extends Model
{
    public function villages()
    {
    	return $this->belongsToMany(\App\Models\Village::class, 'dapil_mappings', 'dapil_id', 'village_id');
    }
}
