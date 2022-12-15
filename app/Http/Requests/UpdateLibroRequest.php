<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateLibroRequest extends FormRequest
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
        /* OJO: muy importante la coma dentro de las comillas para el 'unique:libros,ISBN13,'.$this->libro->id, (ISBN13 , '.$this) */
        return [
            'titulo'=> 'required|',
            'titulo_original'=> '',
            'ISBN10'=> 'nullable|unique:libros,ISBN10,'.$this->libro->id,
            'ISBN13'=> 'nullable|unique:libros,ISBN13,'.$this->libro->id, 
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
