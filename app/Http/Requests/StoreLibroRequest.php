<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibroRequest extends FormRequest
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
            'titulo'=> 'required|',
            'titulo_original'=> '',
            'ISBN10'=> 'nullable|unique:libros,ISBN10',
            'ISBN13'=> 'nullable|unique:libros,ISBN13', 
            'year'=> 'required',
            'n_pag'=> 'required',
            'img'=> 'nullable|image',
            'descripcion'=> '',
            'sinopsis'=> 'required',
            'editorial_id'=> 'required',
            'ilustrador_id'=> 'required',
            'edad_id'=> 'required', 
            'idioma_id'=> 'required', 
            'autor_id'=> 'required',
            'encuadernacion_id'=> 'required',
            'temas'=>'',
        ];
    }
}
