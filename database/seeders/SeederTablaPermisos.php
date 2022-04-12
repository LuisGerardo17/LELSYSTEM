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
            'crear-curso',
            'editar-curso',
            'borrar-curso',

        ];



    }
}
