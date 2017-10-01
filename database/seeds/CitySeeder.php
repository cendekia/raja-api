<?php

use App\Model\Province;
use App\Models\City;
use App\Models\LocationRawData;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cities distribution
        $rawCities = LocationRawData::select('kabupaten', 'provinsi')->groupBy('provinsi', 'kabupaten')->get();

        $key = [];
        $cities = $rawCities->map(function ($item) use ($key) {
            $prov = Province::whereName($item['provinsi'])->select('id')->first();    

            if (count($prov)) {
                $key['province_id'] = $prov->id;
                $key['name'] = $item['kabupaten'];
            }
            
            return $key;
        });

        City::insert($cities->toArray());
    }
}
