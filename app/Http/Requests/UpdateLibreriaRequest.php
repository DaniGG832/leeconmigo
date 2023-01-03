<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLibreriaRequest extends FormRequest
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
/* 'lat' => ['required','numeric' ],
            'lng' => ['required','numeric'],
            'telefono' => ['regex:/^([0-9\s\-\+\(\)]*)$/','min:9'], 
            'lat' => ['required','numeric','regex:/^[-+]?([1-8]?\d(\.\d+)?|90(\.0+)?)$'],
            'lng' => ['required','numeric','regex:/^[-+]?(180(\.0+)?|((1[0-7]\d)|([1-9]?\d))(\.\d+)?)$'],
            */