<?php

use App\Models\LocationRawData;
use App\Models\Village;
use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Village distribution
        $totalPage = LocationRawData::select('kelurahan', 'kecamatan')->with('district')->count();

        $totalPerPage = 2000;
        $perPage = $totalPage/$totalPerPage;
        $index = 0;
        
        while ($index < $totalPage) {
            $skip = $index;
            $take = $totalPerPage;

            $rawVillages = LocationRawData::select('kelurahan', 'kecamatan')->with('district')->skip($skip)->take($take)->get();
            
            $key = [];
            $villages = $rawVillages->map(function ($item) use ($key) {
                if ($item->district) {
                    $key['district_id'] = $item->district->id;
                    $key['name'] = $item->kelurahan;
                    
                    return $key;
                }
            });

            Village::insert(array_filter($villages->toArray()));

            $index = $index + $totalPerPage;
        }

        $usedPage = $index - $totalPerPage;
        $leftOver = $totalPage - ($usedPage);
        $rawVillages = LocationRawData::select('kelurahan', 'kecamatan')->with('district')->skip($usedPage)->take($leftOver)->get();

        $key = [];
        $villages = $rawVillages->map(function ($item) use ($key) {
            if ($item->district) {
                $key['district_id'] = $item->district->id;
                $key['name'] = $item->kelurahan;
                
                return $key;
            }
        });

        Village::insert(array_filter($villages->toArray()));
    }
}
