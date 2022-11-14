<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $table ='temas';


    /**
     * The libros that belong to the Temas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function libros()
    {
        return $this->belongsToMany(Libro::class, 'libro_tema', 'tema_id', 'libro_id');
    }

}
