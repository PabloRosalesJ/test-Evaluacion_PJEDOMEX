<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class ComprasRequest extends FormRequest
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
            'fechaCompra' => 'required|date',
            'factura' => 'required',
            'provedor' => 'required',
            'cantidad' => 'required|numeric|min:1',
            'fechaEntrega' => 'required|date',
            'idUsuario' => 'required|exists:tblusuarios',
        ];
    }
}
