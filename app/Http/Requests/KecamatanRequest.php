<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class KecamatanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $kabupaten = $this->input('kabupaten_id');
        $provinsi = $this->input('provinsi_id');
        return $this->getRepo('kabupaten')
                    ->kabupaten($kabupaten,$provinsi)
                    ->count() >= 1 ? true :false;
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
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'Nama Kecamatan',
            'id'=>'ID Kematan',
            'provinsi_id' =>'Nama Provinsi',
            'kabupaten_id' =>'Nama Kabupaten'
        ];
    }
}
