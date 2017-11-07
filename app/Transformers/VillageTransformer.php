<?php

namespace App\Transformers;

use App\Models\Village;
use League\Fractal\TransformerAbstract;

class VillageTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Village $village)
    {
        return [
            'id' => $village->id,
            'name' => $village->name,
            'dapil_id' => $village->dapil['dapil_id'],
            'district_id' => $village->district->id
        ];    
    }
}
