<?php

use App\Models\LocationRawData;
use App\Models\ZipCode;
use Illuminate\Database\Seeder;

class ZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ZipCode distribution
        $totalPage = LocationRawData::select('kodepos', 'kelurahan')->with('village')->count();

        $totalPerPage = 2000;
        $perPage = $totalPage/$totalPerPage;
        $index = 0;
        
        while ($index < $totalPage) {
            $skip = $index;
            $take = $totalPerPage;

            $rawZipCode = LocationRawData::select('kodepos', 'kelurahan')->with('village')->skip($skip)->take($take)->get();
            
            $key = [];
            $zipCode = $rawZipCode->map(function ($item) use ($key) {
                if ($item->village) {
                    $key['village_id'] = $item->village->id;
                    $key['code'] = $item->kodepos;
                    
                    return $key;
                }
            });

            ZipCode::insert(array_filter($zipCode->toArray()));

            $index = $index + $totalPerPage;
        }

        $usedPage = $index - $totalPerPage;
        $leftOver = $totalPage - ($usedPage);
        $rawZipCode = LocationRawData::select('kodepos', 'kelurahan')->with('village')->skip($usedPage)->take($leftOver)->get();

        $key = [];
        $zipCode = $rawZipCode->map(function ($item) use ($key) {
            if ($item->village) {
                $key['village_id'] = $item->village->id;
                $key['code'] = $item->kodepos;
                
                return $key;
            }
        });

        ZipCode::insert(array_filter($zipCode->toArray()));
    }
}
