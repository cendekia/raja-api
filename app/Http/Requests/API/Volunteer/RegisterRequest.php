<?php

namespace App\Http\Requests\API\Volunteer;

use App\Http\Requests\JsonFormRequest;

class RegisterRequest extends JsonFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'village_id' => 'required',
            'name' => 'required',
            'date_of_birth' => 'required|date_format:d/m/Y',
            'address' => 'required',
            'id_card' => 'required|unique:volunteers,id_card',
            'phone_number' => 'required',
            'whatsapp_number' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'village_id.required' => 'Daerah pemilihan relawan wajib diisi',
            'name.required' => 'Nama relawan wajib diisi',
            'date_of_birth.required' => 'Tanggal lahir relawan wajib diisi',
            'address.required' => 'Alamat relawan wajib diisi',
            'id_card.required' => 'Nomor KTP relawan wajib diisi',
            'phone_number.required' => 'Nomor telepon/HP relawan wajib diisi',
            'whatsapp_number.required' => 'Nomor whatapps relawan wajib diisi',
            'status.required' => 'Status pendaftaran wajib diisi',
            
            'date_of_birth.date_format' => 'Tanggal lahir harus menggunakan format tgl/bulan/tahun, misalnya 01/10/1970',
            'id_card.unique' => 'Relawan dengan nomor KTP ini sudah pernah didaftarkan sebelumnya',
        ];
    }
}
