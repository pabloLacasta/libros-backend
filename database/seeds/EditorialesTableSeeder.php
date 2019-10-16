<?php

use Illuminate\Database\Seeder;

class EditorialesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editoriales')->insert([
            'nombre' => 'Bromera'
        ]);

        DB::table('editoriales')->insert([
            'nombre' => 'Bromura'
        ]);

        DB::table('editoriales')->insert([
            'nombre' => 'Bromera de Sodio'
        ]);

        DB::table('editoriales')->insert([
            'nombre' => 'Broma'
        ]);
    }
}
