<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTareas extends FormRequest
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
            'nombre' => 'required',
            'usuarioId' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Dont leave the name empty',
            'usuarioId.required' => 'Choose a user',
            'usuarioId.numeric' => 'Id has to be a number',
        ];
    }
}
