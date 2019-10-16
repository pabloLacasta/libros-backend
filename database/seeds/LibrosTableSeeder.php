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
            'categoria' => 'autobiografía',
            'editorial_id' => 1 
        ]);

        DB::table('libros')->insert([
            'nombre' => 'Lazarillo de Ternera',
            'precio' => 4.3,
            'categoria' => 'ciencia ficción',
            'editorial_id' => 2 
        ]);

        DB::table('libros')->insert([
            'nombre' => 'Don Ciqote',
            'precio' => 1.3,
            'categoria' => 'novela negra',
            'editorial_id' => 3 
        ]);

        DB::table('libros')->insert([
            'nombre' => 'Don Quijote',
            'precio' => 7.2,
            'categoria' => 'histórica',
            'editorial_id' => 4
        ]);
    }
}
