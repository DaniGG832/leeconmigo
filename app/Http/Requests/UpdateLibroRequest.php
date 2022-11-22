<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'titulo'=> '',
            'titulo_original'=> '',
            'ISBN13'=> 'unique:libros,ISBN10'.$this->id,
            'ISBN13'=> 'unique:libros,ISBN13'.$this->libros()->id,
            'year'=> '',
            'n_pag'=> '',
            'img'=> '',
            'descripcion'=> '',
            'sinopsis'=> '',
            'editorial_id'=> '',
            'ilustrador_id'=> '',
            'edad_id'=> '', 
            'idioma_id'=> '', 
            'autor_id'=> '',
            'encuadernacion_id'=> '',
            'temas'=>'',
        ];
    }
}
