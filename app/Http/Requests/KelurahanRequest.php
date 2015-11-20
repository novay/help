<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class KelurahanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $provinsi = $this->input('provinsi_id');
        $kabupaten = $this->input('kabupaten_id');
        $kecamatan = $this->input('kecamatan_id');
        return $this->getRepo('provinsi')->validationRequest($provinsi,$kabupaten,$kecamatan);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'title' => 'required|min:3|max:50',
        'id'=>'required',
        'provinsi_id' =>'required|digits:2',
        'kabupaten_id' =>'required|digits:4'
        'kecamatan_id' =>'required|digits:7'
        ];
    }
    public function attributes()
    {
     return [
     'title' => 'Nama Kelurahan',
     'id'=>'ID Kelurahan',
     'provinsi_id' =>'Nama Provinsi',
     'kabupaten_id' =>'Nama Kabupaten'
     'kecamatan_id' =>'Nama Kecamatan'
     ];   
    }
}
