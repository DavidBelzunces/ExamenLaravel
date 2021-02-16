<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class AlumnosSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'nombre' => 'Arnau',
            'apellidos' => 'Bisquerra',
            'dni' => '12345'
        ]);
    }
}
