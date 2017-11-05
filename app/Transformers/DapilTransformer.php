<?php

namespace App\Transformers;

use App\Models\Dapil;
use App\Transformers\VillageTransformer;
use League\Fractal\TransformerAbstract;

class DapilTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Dapil $dapil)
    {
        $villages = $dapil->villages;

        $districts = $villages->mapWithKeys(function ($item, $key) {
            return [$key => [
                'id' => $item['district']->id,
                'name' => $item['district']->name
            ]];
        });

        $unique = $districts->unique(function ($item) {
            return $item;
        });


        return [
            'id' => $dapil->id,
            'name' => $dapil->name,
            'villages' => current(fractal($dapil->villages, new VillageTransformer())->toArray()),
            'districts' => $unique->values()
        ];
    }
}
