<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    use HasFactory;
    protected $fillable = ['codigo','nombre','descripcion'];
    

    //RELACION MUCHOS A MUCHOS ENTRE LA TABLA CURSO Y RECURSO
    public function cursos() {
  
        return $this->belongsToMany(Curso::class,'curso_recurso');
     }



}
