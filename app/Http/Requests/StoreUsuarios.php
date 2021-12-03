<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarios extends FormRequest
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
            'nombreUser' => 'required',
            'appellidosUser' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombreUser.required' => 'Dont leave the name empty',
            'appellidosUser.required' => 'Dont leave the name empty',
        ];
    }
}
