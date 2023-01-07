<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libreria extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'nombre',
        'lat',
        'lng',
        'telefono',
        'web',
        'email',
        'direccion',
        'ciudad',
        'cod_postal',
        'provincia_id',
    ];

    /**
     * Get the provincia that owns the Libreria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id');
    }

    public function scopeMostrarProvincia($query, $data)
    {
        
        if (isset($data)) {
            
            $query->where('provincia_id', $data);

        } 
    }
}
