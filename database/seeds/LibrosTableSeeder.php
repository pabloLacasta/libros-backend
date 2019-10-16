<?php

use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert([
            'nombre' => 'Lazarillo de Tormes',
            'precio' => 1.3,
            'categoria' => 'bibliográfica' 
        ]);

        DB::table('libros')->insert([
            'nombre' => 'Lazarillo de Ternera',
            'precio' => 4.3,
            'categoria' => 'ciencia ficción' 
        ]);

        DB::table('libros')->insert([
            'nombre' => 'Don Citote',
            'precio' => 1.3,
            'categoria' => 'novela negra' 
        ]);

        DB::table('libros')->insert([
            'nombre' => 'Don quijote',
            'precio' => 1.3,
            'categoria' => 'histórica' 
        ]);
    }
}
