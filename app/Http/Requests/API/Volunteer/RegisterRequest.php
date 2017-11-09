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
            'village' => 'required',
            'name' => 'required',
            'dob' => 'required|date_format:d/m/Y',
            'address' => 'required',
            'idNumber' => 'required|unique:volunteers,id_card',
            'phoneNumber' => 'required',
            'waNumber' => 'required',
            // 'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'photoKTP' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'village_id.required' => 'Daerah pemilihan relawan wajib diisi',
            'name.required' => 'Nama relawan wajib diisi',
            'dob.required' => 'Tanggal lahir relawan wajib diisi',
            'address.required' => 'Alamat relawan wajib diisi',
            'idNumber.required' => 'Nomor KTP relawan wajib diisi',
            'phoneNumber.required' => 'Nomor telepon/HP relawan wajib diisi',
            'whatsapp_number.required' => 'Nomor whatapps relawan wajib diisi',
            'status.required' => 'Status pendaftaran wajib diisi',
            
            'dob.date_format' => 'Tanggal lahir harus menggunakan format tgl/bulan/tahun, misalnya 01/10/1970',
            'idNumber.unique' => 'Relawan dengan nomor KTP ini sudah pernah didaftarkan sebelumnya',
        ];
    }
}
