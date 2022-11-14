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
            'titulo'=> '',
            'titulo_original'=> '',
            'ISBN10'=> '', 
            'ISBN13'=> '',
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
