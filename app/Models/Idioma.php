<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    use HasFactory;

    protected $table = 'idiomas';

    protected $fillable = [
        'img',
        'name',
        'descripcion'];
    /**
    * Get all of the libros for the Ilustrador
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function libros()
   {
       return $this->hasMany(Libro::class, 'idioma_id', 'id');
   }

   
}
