<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nemesio',
            'email' => 'nemesiete@upac.es',
            'password' => bcrypt('dsfsfaY/&76')
        ]);

        DB::table('users')->insert([
            'name' => 'Angustias',
            'email' => 'angus@upac.es',
            'password' => bcrypt('dsfsfaY/&76')
        ]);

        DB::table('users')->insert([
            'name' => 'Hermenegildo',
            'email' => 'herme@upac.es',
            'password' => bcrypt('dsfsfaY/&76')
        ]);

        DB::table('users')->insert([
            'name' => 'Eutanasia',
            'email' => 'euty55@upac.es',
            'password' => bcrypt('dsfsfaY/&76')
        ]);

        DB::table('users')->insert([
            'name' => 'Maruja',
            'email' => 'rujilla@upac.es',
            'password' =>bcrypt('dsfsfaY/&76')
        ]);

        DB::table('users')->insert([
            'name' => 'Olegario',
            'password' => bcrypt('dsfsfaY/&76')
        ]);
    }
}
