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
        // 'village' => 'required',
        // 'name' => 'required',
        // 'dob' => 'required|date_format:d/m/Y',
        // 'address' => 'required',
        // 'idNumber' => 'required|unique:volunteers,id_card',
        // 'phoneNumber' => 'required',
        // 'waNumber' => 'required',
        // 'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // 'photoKTP' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	$request->dob = date('Y-m-d', strtotime(str_replace('/', '-', $request->dob)));

        //upload images
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = 'profile_'.rand().time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/contents');
            $image->move($destinationPath, $name);
            
            $request->photo = $name;
        }

        if ($request->hasFile('photoKTP')) {
            $image = $request->file('photoKTP');
            $name = 'ktp_'.rand().time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/contents');
            $image->move($destinationPath, $name);
            
            $request->photoKTP = $name;
        }

        // $volunteer = Volunteer::create($request);
        $volunteer = new Volunteer;
        $volunteer->village_id = $request->village;
        $volunteer->name = $request->name;
        $volunteer->date_of_birth = $request->dob;
        $volunteer->address = $request->address;
        $volunteer->id_card = $request->idNumber;
        $volunteer->phone_number = $request->phoneNumber;
        $volunteer->whatsapp_number = $request->waNumber;
        $volunteer->photo_profile = $request->photo;
    	$volunteer->photo_id_card = $request->photoKTP;
        $volunteer->save();

    	return $this->respondFormatter(['data' => $volunteer]); 
    }
}
