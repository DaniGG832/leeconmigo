<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibreriaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'img'=> 'nullable|image',
            'nombre' => 'required',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'telefono' => 'string',
            'web' => 'string',
            'email' => 'email',
            'direccion' => 'string',
            'ciudad' => 'string',
            'cod_postal' => 'numeric',
            'provincia_id' => 'required|integer',


        ];
    }
}
