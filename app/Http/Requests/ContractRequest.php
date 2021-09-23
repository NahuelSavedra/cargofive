<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
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
            'nombre' => 'required|string',
            'fecha' => 'required|date',
            'file' => 'required|in:xls,xlsx',
        ];
    }
    public function messages()
    {
            return [
                'required' => 'Debe completar el campo',
                'file' => 'El archivo debe ser de formato .xls, .xlsx',
                'file.required' => 'Debe cargar un archivo excel para el contrato',
            ];
    }

}
