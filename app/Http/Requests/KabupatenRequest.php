<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class KabupatenRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $provinsi = $this->input('provinsi_id');
        if($this->getRepo('provinsi')->find($provinsi)){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|max:50|min:3',
            'provinsi_id'=>'required',
            'id'=>'required|max:4|min:4',
        ];
    }
    public function attributs()
    {
        return [
            'title'=>'Nama Kabupaten',
            'provinsi_id'=>'Provinsi',
            'id'=>'ID Kabupaten',
            ];
    }
}
