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
        if(strtolower($this->method()) != 'patch'){
            if(is_null($this->input('provinsi'))){
                return false;
            }else{
                return $this->valid();
            }
        }else{
           if(is_null($this->input('provinsi')) or '--Pilih salah satu--' == $this->input('provinsi')){
                return true;
            }
        }
        return $this->valid();
    }
    private function valid()
    {
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
            // 'provinsi'=>'digits:2',
            // 'kabupaten'=>'digits:4',
            // 'kecamatan'=>'digits:7',
            'kelurahan_id'=>'required|digits:10',
            'kode_pos'=>'required|digits:5',
            'rt'=>'required|digits_between:2,3',
            'rw'=>'required|digits_between:2,3',
            // 'dusun'=>'required|min:3|max:50',
            'file_logo'=>'max:500| mimes:jpeg,bmp,png,jpg',
            'file_akte'=>'max:500| mimes:jpeg,bmp,png,jpg',
            'file_berita'=>'max:500| mimes:jpeg,bmp,png,jpg',
            'file_pengesahan'=>'max:500| mimes:jpeg,bmp,png,jpg',
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
