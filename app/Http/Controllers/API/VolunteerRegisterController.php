<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Volunteer\RegisterRequest;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerRegisterController extends Controller
{
    public function index()
    {
    	return 'foo';
    }

    public function store(RegisterRequest $request)
    {
    	$input = $request->all();
    	$input['date_of_birth'] = date('Y-m-d', strtotime(str_replace('/', '-', $input['date_of_birth'])));

        //upload images
        if ($request->hasFile('photo_profile')) {
            $image = $request->file('photo_profile');
            $name = 'profile_'.rand().time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/contents');
            $image->move($destinationPath, $name);
            
            $input['photo_profile'] = $name;
        }

        if ($request->hasFile('photo_id_card')) {
            $image = $request->file('photo_id_card');
            $name = 'ktp_'.rand().time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/contents');
            $image->move($destinationPath, $name);
            
            $input['photo_id_card'] = $name;
        }

    	$volunteer = Volunteer::create($input);

    	return $this->respondFormatter(['data' => $volunteer]); 
    }
}
