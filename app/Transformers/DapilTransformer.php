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
            return [$key => [$item['district']->id => $item['district']->name]];
        });

        $unique = $districts->unique(function ($item) {
            return $item;
        });


        return [
            $dapil->id => $dapil->name,
            'villages' => current(fractal($dapil->villages, new VillageTransformer())->toArray()),
            'districts' => $unique->values()
        ];
    }
}
