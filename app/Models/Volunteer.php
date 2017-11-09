<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
    	'village_id', 'name', 'date_of_birth', 'address', 'id_card', 'phone_number', 'whatsapp_number', 'status',
    	'photo_profile', 'photo_id_card'
    ];
}
