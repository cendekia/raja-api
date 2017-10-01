<?php

use App\Models\City;
use App\Models\District;
use App\Models\LocationRawData;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // District distribution
        $rawDistricts = LocationRawData::select('kecamatan', 'kabupaten', 'provinsi')->groupBy('kecamatan', 'provinsi', 'kabupaten')->get();

        $key = [];
        $districts = $rawDistricts->map(function ($item) use ($key) {
            $cit = City::whereName($item['kabupaten'])->select('id')->first();    

            if (count($cit)) {
                $key['city_id'] = $cit->id;
                $key['name'] = $item['kecamatan'];
            }
            
            return $key;
        });

        $district = District::insert($districts->toArray());
    }
}
