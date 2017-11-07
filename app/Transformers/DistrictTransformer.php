<?php

namespace App\Transformers;

use App\Models\District;
use App\Transformers\VillageTransformer;
use League\Fractal\TransformerAbstract;

class DistrictTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(District $district)
    {
        $villages = current(fractal($district->villages, new VillageTransformer())->toArray());

        return [
            'id' => $district->id,
            'name' => $district->name,
            'villages' => collect($villages)->pluck('name', 'id'),
            'dapil_id' => $villages[0]['dapil_id']
        ];
    }
}
