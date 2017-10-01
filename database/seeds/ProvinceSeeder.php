<?php

use App\Model\Province;
use App\Models\LocationRawData;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Province distribution
        $rawProvinces = LocationRawData::select('provinsi')->groupBy('provinsi')->get();

        $key = [];
        $provinces = $rawProvinces->map(function ($item) use ($key) {
            $key['name'] = $item['provinsi'];
            
            return $key;
        });

        Province::insert($provinces->toArray());
    }
}
