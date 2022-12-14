<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the rol that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id', 'id');
    }

    /**
     * Get all of the votaciones for the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function votaciones()
    {
        return $this->hasMany(Votacion::class, 'user_id', 'id');
    }

    /**
     * Get all of the preguntas for the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preguntas()
    {
        return $this->hasMany(Pregunta::class, 'user_id', 'id');
    }

    /**
     * Get all of the respuestas for the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respuestas()
    {
        return $this->hasMany(Respuesta::class, 'user_id', 'id');
    }


    /**
     * Get all of the criticas for the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function criticas()
    {
        return $this->hasMany(Critica::class, 'user_id', 'id');
    }


    /**
     * The deseos that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function listaDeseos()
    {
        return $this->belongsToMany(Libro::class, 'deseos', 'user_id', 'libro_id');
    }


    
    public function isdeseo($libro)
    {

        return $this->listaDeseos->find($libro->id);

    }


}
