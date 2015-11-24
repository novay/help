<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SekolahRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->getRepo('bentuk_pendidikan')->findOrFail($this->input('bentuk_pendidikan_id'))){
                if ($this->getRepo('status_sekolah')->findOrFail($this->input('status_sekolah_id'))){
                    if ($this->getRepo('status_kepemilikan')->findOrFail($this->input('status_kepemilikan_id')))
                        return true;
                }
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
            'npsn'=>'required|min:3|max:50|unique:sekolahs',
            'nss'=>'required|min:3|max:50|unique:sekolahs',
            'title'=>'required|min:3|max:50',
            'bentuk_pendidikan_id'=>'required|digits:1',
            'status_sekolah_id'=>'required|digits:1',
            'status_kepemilikan_id'=>'required|digits:1',
            'no_telp'=>'required|between:10,15',
            'no_hp'=>'required|between:10,15',
            'email'=>'required|email',
            'file_npsn'=>'required|mimes:jpg,bmp,png,jpeg|max:500',
            'file_nss'=>'required|mimes:jpg,bmp,png,jpeg|max:500',
            'file_logo'=>'required|mimes:jpg,bmp,png,jpeg|max:500',
        ];
    }
    public function attributes()
    {
        return[
            'bentuk_pendidikan_id'=>'Bentuk Pendidikan',
            'status_sekolah_id'=>'Status Pendidikan',
            'status_kepemilikan_id'=>'Status Kepemilikan',
            'title'=>'Nama Sekolah'
        ];
    }
}
