<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['alumno_id', 'titulo', 'contenido'];

    // Relación muchos a uno: un post pertenece a un alumno
    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
