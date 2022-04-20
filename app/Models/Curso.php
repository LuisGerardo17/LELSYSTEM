<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use  HasFactory;

    protected $fillable = ['codigo','nombre','descripcion'];
   
    public function actividades() {
  
         return $this->belongsToMany(Actividad::class,'curso_actividad');

   }

   public function recursos() {
  
    return $this->belongsToMany(Recurso::class,'curso_recurso');

}



}
