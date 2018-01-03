<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidation extends FormRequest
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
            'keahlian' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'negara' => 'required',
            'kodepos' => 'required',
            'bio' => 'required|max:255',
            'foto' => 'required',
            'background' => 'required',
        ];
    }
}
