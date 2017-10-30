<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

abstract class JsonFormRequest extends FormRequest
{
    protected function failedValidation(Validator $validator) {
    	$transformed = [];

        foreach ($validator->errors()->getMessages() as $field => $message) {
            $transformed[$field] = $message[0];
        }

    	throw new HttpResponseException(response()->json([
            'error' => [
                'message' => 'Validasi gagal, silakan cek kembali data yang Anda telah isi.',
                'validation' => $transformed,
            ],
            'status_code' => 40
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)); 
    }
}
