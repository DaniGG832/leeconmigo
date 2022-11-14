<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ilustrador extends Model
{
    use HasFactory;

    protected $table = 'ilustradores';

    /**
    * Get all of the libros for the Ilustrador
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function libros()
   {
       return $this->hasMany(Libro::class, 'ilustrador_id', 'id');
   }
   
}
