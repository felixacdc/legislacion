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
            'description1' => 'Que esas características ideológicas del Derecho de Trabajo y, en consecuencia, también las del Código de Trabajo, por ser éste una concreción de aquél, adaptada a la realidad de Guatemala, se pueden resumir así:<br>
            a)	 El Derecho de Trabajo es un Derecho tutelar de los trabajadores, puesto que trata de compensar la desigualdad económica de éstos, otorgándoles una protección jurídica preferente;<br>
            b)	 El Derecho de Trabajo constituye un mínimum de garantías sociales, protectoras del trabajador, irrenunciables únicamente para éste y llamadas a desarrollarse posteriormente en forma dinámica, en estricta conformidad con las posibilidades de cada empresa patronal, mediante la contratación individual o colectiva y, de manera muy especial, por medio de los pactos colectivos de condiciones de trabajo.',
            'description2' => 'c)	 El Derecho de Trabajo es un Derecho necesario e imperativo, o sea de aplicación forzosa en cuanto a las prestaciones mínimas que conceda la ley, de donde se deduce que esta rama del Derecho limita bastante el principio de la “autonomía de la voluntad”, propio del Derecho común, el cual supone erróneamente que las partes de todo contrato tienen un libre arbitrio absoluto para perfeccionar un convenio, sin que su voluntad esté condicionada por diversos factores y desigualdades de orden económico-social.',
            'description3' => 'd)	 El Derecho de Trabajo es un Derecho realista y objetivo; lo primero, porque estudia al individuo en su realidad social y considera que para resolver un caso determinado a base de una bien entendida equidad, es indispensable enfocar ante todo la posición económica de las partes, y lo segundo, porque su tendencia es la de resolver los diversos problemas que con motivo de su aplicación surjan, con criterio social y a base de hechos concretos y tangibles;<br>
            e)	 El Derecho de Trabajo es una rama del Derecho Público, por lo que al ocurrir su aplicación, el interés privado debe ceder ante el interés social o colectivo; y',
            'description4' => 'f)	 El Derecho de Trabajo es un Derecho hondamente democrático porque se orienta a obtener la dignificación económica y moral de los trabajadores, que constituyen la mayoría de la población, realizando así una mayor armonía social, lo que no perjudica, sino que favorece los intereses justos de los patronos; y porque el Derecho de Trabajo es el antecedente necesario para que impere una efectiva libertad de contratación, que muy pocas veces se ha contemplado en Guatemala, puesto que al limitar la libertad de contratación puramente jurídica que descansa en el falso supuesto de su coincidencia con la libertad económica, impulsa al país fuera de los rumbos legales individualistas, que sólo en teoría postulan la libertad, la igualdad y la fraternidad;',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '4',
            'name' => 'Artículo 4',
            'begin' => 'Representantes del patrono son las personas individuales que ejercen a nombre de éste funciones de dirección o de administración, tales como gerentes, directores, administradores',
            'description1' => 'Representantes del patrono son las personas individuales que ejercen a nombre de éste funciones de dirección o de administración, tales como gerentes, directores, administradores, reclutadores y todas las que estén legítimamente autorizadas por aquél. Los representantes del patrono en sus relaciones con los trabajadores, obligan directamente al patrono. Dichos representantes en sus relaciones con el patrono, salvo el caso de los mandatarios, están ligados con éstepor un contrato o relación de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '5',
            'name' => 'Artículo 5',
            'begin' => 'Intermediario es toda persona que contrata en nombre propio los servicios de uno o más trabajadores para que ejecuten algún trabajo en beneficio de un patrono. Este último queda obligado',
            'description1' => 'Intermediario es toda persona que contrata en nombre propio los servicios de uno o más trabajadores para que ejecuten algún trabajo en beneficio de un patrono. Este último queda obligado solidariamente por la gestión de aquél para con él o los trabajadores, en cuanto se refiere a los efectos legales que se deriven de la Constitución, del presente Código, de sus reglamentos y demás disposiciones aplicables.',
            'description2' => 'No tiene carácter de intermediario y sí de patrono, el que se encargue, por contrato, de trabajos que ejecute con equipos o capitales propios.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '7',
            'name' => 'Artículo 7',
            'begin' => 'Se prohíbe en las zonas de trabajo la venta o introducción de bebidas o drogas embriagantes o estupefacientes, las lides de gallos, los juegos de azar y el ejercicio de la prostitución.',
            'description1' => 'Se prohíbe en las zonas de trabajo la venta o introducción de bebidas o drogas embriagantes o estupefacientes, las lides de gallos, los juegos de azar y el ejercicio de la prostitución. Es entendido que esta prohibición se limita a un radio de tres kilómetros alrededor de cada centro de trabajo establecido fuera de las poblaciones, ya que en cuanto a estas últimas, rigen las disposiciones de las leyes y reglamentos respectivos.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '12',
            'name' => 'Artículo 12',
            'begin' => 'Son nulos ipso jure y no obligan a los contratantes, todos los actos o estipulaciones que impliquen renuncia, disminución o tergiversación de los derechos que la Constitución de la República',
            'description1' => 'Son nulos ipso jure y no obligan a los contratantes, todos los actos o estipulaciones que impliquen renuncia, disminución o tergiversación de los derechos que la Constitución de la República, el presente Código, sus reglamentos y las demás leyes y disposiciones de trabajo o de previsión social otorguen a los trabajadores, aunque se expresen en un reglamento interior de trabajo, un contrato de trabajo u otro pacto o convenio cualquiera.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '15',
            'name' => 'Artículo 15',
            'begin' => 'Los casos no previstos por este Código, por sus reglamentos o por las demás leyes relativas al trabajo, se deben resolver, en primer término, de acuerdo con los principios del Derecho de Trabajo;',
            'description1' => 'Los casos no previstos por este Código, por sus reglamentos o por las demás leyes relativas al trabajo, se deben resolver, en primer término, de acuerdo con los principios del Derecho de Trabajo; en segundo lugar, de acuerdo con la equidad, la costumbre o el uso locales, en armonía con dichos principios; y por último, de acuerdo con los principios y leyes de Derecho Común.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '18',
            'name' => 'Artículo 18',
            'begin' => 'Contrato individual de trabajo, sea cual fuere su denominación, es el vínculo económico-jurídico mediante el que una persona (trabajador), queda obligada a prestar a otra (patrono)',
            'description1' => 'Contrato individual de trabajo, sea cual fuere su denominación, es el vínculo económico-jurídico mediante el que una persona (trabajador), queda obligada a prestar a otra (patrono), sus servicios personales o a ejecutarle una obra, personalmente, bajo la dependencia continuada y dirección inmediata o delegada de esta última, a cambio de una retribución de cualquier clase o forma.',
            'description2' => 'En el caso de los gerentes, directores, administradores, superintendentes, jefes generales de empresa, técnicos y demás trabajadores de categoría análoga a las enumeradas, dicha delegación puede, incluso, recaer en el propio trabajador.',
            'description3' => 'La exclusividad para la prestación de los servicios o ejecución de una obra, no es característica esencial de los contratos de trabajo, salvo el caso de incompatibilidad entre dos o más relaciones laborales, y sólo puede exigirse cuando así se haya convenido expresamente en el acto de la celebración del contrato.',
            'description4' => 'La circunstancia de que el contrato de trabajo se ajustare en un mismo documento con otro contrato de índole diferente o en concurrencia con otro u otros, no le hace perder su naturaleza y por lo tanto a la respectiva relación le son aplicables las disposiciones de este Código.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '19',
            'name' => 'Artículo 19',
            'begin' => 'Para que el contrato individual de trabajo exista y se perfeccione, basta con que se inicie la relación de trabajo, que es el hecho mismo de la prestación de los servicios o de la ejecución de',
            'description1' => 'Para que el contrato individual de trabajo exista y se perfeccione, basta con que se inicie la relación de trabajo, que es el hecho mismo de la prestación de los servicios o de la ejecución de la obra en las condiciones que determina el artículo precedente.',
            'description2' => 'Siempre que se celebre un contrato individual de trabajo y alguna de las partes incumpla sus términos antes que se inicie la relación de trabajo, el caso se debe resolver de acuerdo con los principios civiles que obligan al que ha incumplido a pagar los daños y perjuicios que haya causado a la otra parte, pero el juicio respectivo es de competencia de los tribunales de Trabajo y Previsión Social, los que deben aplicar sus propios procedimientos.',
            'description3' => 'Toda prestación de servicios o ejecución de obra que se realice conforme a las características que especifica el artículo precedente, debe regirse necesariamente en sus diversas fases y consecuencias por las leyes y principios jurídicos relativos al trabajo.',
            'description4' => 'Es entendido que el patrono puede consentir que las leyes y principios de trabajo se apliquen desde la celebración del contrato individual de trabajo, aunque no se haya iniciado la relación de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '20',
            'name' => 'Artículo 20',
            'begin' => 'El contrato individual de trabajo obliga, no sólo a lo que se establece en él, sino:
            a)	 A la observancia de las obligaciones y derechos que este Código o los convenios internacionales',
            'description1' => 'El contrato individual de trabajo obliga, no sólo a lo que se establece en él, sino:
            a)	 A la observancia de las obligaciones y derechos que este Código o los convenios internacionales ratificados por Guatemala, determinen para las partes de la relación laboral, siempre, respecto a estos últimos, cuando consignen beneficios superiores para los trabajadores que los que este Código crea; y
            b)	 A las consecuencias que del propio contrato se deriven según la buena fe, la equidad, el uso y costumbres locales o la ley.',
            'description2' => 'Las condiciones de trabajo que rijan un contrato o relación laboral, no pueden alterarse fundamental o permanentemente, salvo que haya acuerdo expreso entre las partes o que así lo autorice el Ministerio de Trabajo y Previsión Social, cuando lo justifique plenamente la situación económica de la empresa. Dicha prohibición debe entenderse únicamente en cuanto a las relaciones de trabajo que, en todo o en parte, tengan condiciones superiores al mínimum de protección que este Código otorga a los trabajadores.',
            'description3' => 'Son condiciones o elementos de la prestación de los servicios o ejecución de una obra: la materia u objeto; la forma o modo de su desempeño; el tiempo de su realización; el lugar de ejecución y las retribuciones a que esté obligado el patrono.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '22',
            'name' => 'Artículo 22',
            'begin' => 'En todo contrato individual de trabajo deben entenderse incluidos por lo menos, las garantías y derechos que otorguen a los trabajadores la Constitución, el presente Código, sus reglamentos y las',
            'description1' => 'En todo contrato individual de trabajo deben entenderse incluidos por lo menos, las garantías y derechos que otorguen a los trabajadores la Constitución, el presente Código, sus reglamentos y las demás leyes de trabajo o de previsión social.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '23',
            'name' => 'Artículo 23',
            'begin' => 'La sustitución del patrono no afecta los contratos de trabajo existentes, en perjuicio del trabajador. El patrono sustituido queda solidariamente obligado con el nuevo patrono por las',
            'description1' => 'La sustitución del patrono no afecta los contratos de trabajo existentes, en perjuicio del trabajador. El patrono sustituido queda solidariamente obligado con el nuevo patrono por las obligaciones derivadas de los contratos o de las disposiciones legales, nacidas antes de la fecha de la sustitución y hasta por el término de seis meses. Concluido este plazo, la responsabilidad subsiste únicamente para el nuevo patrono. Por las acciones originadas de hechos u omisiones del nuevo patrono no responde, en ningún caso, el patrono sustituido.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '25',
            'name' => 'Artículo 25',
            'begin' => 'El contrato individual de trabajo puede ser:
            a)	 Por tiempo indefinido, cuando no se especifica fecha para su terminación;
            b)	 A plazo fijo, cuando se especifica fecha para su terminación o cuando se ha',
            'description1' => 'El contrato individual de trabajo puede ser:
            a)	 Por tiempo indefinido, cuando no se especifica fecha para su terminación;
            b)	 A plazo fijo, cuando se especifica fecha para su terminación o cuando se ha previsto el acaecimiento de algún hecho o circunstancia, como la conclusión de una obra, que forzosamente ha de poner término a la relación de trabajo. En este segundo caso, se debe tomar en cuenta la actividad del trabajador en sí mismo como objeto del contrato, y no el resultado de la obra; y',
            'description2' => 'c)	 Para obra determinada, cuando se ajusta globalmente o en forma alzada el precio de los servicios del trabajador desde que se inician las labores hasta que éstas concluyan, tomando en cuenta el resultado del trabajo, o sea, la obra realizada.
            Aunque el trabajador reciba anticipos a buena cuenta de los trabajos ejecutados o por ejecutarse, el contrato individual de trabajo debe entenderse para obra determinada, siempre que se reúnan las condiciones que indica el párrafo anterior.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '26',
            'name' => 'Artículo 26',
            'begin' => 'Todo contrato individual de trabajo debe tenerse por celebrado por tiempo indefinido, salvo prueba o estipulación lícita y expresa en contrario.',
            'description1' => 'Todo contrato individual de trabajo debe tenerse por celebrado por tiempo indefinido, salvo prueba o estipulación lícita y expresa en contrario.
            Deben tenerse siempre como contratos a plazo indefinido, aunque se hayan ajustado a plazo fijo o para obra determinada, los que se celebren en una empresa cuyas actividades sean de naturaleza permanente o continuada, si al vencimiento de dichos contratos subsiste la causa que les dio origen.',
            'description2' => 'En consecuencia, los contratos a plazo fijo y para obra determinada tienen carácter de excepción y sólo pueden celebrarse en los casos que así lo exija la naturaleza accidental o temporal del servicio que se va a prestar o de la obra que se va a ejecutar.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '27',
            'name' => 'Artículo 27',
            'begin' => 'El contrato individual de trabajo puede ser verbal cuando se refiera:
            a)	 A las labores agrícolas o ganaderas;
            b)	 Al servicio doméstico;',
            'description1' => 'El contrato individual de trabajo puede ser verbal cuando se refiera:
            a)	 A las labores agrícolas o ganaderas;
            b)	 Al servicio doméstico;
            c)	 A los trabajos accidentales o temporales que no excedan de sesenta días; y
            d)	 A la prestación de un trabajo para obra determinada, siempre que el valor de ésta no exceda de cien quetzales, y, si se hubiere señalado plazo para la entrega, siempre que éste no sea mayor de sesenta días.',
            'description2' => 'En todos estos casos el patrono queda obligado a suministrar al trabajador, en el momento en que se celebre el contrato, una tarjeta o constancia que únicamente debe contener la fecha de iniciación de la relación de trabajo y el salario estipulado y, al vencimiento de cada período de pago, el número de días o jornadas trabajadas, o el de tareas u obras realizadas.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '28',
            'name' => 'Artículo 28',
            'begin' => 'En los demás casos, el contrato individual de trabajo debe extenderse por escrito, en tres ejemplares: uno que debe recoger cada parte en el acto de celebrarse y otro que el patrono queda',
            'description1' => 'En los demás casos, el contrato individual de trabajo debe extenderse por escrito, en tres ejemplares: uno que debe recoger cada parte en el acto de celebrarse y otro que el patrono queda obligado a hacer llegar al <strong>*Departamento Administrativo de Trabajo</strong>, directamente o por medio de la autoridad de trabajo más cercana, dentro de los quince días posteriores a su celebración, modificación o novación.
            <strong>*(Dirección General de Trabajo, según Decreto 15-70 del Congreso de la República).</strong>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '29',
            'name' => 'Artículo 29',
            'begin' => 'El contrato escrito de trabajo debe contener:
            a)	 Los nombres, apellidos, edad, sexo, estado civil, nacionalidad y vecindad de los contratantes;
            b)	 La fecha de la iniciación de la relación de trabajo;',
            'description1' => 'El contrato escrito de trabajo debe contener:
            a)	 Los nombres, apellidos, edad, sexo, estado civil, nacionalidad y vecindad de los contratantes;
            b)	 La fecha de la iniciación de la relación de trabajo;
            c)	 La indicación de los servicios que el trabajador se obliga a prestar, o la naturaleza de la obra a ejecutar, especificando en lo posible las características y las condiciones del trabajo;
            d) 	El lugar o los lugares donde deben prestarse los servicios o ejecutarse la obra;
            e)	 La designación precisa del lugar donde viva el trabajador cuando se le contrata para prestar sus servicios o ejecutar una obra en lugar distinto de aquel donde viva habitualmente;
            f)	 La duración del contrato o la expresión de ser por tiempo indefinido o para la ejecución de obra determinada;
            g)	 El tiempo de la jornada de trabajo y las horas en que debe prestarse;',
            'description3' => 'h)	 El salario, beneficio, comisión o participación que debe recibir el trabajador; si se debe calcular por unidad de tiempo, por unidad de obra o de alguna otra manera, y la forma, período y lugar de pago; En los casos en que se estipule que el salario se ha de pagar por unidad de obra, se debe hacer constar la cantidad y calidad de material, las herramientas y útiles que el patrono convenga en proporcionar y el estado de conservación de los mismos, así como el tiempo que el trabajador pueda tenerlos a su disposición. El patrono no puede exigir del trabajador cantidad alguna por concepto de desgaste normal o destrucción accidental de las herramientas, como consecuencia de su uso en el trabajo;
            i)	 Las demás estipulaciones legales en que convengan las partes;
            j) 	 El lugar y la fecha de celebración del contrato; y
            k) 	Las firmas de los contratantes o la impresión digital de los que no sepan o no puedan firmar, y el número de sus cédulas de vecindad.
            El Ministerio de Trabajo y Previsión Social debe imprimir modelos de contratos para cada una de las categorías de trabajo, a fin de facilitar el cumplimiento de esta disposición.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '30',
            'name' => 'Artículo 30',
            'begin' => 'La prueba plena del contrato escrito sólo puede hacerse con el documento respectivo. La falta de éste o la omisión de alguno de sus requisitos se debe imputar siempre al patrono',
            'description1' => 'La prueba plena del contrato escrito sólo puede hacerse con el documento respectivo. La falta de éste o la omisión de alguno de sus requisitos se debe imputar siempre al patrono y si a requerimiento de las autoridades de trabajo no lo exhibe, deben presumirse, salvo prueba en contrario, ciertas las estipulaciones de trabajo afirmadas por el trabajador.
            El contrato verbal se puede probar por los medios generales de prueba y, al efecto, pueden ser testigos los trabajadores al servicio de un mismo patrono.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '31',
            'name' => 'Artículo 31',
            'begin' => 'Tienen también capacidad para contratar su trabajo, para percibir y disponer de la retribución convenida y, en general, para ejercer los derechos y acciones que se deriven del presente',
            'description1' => 'Tienen también capacidad para contratar su trabajo, para percibir y disponer de la retribución convenida y, en general, para ejercer los derechos y acciones que se deriven del presente Código, de sus reglamentos y de las leyes de previsión social, los menores de edad, de uno u otro sexo, que tengan catorce años o más y los insolventes y fallidos.',
            'description2' => 'Las capacidades específicas a que alude el párrafo anterior, lo son sólo para los efectos de trabajo, y en consecuencia, no afectan en lo demás el estado de minoridad o, en su caso, el de incapacidad por insolvencia o quiebra.
            La interdicción judicial declarada del patrono no invalida los actos o contratos que haya celebrado el ejecutado con sus trabajadores anteriormente a dicha declaratoria.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '32',
            'name' => 'Artículo 32',
            'begin' => 'Los contratos relativos al trabajo de los jóvenes que tengan menos de catorce años, deben celebrarse con los representantes legales de éstos y, en su defecto, se necesita la autorización',
            'description1' => 'Los contratos relativos al trabajo de los jóvenes que tengan menos de catorce años, deben celebrarse con los representantes legales de éstos y, en su defecto, se necesita la autorización de la Inspección General de Trabajo.
            El producto del trabajo de los menores a que se refiere el párrafo anterior lo deben percibir sus representantes legales o la persona que tenga a su cargo el cuidado de ellos, según la determinación que debe hacer la Inspección General de Trabajo en las autorizaciones a que alude este artículo.',
            'code_id' => 1
        ]);

    }
}
