<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Route;
class YayasanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        dd(Route::currentRouteName());
        if(is_null($this->input('provinsi'))){
            return false;
        }
        $p = $this->input('provinsi');
        $kb = $this->input('kabupaten');
        $kc = $this->input('kecamatan');
        $kl = $this->input('kelurahan_id');
        $provinsiModel = $this->getRepo('provinsi');
        return $provinsiModel->validationRequest($p,$kb,$kc,$kl);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule =  [
            'nama'=>'required|min:3|max:50',
            'pimpinan'=>'required|min:3|max:50',
            'alamat'=>'required|min:3|max:50',
            'provinsi'=>'required|digits:2',
            'kabupaten'=>'required|digits:4',
            'kecamatan'=>'required|digits:7',
            'kelurahan_id'=>'required|digits:10',
            'kode_pos'=>'required|digits:5',
            'rt'=>'required|digits_between:2,3',
            'rw'=>'required|digits_between:2,3',
            // 'dusun'=>'required|min:3|max:50',
            'file_logo'=>'required|max:500',
            'file_akte'=>'required|max:500',
            'file_berita'=>'required|max:500',
            'file_pengesahan'=>'required|max:500',
            'lintang'=>'required',
            'bujur'=>'required',
            'no_telp'=>'required|between:10,14',
            'no_hp'=>'required|between:10,14',
            'email'=>'required|email',
            'website'=>'required',
            'no_akte'=>'required|between:10,20',
            'no_berita'=>'required|between:10,20',
            'no_pengesahan'=>'required|between:10,20',
            'tgl_akte' => 'required|date',
            'tgl_berita' => 'required|date',
            'tgl_pengesahan' => 'required|date',
        ];
        return $rule;
    }
}
