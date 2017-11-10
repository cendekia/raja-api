<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Volunteer\RegisterRequest;
use App\Models\Volunteer;
use App\Transformers\VolunteerListTransformer;
use Illuminate\Http\Request;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class VolunteerRegisterController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::whereStatus('member')->paginate(10);

        $response = fractal()
           ->collection($volunteers->getCollection())
           ->transformWith(new VolunteerListTransformer())
           ->paginateWith(new IlluminatePaginatorAdapter($volunteers))
           ->toArray();;

    	return $this->respondFormatter($response);
    }

    public function store(RegisterRequest $request)
    {
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
