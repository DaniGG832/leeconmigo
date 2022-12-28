<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    /**
     * Get all of the librerias for the Provincia
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function librerias()
    {
        return $this->hasMany(Libreria::class, 'provincia_id', 'id');
    }
}
