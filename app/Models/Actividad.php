<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class);
    }
}
