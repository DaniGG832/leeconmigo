<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';

    protected $fillable = [
        'titulo',
        'titulo_original',
        'ISBN10', 'ISBN13',
        'year',
        'n_pag',
        'img',
        'sinopsis',
        'descripcion',
        'editorial_id',
        'ilustrador_id',
        'edad_id',
        'idioma_id',
        'autor_id',
        'encuadernacion_id'
    ];


    /**
     * Get all of the votaciones for the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function votaciones()
    {
        return $this->hasMany(Votacion::class, 'libro_id', 'id');
    }


    /**
     * The temas that belong to the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function temas()
    {
        return $this->belongsToMany(Tema::class, 'libro_tema', 'libro_id', 'tema_id');
    }


    /**
     * Get the ilustrador that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ilustrador()
    {
        return $this->belongsTo(Ilustrador::class, 'ilustrador_id', 'id');
    }

    /**
     * Get the editorial that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function editorial()
    {
        return $this->belongsTo(Editorial::class, 'editorial_id', 'id');
    }


    /**
     * Get the autor that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id', 'id');
    }


    /**
     * Get the edad that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function edad()
    {
        return $this->belongsTo(Edad::class, 'edad_id', 'id');
    }


    /**
     * Get the idioma that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'idioma_id', 'id');
    }

    /**
     * Get the ilustrador that owns the Libro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function encuadernacion()
    {
        return $this->belongsTo(Encuadernacion::class, 'encuadernacion_id', 'id');
    }



    public function voto()
    {

        return $this->votaciones->where('user_id', auth()->id())->first()->voto;
    }

    public function getUserVotoAttribute()
    {

        return $this->votaciones->where('user_id', auth()->id())->first()->voto;
    }


    /* funciones para obtener la nota media */
    public function media()
    {

        return $this->votaciones->avg('voto');
    }


    public function getMediaAttribute()
    {
        return $this->votaciones->avg('voto');
    }

    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeOrdenar($query, $data)
    {
        //dd( isset($data['sortBy'])); 
        if (isset($data['sortBy'])) {

            switch ($data['sortBy']) {
                case 1:
                    /* nota mas alta a mas baja*/
                    $query->orderByDesc('votaciones_avg_voto');
                    //dd($data['sortBy']);
                    break;
                case 2:
                    /* nota mas baja a mas alta */
                    $query->orderBy('votaciones_avg_voto');
                    //dd($data['sortBy']);
                    break;
                case 3:
                    /* mas recientes */
                    $query->orderByDesc('votaciones_count');
                    //dd($data['sortBy']);
                    break;
                case 4:
                    /* mas recientes */
                    $query->orderByDesc('year');
                    //dd($data['sortBy']);
                    break;
                case 5:
                    /* menos recientes */
                    $query->orderBy('year');
                    //dd($data['sortBy']);
                    break;
                case 6:
                    /* titulo descendente ↓ */
                    $query->orderBy('titulo');
                    //dd($data['sortBy']);
                    break;
                case 7:
                    /* titulo ascendente */
                    $query->orderByDesc('titulo');
                    //dd($data['sortBy']);
                    break;
                case 8:
                    /*  muestra de agregados mas recientes a mas antiguo  */
                    $query->orderByDesc('created_at');
                    //dd($data['sortBy']);
                    break;
                default:
            }
        }
    }

    public function scopeBuscar($query, $data){

        
        if (isset($data['search'])) {
            
            //dd($data['search']);

            $query->where('titulo','ILIKE','%'.$data['search'].'%');
        
        }

    }
}
