<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';

    protected $fillable = [
        'titulo',
        'titulo_original',
        'ISBN10', 'ISBN13',
        'year',
        'n_pag',
        'img',
        'sinopsis',
        'descripcion',
        'editorial_id',
        'ilustrador_id',
        'edad_id', 
        'idioma_id', 
        'autor_id',
        'encuadernacion_id'
    ];


    /**
     * The temas that belong to the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function temas()
    {
        return $this->belongsToMany(Tema::class, 'libro_tema', 'libro_id', 'tema_id');
    }


    /**
     * Get the ilustrador that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ilustrador()
    {
        return $this->belongsTo(Ilustrador::class, 'ilustrador_id', 'id');
    }

    /**
     * Get the ilustrador that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function editorial()
    {
        return $this->belongsTo(Editorial::class, 'editorial_id', 'id');
    }


    /**
     * Get the ilustrador that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id', 'id');
    }


    /**
     * Get the ilustrador that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function edad()
    {
        return $this->belongsTo(Edad::class, 'edad_id', 'id');
    }


    /**
     * Get the ilustrador that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'idioma_id', 'id');
    }
}
