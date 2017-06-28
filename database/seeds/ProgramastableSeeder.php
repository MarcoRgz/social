<?php

use Illuminate\Database\Seeder;

class ProgramastableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('programas')->insert([
        'nombre' => 'CTA',
        'horario'=> '8-1' ]);

      DB::table('programas')->insert([
        'nombre' => 'Finanzas',
        'horario'=> '10-1' ]);

      DB::table('programas')->insert([
        'nombre' => 'Biblioteca',
        'horario'=> '7-3' ]);
    }
}
