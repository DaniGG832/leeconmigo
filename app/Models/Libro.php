<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';


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
