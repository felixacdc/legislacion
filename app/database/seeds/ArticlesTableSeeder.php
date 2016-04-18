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
            'description1' => 'Que esas características ideológicas del Derecho de Trabajo y, en consecuencia, también las del Código de Trabajo, por ser éste una concreción de aquél, adaptada a la realidad de Guatemala, se pueden resumir así:',
            'description2' => 'a)	 El Derecho de Trabajo es un Derecho tutelar de los trabajadores, puesto que trata de compensar la desigualdad económica de éstos, otorgándoles una protección jurídica preferente;',
            'description3' => 'b)	 El Derecho de Trabajo constituye un mínimum de garantías sociales, protectoras del trabajador, irrenunciables únicamente para éste y llamadas a desarrollarse posteriormente en forma dinámica, en
            estricta conformidad con las posibilidades de cada empresa patronal, mediante la contratación individual o colectiva y, de manera muy especial, por medio de los pactos colectivos de condiciones de trabajo.',
            'description4' => 'c)	 El Derecho de Trabajo es un Derecho necesario e imperativo, o sea de aplicación forzosa en cuanto a las prestaciones mínimas que conceda la ley, de donde se deduce que esta rama del Derecho limita bastante el principio de la “autonomía de la voluntad”, propio del Derecho común, el cual supone erróneamente que las partes de todo contrato tienen un libre arbitrio absoluto para perfeccionar un convenio, sin que su voluntad esté condicionada por diversos factores y desigualdades de orden económico-social.',
            'description5' => 'd)	 El Derecho de Trabajo es un Derecho realista y objetivo; lo primero, porque estudia al individuo en su realidad social y considera que para resolver un caso determinado a base de una bien entendida equidad, es indispensable enfocar ante todo la posición económica de las partes, y lo segundo, porque su tendencia es la de resolver los diversos problemas que con motivo de su aplicación surjan, con criterio social y a base de hechos concretos y tangibles;',
            'description6' => 'e)	 El Derecho de Trabajo es una rama del Derecho Público, por lo que al ocurrir su aplicación, el interés privado debe ceder ante el interés social o colectivo; y',
            'description7' => 'f)	 El Derecho de Trabajo es un Derecho hondamente democrático porque se orienta a obtener la dignificación económica y moral de los trabajadores, que constituyen la mayoría de la población, realizando así una mayor armonía social, lo que no perjudica, sino que favorece los intereses justos de los patronos; y porque el Derecho de Trabajo es el antecedente necesario para que impere una efectiva libertad de contratación, que muy pocas veces se ha contemplado en Guatemala, puesto que al limitar la libertad de contratación puramente jurídica que descansa en el falso supuesto de su coincidencia con la libertad económica, impulsa al país fuera de los rumbos legales individualistas, que sólo en teoría postulan la libertad, la igualdad y la fraternidad;',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '4',
            'name' => 'Articulo',
            'description1' => 'Representantes del patrono son las personas individuales que ejercen a nombre de éste funciones de dirección o de administración, tales como gerentes, directores, administradores, reclutadores y todas las que estén legítimamente autorizadas por aquél. Los representantes del patrono en sus relaciones con los trabajadores, obligan directamente al patrono. Dichos representantes en sus relaciones con el patrono, salvo el caso de los mandatarios, están ligados con éstepor un contrato o relación de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '5',
            'name' => 'Articulo',
            'description1' => 'Intermediario es toda persona que contrata en nombre propio los servicios de uno o más trabajadores para que ejecuten algún trabajo en beneficio de un patrono. Este último queda obligado solidariamente por la gestión de aquél para con él o los trabajadores, en cuanto se refiere a los efectos legales que se deriven de la Constitución, del presente Código, de sus reglamentos y demás disposiciones aplicables.',
            'description2' => 'No tiene carácter de intermediario y sí de patrono, el que se encargue, por contrato, de trabajos que ejecute con equipos o capitales propios.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '7',
            'name' => 'Articulo',
            'description1' => 'Se prohíbe en las zonas de trabajo la venta o introducción de bebidas o drogas embriagantes o estupefacientes, las lides de gallos, los juegos de azar y el ejercicio de la prostitución. Es entendido que esta prohibición se limita a un radio de tres kilómetros alrededor de cada centro de trabajo establecido fuera de las poblaciones, ya que en cuanto a estas últimas, rigen las disposiciones de las leyes y reglamentos respectivos.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '12',
            'name' => 'Articulo',
            'description1' => 'Son nulos ipso jure y no obligan a los contratantes, todos los actos o estipulaciones que impliquen renuncia, disminución o tergiversación de los derechos que la Constitución de la República, el presente Código, sus reglamentos y las demás leyes y disposiciones de trabajo o de previsión social otorguen a los trabajadores, aunque se expresen en un reglamento interior de trabajo, un contrato de trabajo u otro pacto o convenio cualquiera.',
            'code_id' => 1
        ]);
    }
}
