<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;


    protected $table = 'editoriales';

    protected $fillable = [
        'name',
        'descripcion'];

    /**
    * Get all of the libros for the Ilustrador
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function libros()
   {
       return $this->hasMany(Libro::class, 'editorial_id', 'id');
   }
}
