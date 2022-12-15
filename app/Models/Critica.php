<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critica extends Model
{
    use HasFactory;

    /* TODO: $fillable */
    
    /**
 * Get the libro that owns the Libro
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function libro()
{
    return $this->belongsTo(Libro::class, 'libro_id', 'id');
}
}
