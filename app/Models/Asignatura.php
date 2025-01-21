<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    // Relación uno a muchos con Nota
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    // Relación N:N con Alumno
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'notas')
                    ->withPivot('nota') // Incluye la columna "nota" de la tabla intermedia
                    ->withTimestamps(); // Incluye timestamps de la tabla intermedia
    }
}
