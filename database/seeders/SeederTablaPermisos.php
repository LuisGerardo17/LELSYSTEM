<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//spatie 
use Spatie\Permission\Models\Permission;
class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
           //tabla roles
           'ver-rol',
           'crear-rol',
           'editar-rol',
           'borrar-rol',
           
           //tabla cursos
           'ver-curso',
           'crear-curso',
           'editar-curso',
           'borrar-curso',
            
            //tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

             
            //tabla actividades
            'ver-actividad',
            'crear-actividad',
            'editar-actividad',
            'borrar-actividad',

             
            //tabla recursos
            'ver-recurso',
            'crear-recurso',
            'editar-recurso',
            'borrar-recurso',

        ];

         foreach($permisos as $permiso){
           Permission::create(['name' => $permiso]);
         }

    }
}
