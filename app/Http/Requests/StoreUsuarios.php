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
            /**
             * Con la validacion de abajo ariamos que cada nombre de usuario fuera unico
             * 'nombreUser' => 'required|unique:App\Models\Usuario,nombre',
             */
            'nombreUser' => 'required',
            'apellidosUser' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombreUser.required' => 'Dont leave the name empty',
            //'nombreUser.unique' => 'That user already exists',
            'apellidosUser.required' => 'Dont leave the Surname empty',
        ];
    }
}
