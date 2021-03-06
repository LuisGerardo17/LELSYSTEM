<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = ['codigo','nombre','descripcion'];

    public function cursos() {
  
        return $this->belongsToMany(Curso::class,'curso_actividad');
     }



}