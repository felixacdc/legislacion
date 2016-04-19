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
            'begin' => 'Que esas características ideológicas del Derecho de Trabajo y, en consecuencia, también las del Código de Trabajo, por ser éste ',
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
            'name' => 'Articulo 4',
            'begin' => 'Representantes del patrono son las personas individuales que ejercen a nombre de éste funciones de dirección o de administración, tales como gerentes, directores, administradores',
            'description1' => 'Representantes del patrono son las personas individuales que ejercen a nombre de éste funciones de dirección o de administración, tales como gerentes, directores, administradores, reclutadores y todas las que estén legítimamente autorizadas por aquél. Los representantes del patrono en sus relaciones con los trabajadores, obligan directamente al patrono. Dichos representantes en sus relaciones con el patrono, salvo el caso de los mandatarios, están ligados con éstepor un contrato o relación de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '5',
            'name' => 'Articulo 5',
            'begin' => 'Intermediario es toda persona que contrata en nombre propio los servicios de uno o más trabajadores para que ejecuten algún trabajo en beneficio de un patrono. Este último queda obligado',
            'description1' => 'Intermediario es toda persona que contrata en nombre propio los servicios de uno o más trabajadores para que ejecuten algún trabajo en beneficio de un patrono. Este último queda obligado solidariamente por la gestión de aquél para con él o los trabajadores, en cuanto se refiere a los efectos legales que se deriven de la Constitución, del presente Código, de sus reglamentos y demás disposiciones aplicables.',
            'description2' => 'No tiene carácter de intermediario y sí de patrono, el que se encargue, por contrato, de trabajos que ejecute con equipos o capitales propios.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '7',
            'name' => 'Articulo 7',
            'begin' => 'Se prohíbe en las zonas de trabajo la venta o introducción de bebidas o drogas embriagantes o estupefacientes, las lides de gallos, los juegos de azar y el ejercicio de la prostitución.',
            'description1' => 'Se prohíbe en las zonas de trabajo la venta o introducción de bebidas o drogas embriagantes o estupefacientes, las lides de gallos, los juegos de azar y el ejercicio de la prostitución. Es entendido que esta prohibición se limita a un radio de tres kilómetros alrededor de cada centro de trabajo establecido fuera de las poblaciones, ya que en cuanto a estas últimas, rigen las disposiciones de las leyes y reglamentos respectivos.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '12',
            'name' => 'Articulo 12',
            'begin' => 'Son nulos ipso jure y no obligan a los contratantes, todos los actos o estipulaciones que impliquen renuncia, disminución o tergiversación de los derechos que la Constitución de la República',
            'description1' => 'Son nulos ipso jure y no obligan a los contratantes, todos los actos o estipulaciones que impliquen renuncia, disminución o tergiversación de los derechos que la Constitución de la República, el presente Código, sus reglamentos y las demás leyes y disposiciones de trabajo o de previsión social otorguen a los trabajadores, aunque se expresen en un reglamento interior de trabajo, un contrato de trabajo u otro pacto o convenio cualquiera.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '15',
            'name' => 'Articulo 15',
            'begin' => 'Los casos no previstos por este Código, por sus reglamentos o por las demás leyes relativas al trabajo, se deben resolver, en primer término, de acuerdo con los principios del Derecho de Trabajo;',
            'description1' => 'Los casos no previstos por este Código, por sus reglamentos o por las demás leyes relativas al trabajo, se deben resolver, en primer término, de acuerdo con los principios del Derecho de Trabajo; en segundo lugar, de acuerdo con la equidad, la costumbre o el uso locales, en armonía con dichos principios; y por último, de acuerdo con los principios y leyes de Derecho Común.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '18',
            'name' => 'Articulo 18',
            'begin' => 'Contrato individual de trabajo, sea cual fuere su denominación, es el vínculo económico-jurídico mediante el que una persona (trabajador), queda obligada a prestar a otra (patrono)',
            'description1' => 'Contrato individual de trabajo, sea cual fuere su denominación, es el vínculo económico-jurídico mediante el que una persona (trabajador), queda obligada a prestar a otra (patrono), sus servicios personales o a ejecutarle una obra, personalmente, bajo la dependencia continuada y dirección inmediata o delegada de esta última, a cambio de una retribución de cualquier clase o forma.',
            'description2' => 'En el caso de los gerentes, directores, administradores, superintendentes, jefes generales de empresa, técnicos y demás trabajadores de categoría análoga a las enumeradas, dicha delegación puede, incluso, recaer en el propio trabajador.',
            'description3' => 'La exclusividad para la prestación de los servicios o ejecución de una obra, no es característica esencial de los contratos de trabajo, salvo el caso de incompatibilidad entre dos o más relaciones laborales, y sólo puede exigirse cuando así se haya convenido expresamente en el acto de la celebración del contrato.',
            'description4' => 'La circunstancia de que el contrato de trabajo se ajustare en un mismo documento con otro contrato de índole diferente o en concurrencia con otro u otros, no le hace perder su naturaleza y por lo tanto a la respectiva relación le son aplicables las disposiciones de este Código.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '19',
            'name' => 'Articulo 19',
            'begin' => 'Para que el contrato individual de trabajo exista y se perfeccione, basta con que se inicie la relación de trabajo, que es el hecho mismo de la prestación de los servicios o de la ejecución de',
            'description1' => 'Para que el contrato individual de trabajo exista y se perfeccione, basta con que se inicie la relación de trabajo, que es el hecho mismo de la prestación de los servicios o de la ejecución de la obra en las condiciones que determina el artículo precedente.',
            'description2' => 'Siempre que se celebre un contrato individual de trabajo y alguna de las partes incumpla sus términos antes que se inicie la relación de trabajo, el caso se debe resolver de acuerdo con los principios civiles que obligan al que ha incumplido a pagar los daños y perjuicios que haya causado a la otra parte, pero el juicio respectivo es de competencia de los tribunales de Trabajo y Previsión Social, los que deben aplicar sus propios procedimientos.',
            'description3' => 'Toda prestación de servicios o ejecución de obra que se realice conforme a las características que especifica el artículo precedente, debe regirse necesariamente en sus diversas fases y consecuencias por las leyes y principios jurídicos relativos al trabajo.',
            'description4' => 'Es entendido que el patrono puede consentir que las leyes y principios de trabajo se apliquen desde la celebración del contrato individual de trabajo, aunque no se haya iniciado la relación de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '20',
            'name' => 'Articulo 20',
            'begin' => 'El contrato individual de trabajo obliga, no sólo a lo que se establece en él, sino:
            a)	 A la observancia de las obligaciones y derechos que este Código o los convenios internacionales',
            'description1' => 'El contrato individual de trabajo obliga, no sólo a lo que se establece en él, sino:
            a)	 A la observancia de las obligaciones y derechos que este Código o los convenios internacionales ratificados por Guatemala, determinen para las partes de la relación laboral, siempre, respecto a estos últimos, cuando consignen beneficios superiores para los trabajadores que los que este Código crea; y
            b)	 A las consecuencias que del propio contrato se deriven según la buena fe, la equidad, el uso y costumbres locales o la ley.',
            'description2' => 'Las condiciones de trabajo que rijan un contrato o relación laboral, no pueden alterarse fundamental o permanentemente, salvo que haya acuerdo expreso entre las partes o que así lo autorice el Ministerio de Trabajo y Previsión Social, cuando lo justifique plenamente la situación económica de la empresa. Dicha prohibición debe entenderse únicamente en cuanto a las relaciones de trabajo que, en todo o en parte, tengan condiciones superiores al mínimum de protección que este Código otorga a los trabajadores.',
            'description3' => 'Son condiciones o elementos de la prestación de los servicios o ejecución de una obra: la materia u objeto; la forma o modo de su desempeño; el tiempo de su realización; el lugar de ejecución y las retribuciones a que esté obligado el patrono.',
            'code_id' => 1
        ]);


    }
}
