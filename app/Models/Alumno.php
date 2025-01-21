<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email'];

    // Relación uno a muchos con Nota
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    // Relación N:N con Asignatura
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'notas')
                    ->withPivot('nota') // Incluye la columna "nota" de la tabla intermedia
                    ->withTimestamps(); // Incluye timestamps de la tabla intermedia
    }

    // Relación 1:1 con Perfil
    public function perfil()
    {
        return $this->hasOne(Perfil::class);
    }

    public function posts()
{
    return $this->hasMany(Post::class);
}

}
