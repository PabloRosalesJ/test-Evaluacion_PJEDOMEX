<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'paterno' => 'required',
            'materno' => 'required',
            'login' => 'required|email|unique:tblusuarios,login',
            'password' => 'required|confirmed',
            'activo' => 'required', // a: active, i: inactive
        ];
    }
}
