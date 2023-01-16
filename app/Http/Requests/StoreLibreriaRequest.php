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
            'img'=> 'required|image',
            'nombre' => 'required',
            'lat' => ['required','numeric','min:-90','max:90'],
            'lng' => ['required','numeric','min:-180','max:180'],
            'telefono' => ['regex:/^([0-9\s\-\+\(\)]*)$/','min:9'],
            'web' => 'string',
            'email' => 'email',
            'direccion' => 'string',
            'ciudad' => 'string',
            'cod_postal' => 'numeric',
            'provincia_id' => 'required|integer|exists:provincias,id',


        ];
    }
}
