<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'number' => '',
            'name' => 'Considerando',
'description' => 'a) El Derecho de Trabajo es un Derecho tutelar de los trabajadores, puesto que trata de compensar la desigualdad económica de éstos, otorgándoles una protección jurídica preferente;
b-1) un mínimum de garantías sociales
b-2) irrenunciables únicamente para éste y llamadas a desarrollarse posteriormente en forma dinámica
b-3) de manera muy especial, por medio de los pactos colectivos de condiciones de trabajo.
c)	 El Derecho de Trabajo es un Derecho necesario e imperativo
d) El Derecho de Trabajo es un Derecho realista y objetivo; lo primero, porque estudia al individuo en su realidad social y considera que para resolver un caso determinado a base de una bien entendida equidad, es indispensable enfocar ante todo la posición económica de las partes, y lo segundo, porque su tendencia es la de resolver los diversos problemas que con motivo de su aplicación surjan, con criterio social y a base de hechos concretos y tangibles;
e) El Derecho de Trabajo es una rama del Derecho Público, por lo que al ocurrir su aplicación, el interés privado debe ceder ante el interés social o colectivo; y
f) es un Derecho hondamente democrático porque se orienta a obtener la dignificación económica y moral de los
trabajadores, que constituyen la mayoría de la población, realizando así una mayor armonía social, lo que no perjudica, sino que favorece los intereses justos de los patronos',
            'code_id' => 1
        ]);
    }
}
