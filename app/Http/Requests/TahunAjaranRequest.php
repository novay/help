<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TahunAjaranRequest extends Request
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
            'title'=>'required|min:9|max:9'
        ];
    }
    public function attributes()
    {
        return['title'=>'Tahun Ajaran'];
    }
}
