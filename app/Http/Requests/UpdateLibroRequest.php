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
            'titulo'=> 'required',
            'titulo_original'=> 'nullable',
            'ISBN10'=> 'nullable|numeric|digits:10|unique:libros,ISBN10,'.$this->libro->id,
            'ISBN13'=> 'nullable|numeric|digits:13|unique:libros,ISBN13,'.$this->libro->id, 
            'year'=> 'required|numeric|digits:4',
            'n_pag'=> 'required|numeric',
            'img'=> 'nullable|image',
            'descripcion'=> 'nullable|min:3',
            'sinopsis'=> 'required|min:3',
            'editorial_id'=> 'required|exists:editoriales,id',
            'ilustrador_id'=> 'required|exists:ilustradores,id',
            'edad_id'=> 'required|exists:edades,id', 
            'idioma_id'=> 'required|exists:idiomas,id', 
            'autor_id'=> 'required|exists:autores,id',
            'encuadernacion_id'=> 'required|exists:encuadernaciones,id',
            'temas'=>'',
            
            
        ];
    }
}
