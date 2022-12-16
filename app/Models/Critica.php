<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critica extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'critica',
    ];

    /**
     * Get the libro that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function libro()
    {
        return $this->belongsTo(Libro::class, 'libro_id', 'id');
    }

    /**
     * Get the libro that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    public function votoLibro($libro)
    {
        if ($this->user->votaciones->where('libro_id', $libro->id)->first()) {
            # code...
            return $this->user->votaciones->where('libro_id', $libro->id)->first()->voto;
        }

        return 0;
    }
}
