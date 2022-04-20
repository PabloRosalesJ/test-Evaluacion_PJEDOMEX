<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class CompraArticuloRequest extends FormRequest
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
            'idArticulo' => 'required|exists:tblarticulos,idArticulo',
            'cantidad' => 'required|numeric',
            'fechaCompra' => 'required|date',
            'fechaEntrega' => 'required|date',
            'factura' => 'required',
            'provedor' => 'required',
        ];
    }
}
