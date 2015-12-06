<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AkreditasiRequest extends Request
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
            'sekolah_id'=>'required',
            'no_sk'=>'required',
            'nilai_id'=>'required',
            'tmt'=>'required|date',
            'tanggal'=>'required|date',
            'lembaga_id'=>'required',
            'file'=>'required|max:500|mimes:jpg,png,bmp,gif,jpeg'
        ];
    }
}
