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
    	$volunteer = Volunteer::create($input);

    	dd($volunteer);
    }
}
