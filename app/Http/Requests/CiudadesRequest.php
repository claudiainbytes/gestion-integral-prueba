<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CiudadesRequest extends FormRequest
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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                        'nombre' => 'required|string|min:3|max:60',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                        'nombre' => 'required|string|min:3|max:60',
                ];
            }
            default:break;
        }

    }

    /**
     * Get the validation message rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es requerido.',
            'nombre.min' => 'La longitud del nombre debe ser entre :min y :max caractéres',
            'nombre.max' => 'La longitud del nombre debe ser entre :min y :max caractéres.',
        ];
    }
}
