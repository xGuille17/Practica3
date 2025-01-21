<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = ['alumno_id', 'biografia'];

    // Relación inversa: un perfil pertenece a un alumno
    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
