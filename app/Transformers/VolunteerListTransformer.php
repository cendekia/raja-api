<?php

namespace App\Transformers;

use App\Models\Volunteer;
use League\Fractal\TransformerAbstract;

class VolunteerListTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Volunteer $volunteer)
    {
        return [
            'id' => $volunteer->id,
            'name' => $volunteer->name,
            'date_of_birth' => $volunteer->date_of_birth,
            'address' => $volunteer->address,
            'id_card' => $volunteer->id_card,
            'phone_number' => $volunteer->phone_number,
            'whatsapp_number' => $volunteer->whatsapp_number,
        ];
    }
}
