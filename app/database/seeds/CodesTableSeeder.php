<?php

use Illuminate\Database\Seeder;

class CodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
            'name' => 'Código de Trabajo'
        ]);

        DB::table('codes')->insert([
            'name' => 'Código de Comercio'
        ]);
    }
}
