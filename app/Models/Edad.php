<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edad extends Model
{
    use HasFactory;

    protected $table = 'edades';

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
       return $this->hasMany(Libro::class, 'edad_id', 'id');
   }

   
}
