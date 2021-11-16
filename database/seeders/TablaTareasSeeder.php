<?php

namespace Database\Seeders;

use App\Models\Tarea;
use Illuminate\Database\Seeder;

class TablaTareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarea::insert([
            'nombre' => 'ajax'
        ]);
        Tarea::insert([
            'nombre' => 'laravel task'
        ]);
        Tarea::insert([
            'nombre' => 'despliegue dns'
        ]);
        Tarea::factory(5)->create();
    }
}
