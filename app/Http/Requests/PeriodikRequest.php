<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PeriodikRequest extends Request
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
            'tahun_ajaran_id'=>'required',
            'semester_id'=>'required',
            'waktu_penyelenggaraan_id'=>'required',
            'bosna'=>'required',
            'bosda'=>'required',
            'daya'=>'required',
            'kategori_wilayah_id'=>'required'
           
        ];
    }
    public function attributes()
    {
        return [
            
            'sekolah_id'=>'Nama Sekolah',
            'tahun_ajaran_id'=>'Tahun Ajaran',
            'semester_id'=>'Semester',
            'waktu_penyelenggaraan_id'=>'Waktu Penyelenggaraan',
            'bosna'=>'BOSNA',
            'bosda'=>'BOSDA',
            'daya'=>'Daya Listrik',
            'kategori_wilayah_id'=>'Kategori Wilayah'
        ];
    }
}
