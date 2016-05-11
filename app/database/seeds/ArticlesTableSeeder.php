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
            <span class="opNum">1.</span> <span>a) El Derecho de Trabajo es un Derecho tutelar de los trabajadores, puesto que trata de compensar la desigualdad económica de éstos, otorgándoles una protección jurídica preferente;</span><br>
            b)	 El Derecho de Trabajo constituye <span class="opNum">2.</span> <span>un mínimum de garantías sociales</span>, protectoras del trabajador, <br> <span class="opNum">3.</span> <span>irrenunciables únicamente para éste y llamadas a desarrollarse posteriormente</span> en forma dinámica, en estricta conformidad con las posibilidades de cada empresa patronal, mediante la contratación individual o colectiva y, <br> <span class="opNum">4.</span> <span>de manera muy especial, por medio de los pactos colectivos de condiciones de trabajo.</span>',
            'description2' => '<span class="opNum">5.</span> <span>c)	 El Derecho de Trabajo es un Derecho necesario e imperativo</span>, o sea de aplicación forzosa en cuanto a las prestaciones mínimas que conceda la ley, de donde se deduce que esta rama del Derecho limita bastante el principio de la “autonomía de la voluntad”, propio del Derecho común, el cual supone erróneamente que las partes de todo contrato tienen un libre arbitrio absoluto para perfeccionar un convenio, sin que su voluntad esté condicionada por diversos factores y desigualdades de orden económico-social.',
            'description3' => '<span class="opNum">7.</span> <span>d)	 El Derecho de Trabajo es un Derecho realista y objetivo; lo primero, porque estudia al individuo en su realidad social y considera que para resolver un caso determinado a base de una bien entendida equidad, es indispensable enfocar ante todo la posición económica de las partes</span>, y lo segundo,<span class="opNum">8.</span> <span> porque su tendencia es la de resolver los diversos problemas que con motivo de su aplicación surjan, con criterio social y a base de hechos concretos y tangibles;</span><br>
            <span class="opNum">9.</span> <span>e)	 El Derecho de Trabajo es una rama del Derecho Público</span>, por lo que al ocurrir su aplicación, el interés privado debe ceder ante el interés social o colectivo; y',
            'description4' => '<span class="opNum">10.</span> <span>f)	 El Derecho de Trabajo es un Derecho hondamente democrático porque se orienta a obtener la dignificación económica y moral de los trabajadores, que constituyen la mayoría de la población, realizando así una mayor armonía social, lo que no perjudica, sino que favorece los intereses justos de los patronos;</span> y porque el Derecho de Trabajo es el antecedente necesario para que impere una efectiva libertad de contratación, que muy pocas veces se ha contemplado en Guatemala, puesto que al limitar la libertad de contratación puramente jurídica que descansa en el falso supuesto de su coincidencia con la libertad económica, impulsa al país fuera de los rumbos legales individualistas, que sólo en teoría postulan la libertad, la igualdad y la fraternidad;',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '4',
            'name' => 'Artículo 4',
            'begin' => 'Representantes del patrono son las personas individuales que ejercen a nombre de éste funciones de dirección o de administración, tales como gerentes, directores, administradores',
            'description1' => '<span class="opNum">1.</span> <span>Representantes del patrono son las personas individuales que ejercen a nombre de éste funciones de dirección o de administración, tales como gerentes, directores, administradores, reclutadores y todas las que estén legítimamente autorizadas por aquél.</span> <span class="opNum">2.</span> <span>Los representantes del patrono en sus relaciones con los trabajadores, obligan directamente al patrono. Dichos representantes en sus relaciones con el patrono, salvo el caso de los mandatarios, están ligados con éstepor un contrato o relación de trabajo.</span>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '5',
            'name' => 'Artículo 5',
            'begin' => 'Intermediario es toda persona que contrata en nombre propio los servicios de uno o más trabajadores para que ejecuten algún trabajo en beneficio de un patrono. Este último queda obligado',
            'description1' => '<span class="opNum">1.</span> <span>Intermediario es toda persona que contrata en nombre propio los servicios de uno o más trabajadores para que ejecuten algún trabajo en beneficio de un patrono.</span> Este último queda obligado solidariamente por la gestión de aquél para con él o los trabajadores, en cuanto se refiere a los efectos legales que se deriven de la Constitución, del presente Código, de sus reglamentos y demás disposiciones aplicables.',
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
            'description1' => 'Los casos no previstos por este Código, por sus reglamentos o por las demás leyes relativas al trabajo, se deben resolver, en primer término, <span class="opNum">1.</span> <span>de acuerdo con los principios del Derecho de Trabajo; en segundo lugar, de acuerdo con la equidad, la costumbre o el uso locales, en armonía con dichos principios; y por último, de acuerdo con los principios y leyes de Derecho Común.</span>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '17',
            'name' => 'Artículo 17',
            'begin' => 'Para los efectos de interpretar el presente Código, sus reglamentos y demás leyes de trabajo, se debe tomar en cuenta, fundamentalmente, el interés de los trabajadores',
            'description1' => '<span class="opNum">1.</span> <span>Para los efectos de interpretar el presente Código, sus reglamentos y demás leyes de trabajo, se debe tomar en cuenta, fundamentalmente, el interés de los trabajadores en armonía con la conveniencia social.</span>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '18',
            'name' => 'Artículo 18',
            'begin' => 'Contrato individual de trabajo, sea cual fuere su denominación, es el vínculo económico-jurídico mediante el que una persona (trabajador), queda obligada a prestar a otra (patrono)',
            'description1' => 'Contrato individual de trabajo, sea cual fuere su denominación, <span class="opNum">1.</span> <span>es el vínculo económico-jurídico mediante el que una persona (trabajador), queda obligada a prestar a otra (patrono), sus servicios personales o a ejecutarle una obra, personalmente, bajo la dependencia continuada y dirección inmediata o delegada de esta última, a cambio de una retribución de cualquier clase o forma.</span>',
            'description2' => 'En el caso de los gerentes, directores, administradores, superintendentes, jefes generales de empresa, técnicos y demás trabajadores de categoría análoga a las enumeradas, dicha delegación puede, incluso, recaer en el propio trabajador.',
            'description3' => 'La exclusividad para la prestación de los servicios o ejecución de una obra, no es característica esencial de los contratos de trabajo, salvo el caso de incompatibilidad entre dos o más relaciones laborales, y sólo puede exigirse cuando así se haya convenido expresamente en el acto de la celebración del contrato.',
            'description4' => 'La circunstancia de que el contrato de trabajo se ajustare en un mismo documento con otro contrato de índole diferente o en concurrencia con otro u otros, no le hace perder su naturaleza y por lo tanto a la respectiva relación le son aplicables las disposiciones de este Código.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '19',
            'name' => 'Artículo 19',
            'begin' => 'Para que el contrato individual de trabajo exista y se perfeccione, basta con que se inicie la relación de trabajo, que es el hecho mismo de la prestación de los servicios o de la ejecución de',
            'description1' => 'Para que el contrato individual de trabajo exista y se perfeccione, <span class="opNum">1.</span> <span>basta con que se inicie la relación de trabajo</span>, que <span class="opNum">2.</span> <span>es el hecho mismo de la prestación de los servicios o de la ejecución de la obra en las condiciones que determina el artículo precedente.</span>',
            'description2' => 'Siempre que se celebre un contrato individual de trabajo y alguna de las partes incumpla sus términos antes que se inicie la relación de trabajo, el caso se debe resolver de acuerdo con los principios civiles que obligan al que ha incumplido a pagar los daños y perjuicios que haya causado a la otra parte, pero el juicio respectivo es de competencia de los tribunales de Trabajo y Previsión Social, los que deben aplicar sus propios procedimientos.',
            'description3' => 'Toda prestación de servicios o ejecución de obra que se realice conforme a las características que especifica el artículo precedente, debe regirse necesariamente en sus diversas fases y consecuencias por las leyes y principios jurídicos relativos al trabajo.',
            'description4' => 'Es entendido que el patrono puede consentir que las leyes y principios de trabajo se apliquen desde la celebración del contrato individual de trabajo, aunque no se haya iniciado la relación de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '20',
            'name' => 'Artículo 20',
            'begin' => 'El contrato individual de trabajo obliga, no sólo a lo que se establece en él, sino:
            a)A la observancia de las obligaciones y derechos que este Código o los convenios internacionales',
            'description1' => 'El contrato individual de trabajo obliga, no sólo a lo que se establece en él, sino:<br>
            <span class="opNum">1.</span> <span>a)A la observancia de las obligaciones y derechos que este Código o los convenios internacionales ratificados por Guatemala, determinen para las partes de la relación laboral, siempre, respecto a estos últimos, cuando consignen beneficios superiores para los trabajadores que los que este Código crea; y<br>
            b)A las consecuencias que del propio contrato se deriven según la buena fe, la equidad, el uso y costumbres locales o la ley.</span>',
            'description2' => 'Las condiciones de trabajo que rijan un contrato o relación laboral, no pueden alterarse fundamental o permanentemente, salvo que haya acuerdo expreso entre las partes o que así lo autorice el Ministerio de Trabajo y Previsión Social, cuando lo justifique plenamente la situación económica de la empresa. Dicha prohibición debe entenderse únicamente en cuanto a las relaciones de trabajo que, en todo o en parte, tengan condiciones superiores al mínimum de protección que este Código otorga a los trabajadores.',
            'description3' => 'Son condiciones o elementos de la prestación de los servicios o ejecución de una obra: <span class="opNum">2.</span> <span>la materia u objeto; la forma o modo de su desempeño; el tiempo de su realización; el lugar de ejecución y las retribuciones a que esté obligado el patrono.</span>',
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
            'begin' => 'El contrato individual de trabajo puede ser:<br>
            a) Por tiempo indefinido, cuando no se especifica fecha para su terminación;
            b) A plazo fijo, cuando se especifica fecha para su terminación o cuando se ha',
            'description1' => 'El contrato individual de trabajo puede ser:<br>
            <span class="opNum">1.</span> <span>a) Por tiempo indefinido, cuando no se especifica fecha para su terminación;<br>
            b) A plazo fijo, cuando se especifica fecha para su terminación o cuando se ha previsto el acaecimiento de algún hecho o circunstancia, como la conclusión de una obra, que forzosamente ha de poner término a la relación de trabajo. En este segundo caso, se debe tomar en cuenta la actividad del trabajador en sí mismo como objeto del contrato, y no el resultado de la obra; y<br>
            c) Para obra determinada, cuando se ajusta globalmente o en forma alzada el precio de los servicios del trabajador desde que se inician las labores hasta que éstas concluyan, tomando en cuenta el resultado del trabajo, o sea, la obra realizada.</span>',
            'description2' => '
            Aunque el trabajador reciba anticipos a buena cuenta de los trabajos ejecutados o por ejecutarse, el contrato individual de trabajo debe entenderse para obra determinada, siempre que se reúnan las condiciones que indica el párrafo anterior.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '26',
            'name' => 'Artículo 26',
            'begin' => 'Todo contrato individual de trabajo debe tenerse por celebrado por tiempo indefinido, salvo prueba o estipulación lícita y expresa en contrario.',
            'description1' => '<span class="opNum">1.</span> <span>Todo contrato individual de trabajo debe tenerse por celebrado por tiempo indefinido</span>, salvo prueba o estipulación lícita y expresa en contrario.
            Deben tenerse siempre como contratos a plazo indefinido, aunque se hayan ajustado a plazo fijo o para obra determinada, los que se celebren en una empresa cuyas actividades sean de naturaleza permanente o continuada, si al vencimiento de dichos contratos subsiste la causa que les dio origen.',
            'description2' => 'En consecuencia, los contratos a plazo fijo y para obra determinada tienen carácter de excepción y sólo pueden celebrarse en los casos que así lo exija la naturaleza accidental o temporal del servicio que se va a prestar o de la obra que se va a ejecutar.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '27',
            'name' => 'Artículo 27',
            'begin' => 'El contrato individual de trabajo puede ser verbal cuando se refiera:<br>
            a) A las labores agrícolas o ganaderas;<br>
            b) Al servicio doméstico;<br>',
            'description1' => 'El contrato individual de trabajo puede ser verbal cuando se refiera:<br>
            a) A las labores agrícolas o ganaderas;<br>
            b) Al servicio doméstico;<br>
            c) A los trabajos accidentales o temporales que no excedan de sesenta días; y<br>
            d) A la prestación de un trabajo para obra determinada, siempre que el valor de ésta no exceda de cien quetzales, y, si se hubiere señalado plazo para la entrega, siempre que éste no sea mayor de sesenta días.',
            'description2' => 'En todos estos casos el patrono queda obligado a suministrar al trabajador, en el momento en que se celebre el contrato, una tarjeta o constancia que únicamente debe contener <span class="opNum">1.</span> <span>la fecha de iniciación de la relación de trabajo y el salario estipulado y, al vencimiento de cada período de pago, el número de días o jornadas trabajadas, o el de tareas u obras realizadas.</span>',
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
            'begin' => 'El contrato escrito de trabajo debe contener:<br>
            a) Los nombres, apellidos, edad, sexo, estado civil, nacionalidad y vecindad de los contratantes;<br>
            b) La fecha de la iniciación de la relación de trabajo;',
            'description1' => 'El contrato escrito de trabajo debe contener:<br>
            a) Los nombres, apellidos, edad, sexo, estado civil, nacionalidad y vecindad de los contratantes;<br>
            b) La fecha de la iniciación de la relación de trabajo;<br>
            c) La indicación de los servicios que el trabajador se obliga a prestar, o la naturaleza de la obra a ejecutar, especificando en lo posible las características y las condiciones del trabajo;<br>
            d) El lugar o los lugares donde deben prestarse los servicios o ejecutarse la obra;<br>
            e) La designación precisa del lugar donde viva el trabajador cuando se le contrata para prestar sus servicios o ejecutar una obra en lugar distinto de aquel donde viva habitualmente;<br>
            f) La duración del contrato o la expresión de ser por tiempo indefinido o para la ejecución de obra determinada;<br>
            g) El tiempo de la jornada de trabajo y las horas en que debe prestarse;',
            'description3' => 'h) El salario, beneficio, comisión o participación que debe recibir el trabajador; si se debe calcular por unidad de tiempo, por unidad de obra o de alguna otra manera, y la forma, período y lugar de pago; En los casos en que se estipule que el salario se ha de pagar por unidad de obra, se debe hacer constar la cantidad y calidad de material, las herramientas y útiles que el patrono convenga en proporcionar y el estado de conservación de los mismos, así como el tiempo que el trabajador pueda tenerlos a su disposición. El patrono no puede exigir del trabajador cantidad alguna por concepto de desgaste normal o destrucción accidental de las herramientas, como consecuencia de su uso en el trabajo;<br>
            i) Las demás estipulaciones legales en que convengan las partes;<br>
            j) El lugar y la fecha de celebración del contrato; y<br>
            k) Las firmas de los contratantes o la impresión digital de los que no sepan o no puedan firmar, y el número de sus cédulas de vecindad.<br>
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
            'description1' => 'Tienen también capacidad para contratar su trabajo, para percibir y disponer de la retribución convenida y, en general, para ejercer los derechos y acciones que se deriven del presente Código, de sus reglamentos y de las leyes de previsión social, <span class="opNum">1.</span> <span>los menores de edad, de uno u otro sexo, que tengan catorce años o más y los insolventes y fallidos.</span>',
            'description2' => 'Las capacidades específicas a que alude el párrafo anterior, lo son sólo para los efectos de trabajo, y en consecuencia, no afectan en lo demás el estado de minoridad o, en su caso, el de incapacidad por insolvencia o quiebra.
            La interdicción judicial declarada del patrono no invalida los actos o contratos que haya celebrado el ejecutado con sus trabajadores anteriormente a dicha declaratoria.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '32',
            'name' => 'Artículo 32',
            'begin' => 'Los contratos relativos al trabajo de los jóvenes que tengan menos de catorce años, deben celebrarse con los representantes legales de éstos y, en su defecto, se necesita la autorización',
            'description1' => '<span class="opNum">1.</span> <span>Los contratos relativos al trabajo de los jóvenes que tengan menos de catorce años, deben celebrarse con los representantes legales de éstos y, en su defecto, se necesita la autorización de la Inspección General de Trabajo.</span><br>
            El producto del trabajo de los menores a que se refiere el párrafo anterior lo deben percibir sus representantes legales o la persona que tenga a su cargo el cuidado de ellos, según la determinación que debe hacer la Inspección General de Trabajo en las autorizaciones a que alude este artículo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '57',
            'name' => 'Artículo 57',
            'begin' => 'Reglamento interior de trabajo es el conjunto de normas elaborado por el patrono de acuerdo con las leyes, reglamentos, pactos colectivos y contratos vigentes que lo',
            'description1' => 'Reglamento interior de trabajo es el conjunto de normas elaborado por el patrono de acuerdo con las leyes, reglamentos, pactos colectivos y contratos vigentes que lo afecten, con el objeto de precisar y regular las normas a que obligadamente se deben sujetar él y sus trabajadores con motivo de la ejecución o prestación concreta del trabajo.<br>
            No es necesario incluir en el reglamento las disposiciones contenidas en la ley.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '58',
            'name' => 'Artículo 58',
            'begin' => 'Todo patrono que ocupe en su empresa permanentemente diez o más trabajadores, queda obligado a elaborar y poner en vigor su respectivo reglamento interior de',
            'description1' => 'Todo patrono que ocupe en su empresa permanentemente diez o más trabajadores, queda obligado a elaborar y poner en vigor su respectivo reglamento interior de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '60',
            'name' => 'Artículo 60',
            'begin' => 'El reglamento interior de Trabajo debe comprender las reglas de orden técnico y administrativo necesarias para la buena marcha de la empresa; las relativas',
            'description1' => 'El reglamento interior de Trabajo debe comprender las reglas de orden técnico y administrativo necesarias para la buena marcha de la empresa; las relativas a higiene y seguridad en las labores, como indicaciones para evitar que se realicen los riesgos profesionales e instrucciones para prestar los primeros auxilios en caso de accidente y, en general, todas aquellas otras que se estimen necesarias para la conservación de la disciplina y el buen cuido de los bienes de la empresa. Además, debe contener:<br>
            a) Las horas de entrada y salida de los trabajadores, el tiempo destinado para las comidas y el período de descanso durante la jornada;',
            'description2' => 'b) El lugar y el momento en que deben comenzar y terminar las jornadas de trabajo;<br>
            c) Los diversos tipos de salarios y las categorías de trabajo a que correspondan;<br>
            d) El lugar, día y hora de pago;<br>
            e) Las disposiciones disciplinarias y procedimientos para aplicarlas. Se prohíbe descontar suma alguna del salario de los trabajadores en concepto de multa. La suspensión del trabajo, sin goce de salario, no debe decretarse por más de ocho días, ni antes de haber oído al interesado y a los compañeros de trabajo que éste indique. Tampoco podrá imponerse esta sanción, sino en los casos expresamente previstos en el respectivo reglamento;',
            'description3' => 'f) La designación de las personas del establecimiento ante quienes deben presentarse las peticiones de mejoramiento o reclamos en general y la manera de formular unas y otros; y<br>
            g) Las normas especiales pertinentes a las diversas clases de labores de acuerdo con la edad y sexo de los trabajadores y las normas de conducta, presentación y compostura personal que éstos deben guardar, según lo requiera la índole del trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '61',
            'name' => 'Artículo 61',
            'begin' => 'Además de las contenidas en otros Artículos de este Código, en sus reglamentos y en las leyes de previsión social, son obligaciones de los patronos',
            'description1' => 'Además de las contenidas en otros Artículos de este Código, en sus reglamentos y en las leyes de previsión social, son obligaciones de los patronos:<br>
            a) Enviar dentro del improrrogable plazo de los dos primeros meses de cada año a la dependencia administrativa correspondiente del Ministerio de Trabajo y Previsión Social, directamente o por medio de las autoridades de trabajo del lugar donde se encuentra la respectiva empresa, un informe impreso que por lo menos debe contener estos datos:<br>
            1) Egresos totales que hayan tenido por concepto de salarios, bonificaciones y cualquier otra prestación económica durante el año anterior, con la debida separación de las salidas por jornadas ordinarias y extraordinarias.<br>
            2) Nombres y apellidos de sus trabajadores con expresión de la edad aproximada, nacionalidad, sexo, ocupación, número de días que haya trabajado cada uno y el salario que individualmente les haya correspondido durante dicho año.',
            'description2' => 'Las autoridades administrativas de trabajo deben dar toda clase de facilidades para cumplir la obligación que impone este inciso, sea mandando a imprimir los formularios que estimen convenientes, auxiliando a los pequeños patronos o a los que carezcan de instrucción para llenar dichos formularios correctamente, o de alguna otra manera.<br>
            Las normas de este inciso no son aplicables al servicio doméstico;<br>
            b) Preferir, en igualdad de circunstancias, a los guatemaltecos sobre quienes no lo son y a los que les hayan servido bien con anterioridad respecto de quienes no estén en ese caso;<br>
            c) Guardar a los trabajadores la debida consideración, absteniéndose de maltrato de palabra o de obra;<br>
            d) Dar oportunamente a los trabajadores los útiles, instrumentos y materiales necesarios para ejecutar el trabajo convenido, debiendo suministrarlos de buena calidad y reponerlos tan luego como dejen de ser eficientes, siempre que el patrono haya convenido en que aquellos no usen herramienta propia;',
            'description3' => 'e) Proporcionar local seguro para la guarda de los instrumentos y útiles del trabajador, cuando éstos necesariamente deban mantenerse en el lugar donde se presten los servicios. En este caso, el registro de herramientas debe hacerse siempre que el trabajador lo solicite;<br>
            f) Permitir la inspección y vigilancia que las autoridades de trabajo practiquen en su empresa para cerciorarse del cumplimiento de las disposiciones del presente Código, de sus reglamentos y de las leyes de previsión social, y dar a aquéllas los informes indispensables que con ese objeto les soliciten. En este caso, los patronos pueden exigir a dichas autoridades que les muestren sus respectivas credenciales. Durante el acto de inspección los trabajadores podrán hacerse representar por uno o dos compañeros de trabajo;<br> 
            g) Pagar al trabajador el salario correspondiente al tiempo que éste pierda cuando se vea imposibilitado para trabajar por culpa del patrono;<br>
            <span class="opNum">1.</span> <span>h) Conceder a los trabajadores el tiempo necesario para el ejercicio del voto en las elecciones populares, sin reducción de salario;</span>',
            'description4' => 'i) Deducir del salario del trabajador las cuotas ordinarias y extraordinarias que le corresponda pagar a su respectivo sindicato o cooperativa, siempre que lo solicite el propio interesado o la respectiva organización legalmente constituida. En este caso, el sindicato o cooperativa debe de comprobar su personalidad jurídica por una sola vez y realizar tal cobro en talonarios autorizados por el Departamento Administrativo de Trabajo, demostrando al propio tiempo, que las cuotas cuyo descuento pida son las autorizadas por sus estatutos o, en el caso de las extraordinarias, por la Asamblea General;<br> 
            j) Procurar por todos los medios a su alcance la alfabetización de sus trabajadores que lo necesiten;<br>
            k) Mantener en los establecimientos comerciales o industriales donde la naturaleza del trabajo lo permita, un número suficiente de sillas destinadas al descanso de los trabajadores durante el tiempo compatible con las funciones de éstos;',
            'description5' => 'l) Proporcionar a los trabajadores campesinos que tengan su vivienda en la finca donde trabajan, la leña indispensable para su consumo doméstico, siempre que la finca de que se trate la produzca en cantidad superior a la que el patrono necesite para la atención normal de la respectiva empresa. En este caso deben cumplirse las leyes forestales y el patrono puede elegir entré dar la leña cortada o indicar a los trabajadores campesinos dónde pueden cortarla y con qué cuidados deben hacerlo, a fin de evitar daños a las personas, cultivos o árboles;<br> 
            m) Permitir a los trabajadores campesinos que tengan su vivienda en terrenos de la empresa donde trabajan; que tomen de las presas, estanques, fuentes u ojos de agua, la que necesiten para sus usos domésticos y los de los animales que tengan; que aprovechen los pastos naturales de la finca para la alimentación de los animales, que de acuerdo con el contrato de trabajo, se les autorice mantener, que mantengan cerdos amarrados o enchiquerados y aves de corral dentro del recinto en que esté instalada la vivienda que se les haya suministrado en la finca, siempre que no causen daños o perjuicios dichos animales o que las autoridades de trabajo o sanitarias no dicten disposición en contrario; ',
            'description6' => 'y que aprovechen las frutas no cultivadas que hayan en la finca de que se trate y que no acostumbre aprovechar el patrono, siempre que el trabajador se limite recoger la cantidad que puedan consumir personalmente él y sus familiares que vivan en su compañía;<br>
            n) Permitir a los trabajadores campesinos que aprovechen los frutos y productos de las parcelas de tierra que les concedan; y<br>
            <span class="opNum">2.</span> <span>ñ) Conceder licencia con goce de sueldo a los trabajadores en los siguientes casos:<br>
            1. Cuando ocurriere el fallecimiento del cónyuge o de la persona con la cual estuviese unida de hecho el trabajador, o de los padres o hijo, tres (3) días.<br>
            2. Cuando contrajera matrimonio, cinco (5) días.<br>
            3. Por nacimiento de hijo, dos (2) días.<br>
            4. Cuando el empleador autorice expresamente otros permisos o licencias y haya indicado que éstos serán también retribuidos.</span>',
            'description7' => '<span>5. Para responder a citaciones judiciales por el tiempo que tome la comparecencia y siempre que no exceda de medio día dentro de la jurisdicción y un día fuera del departamento de que se trate.<br>
            6. Por desempeño de una función sindical siempre que ésta se limite a los miembros del Comité Ejecutivo y no exceda de seis días en el mismo mes calendario, para cada uno de ellos. No obstante lo anterior el patrono deberá conceder licencia sin goce de salario a los miembros del referido Comité Ejecutivo que así lo soliciten, por el tiempo necesario para atender las atribuciones de su cargo.<br>
            7. En todos los demás casos específicamente provistos en convenio o pacto colectivo de condiciones de trabajo.</span>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '62',
            'name' => 'Artículo 62',
            'begin' => 'Se prohíbe a los patronos: a) Inducir o exigir a sus trabajadores que compren sus artículos de consumo a determinados b) Exigir o aceptar dinero u otra compensación de los',
            'description1' => 'Se prohíbe a los patronos:<br>
            a) Inducir o exigir a sus trabajadores que compren sus artículos de consumo a determinados establecimientos o personas;<br>
            b) Exigir o aceptar dinero u otra compensación de los trabajadores como gratificación para que se les admita en el trabajo o por cualquiera otra concesión o privilegio que se relacione con las condiciones de trabajo en general.<br> 
            c) Obligar o intentar obligar a los trabajadores, cualquiera que sea el medio que se adopte, a retirarse de los sindicatos o grupos legales a que pertenezcan o a ingresar a unos o a otros;<br>
            d) Influir en sus decisiones políticas o convicciones religiosas;',
            'description2' => 'e) Retener por su sola voluntad las herramientas u objetos del trabajador sea como garantía o a título de indemnización o de cualquier otro no traslativo de propiedad;<br> 
            f) Hacer o autorizar colectas o suscripciones obligatorias entre sus trabajadores, salvo que se trate de las impuestas por la ley;<br>
            g) Dirigir o permitir que se dirijan los trabajos en estado de embriaguez o bajo la influencia de drogas estupefacientes o en cualquier otra condición anormal análoga; y<br>
            h) Ejecutar cualquier otro acto que restrinja los derechos que el trabajador tiene conforme la ley.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '63',
            'name' => 'Artículo 63',
            'begin' => 'Además de las contenidas en otros Artículos de este Código, en sus reglamentos y en las leyes de previsión social, son obligaciones de los trabajadores:',
            'description1' => 'Además de las contenidas en otros Artículos de este Código, en sus reglamentos y en las leyes de previsión social, son obligaciones de los trabajadores:<br>
            a) Desempeñar el servicio contratado bajo la dirección del patrono o de su representante, a cuya autoridad quedan sujetos en todo lo concerniente al trabajo;<br>
            b) Ejecutar el trabajo con la eficiencia, cuidado y esmero apropiados y en la forma, tiempo y lugar convenidos;<br>
            c) Restituir al patrono los materiales no usados y conservar en buen estado los instrumentos y útiles que se les faciliten para el trabajo. Es entendido que no son responsables por el deterioro normal ni por el que se ocasione por caso fortuito, fuerza mayor, mala calidad o defectuosa construcción;<br>
            d) Observar buenas costumbres durante el trabajo;',
            'description2' => 'e) Prestar los auxilios necesarios en caso de siniestro o riesgo inminente en que las personas o intereses del patrono o de algún compañero de trabajo estén en peligro, sin derecho a remuneración adicional;<br>
            f) Someterse a reconocimiento médico, sea al solicitar su ingreso al trabajo o durante éste, a solicitud del patrono, para comprobar que no padecen alguna incapacidad permanente o algunaenfermedad profesional contagiosa o incurable; o a petición del Instituto Guatemalteco de Seguridad Social, con cualquier motivo;<br>
            g) Guardar los secretos técnicos, comerciales o de fabricación de los productos a cuya elaboración concurran directa o indirectamente, con tanta más fidelidad cuanto más alto sea el cargo del trabajador o la responsabilidad que tenga de guardarlos por razón de la ocupación que desempeña, así como los asuntos administrativos reservados, cuya divulgación pueda causar perjuicio a la empresa;',
            'description3' => 'h) Observar rigurosamente las medidas preventivas que acuerden las autoridades competentes y las que indiquen los patronos, para seguridad y protección personal de ellos o de sus compañeros de labores, o de los lugares donde trabajan;<br>
            í) Desocupar dentro de un término de treinta días, contados desde la fecha en que se termine el contrato de trabajo, la vivienda que les hayan facilitado los patronos sin necesidad de los trámites del juicio de desahucio. Pasado dicho término, el juez, a requerimiento de éstos últimos, ordenará el lanzamiento, debiéndose tramitar el asunto en forma de incidente. Sin embargo, si el trabajador consigue nuevo trabajo antes del vencimiento del plazo estipulado en este inciso, el juez de trabajo, en la forma indicada, ordenará el lanzamiento.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '65',
            'name' => 'Artículo 65',
            'begin' => 'Hay suspensión de los contratos de trabajo cuando una o las dos partes que forman la relación laboral deja o dejan de cumplir parcial o totalmente, durante un tiempo, alguna',
            'description1' => 'Hay suspensión de los contratos de trabajo cuando una o las dos partes que forman la relación laboral deja o dejan de cumplir parcial o totalmente, durante un tiempo, alguna de sus respectivas obligaciones fundamentales (prestación del trabajo y pago del salario), sin que por ello terminen dichos contratos ni se extingan los derechos y obligaciones que emanen de los mismos.<br>
            La suspensión puede ser:<br>
            <span class="opNum">1.</span> <span>a) Individual parcial, cuando afecta a una relación de trabajo y una de las partes deja de cumplir sus obligaciones fundamentales;</span>',
            'description2' => '<span class="opNum">2.</span> <span>b) Individual total, cuando afecta a una relación de trabajo y las dos partes dejan de cumplir sus obligaciones fundamentales;</span><br>
            <span class="opNum">3.</span> <span>c) Colectiva parcial, cuando por una misma causa se afecta la mayoría o la totalidad de las relaciones de trabajo vigentes en una empresa o lugar de trabajo, y el patrono o sus trabajadores dejan de cumplir sus obligaciones fundamentales; y</span><br>
            <span class="opNum">4.</span> <span>d) Colectiva total, cuando por una misma causa se afectan la mayoría o la totalidad de las relaciones de trabajo vigentes en una empresa o lugar de trabajo, y el patrono y sus trabajadores dejan de cumplir sus obligaciones fundamentales.</span>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '66',
            'name' => 'Artículo 66',
            'begin' => 'Son causas de suspensión individual parcial de los contratos de trabajo: a) Las licencias, descansos y vacaciones remunerados que impongan la ley o los que ',
            'description1' => 'Son causas de suspensión individual parcial de los contratos de trabajo:<br>
            a) Las licencias, descansos y vacaciones remunerados que impongan la ley o los que conceda el patrono con goce de salario;<br>
            b) Las enfermedades, los riesgos profesionales acaecidos, los descansos pre y posnatales y los demás riesgos sociales análogos que produzcan incapacidad temporal comprobada para desempeñar el trabajo; y<br>
            c) La obligación de trabajo sin goce de salario adicional que impone el <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="top" data-content="e) Prestar los auxilios necesarios en caso de siniestro o riesgo inminente en que las personas o intereses del patrono o de algún compañero de trabajo estén en peligro, sin derecho a remuneración adicional;">Artículo 63, inciso e)</a>.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '68',
            'name' => 'Artículo 68',
            'begin' => 'Son causas de suspensión individual total de los contratos de trabajo: a) Las licencias o descansos sin goce de salario que acuerden patronos y trabajadores;',
            'description1' => 'Son causas de suspensión individual total de los contratos de trabajo:<br>
            <span class="opNum">1.</span> <span>a) Las licencias o descansos sin goce de salario que acuerden patronos y trabajadores;<br>
            b) Los casos previstos en el <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="b) Después de un trabajo continuo de seis o más meses pero menor de nueve, le debe pagar medio salario durante dos meses; y">Artículo 66, inciso b)</a>, una vez transcurridos los términos en los que el patrono está obligado a pagar medio salario, como se alude en dicho Artículo; y<br>
            c) La prisión provisional, la prisión simple y el arresto menor que en contra del trabajador se decreten.</span><br>
            Esta regla rige en el caso de la prisión provisional, siempre que la misma sea seguida de auto que la reforme, de sentencia absolutoria o si el trabajador obtuviere su excarcelación bajo fianza, únicamente cuando el delito por el que se le procesa no se suponga cometido contra el patrono, sus parientes, sus representantes o los intereses de uno u otros.',
            'description2' => 'Sin embargo, en este último supuesto, el trabajador que obtuviere reforma del auto de prisión provisional o sentencia absolutoria, tendrá derecho a que el patrono le cubra los salarios correspondientes al tiempo que de conformidad con las normas procesales respectivas deba durar el proceso, salvo el lapso que el trabajador haya prestado sus servicios a otro patrono, mientras estuvo en libertad durante la tramitación del proceso.<br> 
            Es obligación del trabajador dar aviso al patrono de la causa que le impide asistir al trabajo, dentro de los cinco días siguientes a aquél en que empezó su prisión provisional, prisión simple o arresto menor y reanudar su trabajo dentro de los dos días siguientes a aquél en que obtuvo su libertad. Si no lo hace, el patrono puede dar por terminado el contrato, sin que ninguna de las partes incurra en responsabilidad, salvo que la suspensión deba continuar conforme al <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="b) Las enfermedades, los riesgos profesionales acaecidos, los descansos pre y posnatales y los demás riesgos sociales análogos que produzcan incapacidad temporal comprobada para desempeñar el trabajo; y">inciso b) del Artículo 66</a>.',
            'description3' => 'En estos casos rige la regla del <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Es entendido que en todos estos casos el patrono, durante la suspensión del contrato de trabajo, puede colocar interinamente a otro trabajador y despedir a éste, sin responsabilidad de su parte, cuando regrese el titular del puesto.">último párrafo del Artículo 67</a>.<br>
            A solicitud del trabajador, el alcaide o jefe de la cárcel bajo pena de multa de diez a quinientos quetzales, que impondrá el respectivo Juez de Trabajo, debe extenderle las constancias necesarias para la prueba de los extremos a que se refiere el párrafo segundo de este Artículo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '70',
            'name' => 'Artículo 70',
            'begin' => 'Son causas de suspensión colectiva parcial de los contratos de trabajo: a) La huelga legalmente declarada, cuyas causas hayan sido estimadas imputables al patron',
            'description1' => 'Son causas de suspensión colectiva parcial de los contratos de trabajo:<br>
            a) La huelga legalmente declarada, cuyas causas hayan sido estimadas imputables al patron por los Tribunales de Trabajo y Previsión Social;<br>
            b) Los casos previstos por los 
            <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="a) Faculta a los rabajadores para pedir su reinstalación inmediata o para dar por terminados sus contratos dentro de los treinta días siguientes a la realización del paro, con derecho a percibir las indemnizaciones legales que procedan;">Artículos 251</a> 
            y <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Si los Tribunales de Trabajo y Previsión Social declaran que los motivos de un paro legal son imputables al patrono, este debe pagar a los trabajadores los salarios caídos a que se refiere el inciso b) del Artículo anterior.">252</a>
            , párrafo segundo;<br>
            c) La falta de materia prima para llevar adelante los trabajos, siempre que sea imputable al patrono, según declaración de los mismos tribunales; y<br>
            d) Las causas que enumera el Artículo siguiente, siempre que los patronos hayan accedido de previo o accedan después a pagar a sus trabajadores, durante la vigencia de la suspensión, sus salarios en parte o en todo.<br>
            En el caso del inciso a) rige la regla del 
            <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Si la huelga se declara justa, los Tribunales de Trabajo y Previsión Social deben condenar al patrono al pago de los salarios correspondientes a los días en que éstos hayan holgado. Los trabajadores que por la naturaleza de sus funciones deban laborar durante el tiempo que dure la huelga, tendrán derecho a salario doble." >Artículo 242, párrafo segundo</a>, y en el caso del inciso c) los tribunales deben graduar discrecionalmente, según el mérito de los autos, la cuantía de los salarios caídos que el patrono debe pagar a sus trabajadores.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '71',
            'name' => 'Artículo 71',
            'begin' => 'Son causas de suspensión colectiva total de los contratos de trabajo, en que ambas partes quedan relevadas de sus obligaciones',
            'description1' => 'Son causas de suspensión colectiva total de los contratos de trabajo, en que ambas partes quedan relevadas de sus obligaciones fundamentales, sin responsabilidad para ellas:<br>
            a) La huelga legalmente declarada, cuyas causas no hayan sido estimadas imputables al patrono por los Tribunales de Trabajo y Previsión Social;<br>
            b) El paro legalmente declarado;<br>
            c) La falta de materia prima para llevar adelante los trabajos, siempre que no sea imputable al patrono;',
            'description2' => 'd) La muerte o la incapacidad del patrono, cuando tenga como consecuencia necesaria, inmediata y directa la suspensión del trabajo; y<br>
            e) Los demás casos constitutivos de fuerza mayor o caso fortuito cuando traigan como consecuencia necesaria, inmediata y directa la suspensión del trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '76',
            'name' => 'Artículo 76',
            'begin' => 'Hay terminación de los contratos de trabajo cuando una o las dos partes que forman la relación laboral le ponen fin a ésta, cesándol',
            'description1' => 'Hay terminación de los contratos de trabajo cuando una o las dos partes que forman la relación laboral le ponen fin a ésta, cesándola efectivamente, <span class="opNum">1.</span> <span>ya sea por voluntad de una de ellas</span>, <span class="opNum">2.</span> <span>por mutuo consentimiento</span> o por <span class="opNum">3.</span> <span>causa imputable a la otra</span>, o en que ocurra lo mismo, por disposición de la ley, en cuyas circunstancias se extinguen los derechos y obligaciones que emanan de dichos contratos.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '77',
            'name' => 'Artículo 77',
            'begin' => 'Son causas justas que facultan al patrono para dar por terminado el contrato de trabajo, sin responsabilidad de su parte:',
            'description1' => 'Son causas justas que facultan al patrono para dar por terminado el contrato de trabajo, sin responsabilidad de su parte:<br>
            a) Cuando el trabajador se conduzca durante sus labores en forma abiertamente inmoral o acuda a la injuria, a la calumnia o a las vías de hecho contra su patrono o los representantes de éste en la dirección de las labores;<br>
            b) Cuando el trabajador cometa alguno de los actos enumerados en el inciso anterior contra algún compañero de trabajo, durante el tiempo que se ejecuten las labores, siempre que como consecuencia de ello se altere gravemente la disciplina o se interrumpan las labores;<br>
            c) Cuando el trabajador, fuera del lugar donde se ejecutan las labores y en horas que sean de trabajo, acuda a la injuria, a la calumnia o a las vías de hecho contra su patrono o contra los representantes de éste en la dirección de las labores, siempre que dichos actos no hayan sido provocados y que, como consecuencia de ellos, se haga imposible la convivencia y armonía para la realización del trabajo;',
            'description2' => 'd) Cuando el trabajador cometa algún delito o falta contra la propiedad en  erjuicio del patrono, de alguno de sus compañeros de trabajo o en perjuicio de un tercero en el interior del establecimiento; asimismo, cuando cause intencionalmente, por descuido o negligencia, daño material en las máquinas, herramientas, materias primas, productos y demás objetos relacionados, en forma inmediata o indudable con el trabajo;<br>
            e) Cuando el trabajador revele los secretos a que alude el <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="g) Guardar los secretos técnicos, comerciales o de fabricación de los productos a cuya elaboración concurran directa o indirectamente, con tanta más fidelidad cuanto más alto sea el cargo del trabajador o la responsabilidad que tenga de guardarlos por razón de la ocupación que desempeña, así como los asuntos administrativos reservados, cuya divulgación pueda causar perjuicio a la empresa;">inciso g) del Artículo 63</a>;<br> 
            f) Cuando el trabajador deje de asistir al trabajo sin permiso del patrono o sin causa justificada, durante dos días laborales completos y consecutivos o durante seis medios días laborales en un mismo mes calendario.<br>
            La justificación de la inasistencia se debe hacer al momento de reanudarse las labores, si no se hubiere hecho antes;<br>
            g) Cuando el trabajador se niegue de manera manifiesta a adoptar las medidas preventivas o a seguir los procedimientos indicados para evitar accidentes o enfermedades; o cuando el trabajador se niegue en igual forma a acatar las normas o instrucciones que el patrono o sus representantes en la dirección de los trabajos, le indiquen con claridad para obtener la mayor eficacia y rendimiento en las labores;',
            'description3' => 'h) Cuando infrinja cualquiera de las prohibiciones del Artículo 64, o del Reglamento Interior de Trabajo debidamente aprobado, después de que el patrono lo aperciba una vez por escrito. No será necesario el apercibimiento en el caso de embriaguez cuando, como consecuencia de ella, se ponga en peligro la vida o la seguridad de las personas o de los bienes del patrono;<br>
            i) Cuando el trabajador, al celebrar el contrato haya inducido en error al patrono, pretendiendo tener cualidades, condiciones o conocimientos que evidentemente no posee, o presentándole referencias o atestados personales cuya falsedad éste luego compruebe, o ejecutando su trabajo en forma que demuestre claramente su incapacidad en la realización de las labores para las cuales haya sido contratado;<br> 
            j) Cuando el trabajador sufra la pena de arresto mayor o se le imponga prisión correccional por sentencia ejecutoriada; y<br>
            k) Cuando el trabajador incurra en cualquier otra falta grave a las obligaciones que le imponga el contrato.<br>
            Es entendido que siempre que el despido se funde en un hecho sancionado también por las leyes penales, queda a salvo el derecho del patrono para entablar las acciones correspondientes ante las autoridades penales comunes.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '78',
            'name' => 'Artículo 78',
            'begin' => 'La terminación del contrato de trabajo conforme a una o varías de las causas enumeradas que el Artículo anterior, surte efectos desde que el patrono lo comunique por',
            'description1' => 'La terminación del contrato de trabajo conforme a una o varías de las causas enumeradas que el Artículo anterior, surte efectos desde que el patrono lo comunique por escrito al trabajador indicándole la causa del despido y éste cese efectivamente sus labores, pero <span class="opNum">1.</span> <span>el trabajador goza del derecho de emplazar al patrono ante los Tribunales de Trabajo y Previsión Social, antes de que transcurra el término de prescripción</span>, con el objeto de que pruebe la justa causa en que se fundó el despido. Si el patrono no prueba dicha causa, debe pagar al trabajador:<br>
            <span class="opNum">2.</span> <span>a) Las indemnizaciones que según este Código le pueda corresponder; y</span><br>
            b) A título de daños y perjuicios, los salarios que el trabajador ha dejado de percibir desde el momento del despido hasta el pago de su indemnización, hasta un máximo de doce (12) meses de salario y las costas judiciales.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '79',
            'name' => 'Artículo 79',
            'begin' => 'Son causas justas que facultan al trabajador para dar por terminado su contrato de trabajo, sin responsabilidad de su parte:',
            'description1' => 'Son causas justas que facultan al trabajador para dar por terminado su contrato de trabajo, sin responsabilidad de su parte:<br>
            a) Cuando el patrono no le pague el salario completo que le corresponda, en la fecha y lugar convenidos o acostumbrados. Quedan a salvo las deducciones autorizadas por la ley;<br> 
            b) Cuando el patrono incurra durante el trabajo en falta de probidad u honradez, o se conduzca en forma abiertamente inmoral o acuda a la injuria,a la calumnia o a las vías de hecho contra el trabajador;<br>
            c) Cuando el patrono directamente, uno de sus parientes, un dependiente suyo o una de las personas que viven en la 41 casa del primero, cometa con su autorización o tolerancia, alguno de los actos enumerados en él inciso anterior contra el trabajador;<br>
            d) Cuando el patrono directamente o por medio de sus familiares o dependientes, cause maliciosamente un perjuicio material en las herramientas o útiles del trabajador;',
            'description2' => 'e) Cuando el patrono o su representante en la dirección de las labores acuda a la injuria, a la calumnia o a las vías de hecho contra el trabajador fuera del lugar donde se ejecutan las labores y en horas que no sean de trabajo, siempre que dichos actos no hayan sido provocados y que como consecuencia de ellos se hagan imposibles la convivencia y armonía para el cumplimiento del contrato;<br>
            f) Cuando el patrono, un miembro de su familia o su representante en la dirección de las labores u otro trabajador esté atacado por alguna enfermedad contagiosa, siempre que el trabajador deba permanecer en contacto inmediato con la persona de que se trate;<br>
            g) Cuando exista peligro grave para la seguridad o salud del trabajador o de su familia, ya sea por carecer de condiciones higiénicas el lugar de trabajo, por excesiva insalubridad de la región o porque el patrono no cumpla con las medidas de prevención y seguridad que las disposiciones legales establezcan;<br>
            h) Cuando el patrono comprometa con su imprudencia o descuido inexcusable, la seguridad del lugar donde se realizan las labores o la de las personas que allí se encuentren;',
            'description3' => 'i) Cuando el patrono viole alguna de las prohibiciones contenidas en el <a href="#codeWork" data-search="Artículo 62" class="linkGo">Artículo 62</a>;<br>
            j) Cuando el patrono o su representante en la dirección de las labores traslade al trabajador a un puesto de menor categoría o con menos sueldo o le altere fundamental o permanentemente cualquiera otra de sus condiciones de trabajo. Sin embargo, en el caso de que el trabajador hubiere ascendido a un cargo que comprenda funciones diferentes a las desempeñadas por el interesado en el cargo anterior, el patrono dentro del período de prueba puede volverlo a su cargo original, si establece la manifiesta incompetencia de éste en el desempeño del puesto al que fue promovido. Cuando el ascenso o aumento de salario se hiciere en forma temporal, en virtud de circunstancias calificadas, el patrono tampoco incurre en responsabilidad al volver al trabajador a sus condiciones originales; y<br>
            k) Cuando el patrono incurra en cualquiera otra falta grave a las obligaciones que le imponga el contrato.<br>
            La regla que contiene el <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Es entendido que siempre que el despido se funde en un hecho sancionado también por las leyes penales, queda a salvo el derecho del patrono para entablar las acciones correspondientes ante las autoridades penales comunes.">párrafo final del Artículo 77</a> rige también a favor de los trabajadores.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '81',
            'name' => 'Artículo 81',
            'begin' => 'En todo contrato por tiempo indeterminado los dos primeros meses se reputan de prueba, salvo que por mutua conveniencia las partes pacten un período menor.',
            'description1' => '<span class="opNum">1.</span> <span>En todo contrato por tiempo indeterminado los dos primeros meses se reputan de prueba, salvo que por mutua conveniencia las partes pacten un período menor.</span><br>
            Durante el período de prueba cualquiera de las partes puede ponerle término al contrato, por su propia voluntad, con justa causa o sin ella, sin incurrir en responsabilidad alguna.<br>
            Se prohíbe la simulación del período de prueba, con el propósito de evadir el reconocimiento de los derechos irrenunciables de los trabajadores y los derivados del contrato de trabajo por tiempo indefinido. Si una o varias empresas contrataren trabajadores para prestar sus servicios a otra empresa, esta última será responsable frente a los trabajadores afectados, de conformidad con la ley.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '82',
            'name' => 'Artículo 82',
            'begin' => 'Si el contrato de trabajo por tiempo indeterminado concluye una vez transcurrido el período de prueba, por razón de despido injustificado del trabajador, o por alguna de las',
            'description1' => 'Si el contrato de trabajo por tiempo indeterminado concluye una vez transcurrido el período de prueba, por razón de despido injustificado del trabajador, o por alguna de las causas previstas en el <a href="#codeWork" data-search="Artículo 79" class="linkGo">Artículo 79</a>, el patrono debe pagar a éste una indemnización por tiempo servido equivalente a un mes de salario por cada año de servicio continuos 47 y si los servicios no alcanzan a un año, en forma proporcional al plazo trabajado. Para los efectos del cómputo de servicios continuos, se debe tomar en cuenta la fecha en que se haya iniciado la relación de trabajo, cualquiera que ésta sea.<br>
            La indemnización por tiempo servido se rige, además, por estas reglas:<br>
            a) Su importe no puede ser objeto de compensación, venta o cesión, ni puede ser embargado, salvo en los términos del <a href="#codeWork" data-search="Artículo 79" class="linkGo">Artículo 97</a>;<br>
            b) Su importe debe calcularse tomando como base el promedio de los salarios devengados por el trabajador durante los últimos seis meses que tengan de vigencia el contrato o el tiempo que haya trabajado, si no se ha ajustado dicho término;',
            'description2' => 'c) La continuidad del trabajo no se interrumpe por enfermedad, vacaciones, licencias, huelga legal u otras causas análogas que según este Código suspenden y no terminan el contrato de trabajo;<br>
            d) Es nula ipso jure la cláusula del contrato que tienda a interrumpir la continuidad de los servicios prestados o por prestarse;<br>
            e) El patrono que despida a un trabajador por causa de enfermedad o invalidez permanente o vejez, no está obligado a satisfacer dicha indemnización, siempre que el asalariado de que se trate esté protegido por los beneficios correlativos del Instituto Guatemalteco de Seguridad Social y quede devengando, desde el momento mismo de la cesación del contrato, una pensión de invalidez, enfermedad o vejez, cuyo valor actuarial sea equivalente o mayor a la expresada indemnización por tiempo servido.<br>
            Si la pensión que cubra el Instituto Guatemalteco de Seguridad Social fuere menor, según su valor actuarial que conforme la expectativa de vida del trabajador, determine dicho Instituto, el patrono queda obligado únicamente a cubrirle la diferencia.',
            'description3' => 'Si no gozare de dicha protección, el patrono queda obligado a pagar al trabajador la indemnización por tiempo servido que le corresponda.<br>
            El trabajador que por enfermedad o invalidez, permanentes o por vejez, se vea imposibilitado de continuar en el desempeño de las atribuciones de su cargo y por cualquiera de esas circunstancias, que debe justificar previamente, se retire, tiene derecho a que el patrono le cubra el cincuenta por ciento de la indemnización prevista en este Artículo, siempre que no goce de los beneficios correlativos del Instituto Guatemalteco de Seguridad Social, pero si disfrutándolos, éste únicamente le reconoce una pensión cuyo valor actuarial sea menor que la que le correspondería conforme a la regla inmediatamente anterior, de acuerdo con la expectativa de vida que para dicho trabajador fije el indicado Instituto, el patrono sólo está obligado a cubrirle en el acto del retiro, la diferencia que resulte para completar tal indemnización. En el caso de que la pensión que fije, al trabajador el Instituto Guatemalteco de Seguridad Social, sea superior o igual a la indemnización indicada en este párrafo, según las normas expresadas, el patrono no tiene obligación alguna.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '83',
            'name' => 'Artículo 83',
            'begin' => 'El trabajador que desee dar por concluido su contrato por tiempo indeterminado sin justa causa o atendiendo únicamente a su propia voluntad y una vez que haya transcurrido',
            'description1' => 'El trabajador que desee dar por concluido su contrato por tiempo indeterminado sin justa causa o atendiendo únicamente a su propia voluntad y una vez que haya transcurrido el período de prueba debe dar aviso previo al patrono de acuerdo con lo que expresamente se estipule en dicho contrato, o en su defecto de conformidad con las siguientes reglas:<br>
            a) Antes de ajustar seis meses de servicios continuos, con una semana de anticipación por lo menos;
            b) Después de seis meses de servicios continuos pero menos de un año, con diez, días de anticipación por lo menos;<br>
            c) Después de un año de servicios continuos pero menos de cinco años, con dos semanas de anticipación por lo menos; y<br>
            d) Después de cinco años de servicios continuos, con un mes de anticipación por lo menos.',
            'description2' => 'Dichos avisos se deben dar siempre por escrito, pero si el contrato es verbal, el trabajador puede darlo en igual forma en caso de que lo haga ante dos testigos; no pueden ser compensados pagando el trabajador al patrono una cantidad igual al salario actual correspondiente a las expresadas plazas, salvo que este último lo consienta; y el patrono, una vez que el trabajador le haya dado el aviso respectivo, puede ordenar a éste que cese en su trabajo, sea por haber encontrado sustituto o por cualquier otro motivo, sin incurrir por ello en responsabilidad.<br>
            Son aplicables al preaviso las reglas de los <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="c) La continuidad del trabajo no se interrumpe por enfermedad, vacaciones, licencias, huelga legal u otras causas análogas que según este Código suspenden y no terminan el contrato de trabajo;
            d) Es nula ipso jure la cláusula del contrato que tienda a interrumpir la continuidad de los servicios prestados o por prestarse;">incisos c) y d) del Artículo 82</a>. Igualmente lo es la del <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content=" b) Su importe debe calcularse tomando como base el promedio de los salarios devengados por el trabajador durante los últimos seis meses que tengan de vigencia el contrato o el tiempo que haya trabajado, si no se ha ajustado dicho término;">inciso b) del mismo texto legal</a>, en todos aquellos casos en que proceda calcular el importe en dinero del plazo respectivo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '86',
            'name' => 'Artículo 86',
            'begin' => 'El contrato de trabajo termina sin responsabilidad para las partes por alguna de las siguientes causas:',
            'description1' => 'El contrato de trabajo termina sin responsabilidad para las partes por alguna de las siguientes causas:<br>
            a) Por el advenimiento del plazo en los contratos a plazo fijo y por la conclusión de la obra en los contratos para obra determinada;<br>
            b) Por las causas legales expresamente estipuladas en él; y<br>
            c) Por mutuo consentimiento.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '87',
            'name' => 'Artículo 87',
            'begin' => 'A la expiración de todo contrato de trabajo, por cualquier causa que éste termine, el patrono debe dar al trabajador un documento',
            'description1' => 'A la expiración de todo contrato de trabajo, por cualquier causa que éste termine, el patrono debe dar al trabajador un documento que exprese únicamente:<br>
            a) La fecha de su entrada y de su salida;<br>
            b) La clase de trabajo ejecutado; y<br>
            c) El salario ordinario y extraordinario devengado durante el último período del pago.<br>
            Si el trabajador lo desea, el certificado debe determinar también:<br>
            a) La manera como trabajó; y<br>
            b) La causa o causas de la terminación del contrato.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '88',
            'name' => 'Artículo 88',
            'begin' => 'Salario o sueldo es la retribución que el patrono debe pagar al trabajador en virtud del cumplimiento del contrato de trabajo o de la',
            'description1' => '<span class="opNum">1.</span> <span>Salario o sueldo es la retribución que el patrono debe pagar al trabajador en virtud del cumplimiento del contrato de trabajo o de la relación de trabajo vigente entre ambos. Salvo las excepciones legales, todo servicio prestado por un trabajador a su respectivo patrono, debe ser remunerado por éste.</span><br>
            El cálculo de esta remuneración, para el efecto de su pago, puede pactarse:<br>
            <span class="opNum">2.</span> <span>a) Por unidad de tiempo (por mes, quincena, semana, día u hora);<br>
            b) Por unidad de obra (por pieza, tarea, precio alzado o a destajo), y<br>
            c) Por participación en las utilidades, ventas o cobros que haga el patrono; pero en ningún caso el trabajador deberá asumir los riesgos de pérdidas que tenga el patrono.</span>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '89',
            'name' => 'Artículo 89',
            'begin' => 'Para fijar el importe del salario en cada clase de trabajo, se deben tomar en cuenta la intensidad y calidad del mismo, clima y',
            'description1' => '<span class="opNum">1.</span> <span>Para fijar el importe del salario en cada clase de trabajo, se deben tomar en cuenta la intensidad y calidad del mismo, clima y condiciones de vida.</span><br>
            <span class="opNum">2.</span> <span>A trabajo igual, desempeñado en puesto y condiciones de eficiencia y antigüedad dentro de la misma empresa, también iguales, corresponderá salario igual, el que debe comprender los pagos que se hagan al trabajador a cambio de su labor ordinaria.</span><br>
            En las demandas que entablen las trabajadoras relativas a la discriminación salarial por razón de sexo, queda el patrono obligado a demostrar que el trabajo que realiza la demandante es de inferior calidad y valor.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '90',
            'name' => 'Artículo 90',
            'begin' => 'El salario debe pagarse exclusivamente en moneda de curso legal. Se prohíbe pagar el salario, total o parcialmente, en mercadería',
            'description1' => 'El salario debe pagarse exclusivamente en moneda de curso legal.<br>
            Se prohíbe pagar el salario, total o parcialmente, en mercadería, vales, fichas, cupones o cualquier otro signo representativo con que se pretenda sustituir la moneda. Las sanciones legales se deben aplicar en su máximum cuando las órdenes de pago sólo sean canjeables por mercaderías en determinados establecimientos.<br>
            Es entendido que la prohibición que precede no comprende la entrega de vales, fichas u otro medio análogo de cómputo del salario, siempre que al vencimiento de cada período de pago el patrono cambie el equivalente exacto de unos u otras en moneda de curso legal.',
            'description2' => '<span class="opNum">1.</span> <span>No obstante las disposiciones anteriores, los trabajadores campesinos que laboren en explotaciones agrícolas o ganaderas pueden percibir el pago de su salario, hasta en un treinta por ciento del importe total de éste como máximum, en alimentos y demás artículos análogos destinados a su consumo personal inmediato o al de sus familiares que vivan y dependan económicamente de él, siempre que el patrono haga el suministro a precio de costo o menos.</span><br>
            <span class="opNum">2.</span> <span>Asimismo, las ventajas económicas, de cualquier naturaleza que sean, que se otorguen a los trabajadores en general por la prestación de sus servicios, salvo pacto en contrario, debe entenderse que constituyen el treinta por ciento del importe total del salario devengado.</span>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '91',
            'name' => 'Artículo 91',
            'begin' => 'El monto del salario debe ser determinado por patronos y trabajadores, pero no puede ser inferior al que se fije como mínimo',
            'description1' => 'El monto del salario debe ser determinado por patronos y trabajadores, pero no puede ser inferior al que se fije como mínimo de acuerdo con el capítulo siguiente.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '92',
            'name' => 'Artículo 92',
            'begin' => 'Patronos y trabajadores deben fijar el plazo para el pago del salario, sin que dicho plazo pueda ser mayor',
            'description1' => '<span class="opNum">1.</span> <span>Patronos y trabajadores deben fijar el plazo para el pago del salario, sin que dicho plazo pueda ser mayor de una quincena para los trabajadores manuales, ni de un mes para los trabajadores intelectuales y los servicios domésticos.</span><br>
            Si el salario consiste en participación en las utilidades, ventas o cobros que haga el patrono, se debe señalar una suma quincenal o mensual que ha de recibir el trabajador, la cual debe ser proporcionada a las necesidades de éste y el monto probable de la participación que le llegue a corresponder. La liquidación definitiva se debe hacer por lo menos cada año.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '94',
            'name' => 'Artículo 94',
            'begin' => 'El salario debe pagarse directamente al trabajador o a la persona de su familia que él indique por escrito o en acta levantada por una',
            'description1' => 'El salario debe pagarse directamente al trabajador o a la persona de su familia que él indique por escrito o en acta levantada por una autoridad de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '95',
            'name' => 'Artículo 95',
            'begin' => 'Salvo convenio escrito en contrario, el pago del salario debe hacerse en el propio lugar donde los trabajadores presten sus',
            'description1' => '<span class="opNum">1.</span> <span>Salvo convenio escrito en contrario, el pago del salario debe hacerse en el propio lugar donde los trabajadores presten sus servicios y durante las horas de trabajo o inmediatamente después de que éstas concluyan.</span><br>
            Se prohíbe pagar el salario en lugares de recreo, expendios comerciales o de bebidas alcohólicas u otros análogos, salvo que se trate de trabajadores que laboren en esa clase de establecimientos.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '96',
            'name' => 'Artículo 96',
            'begin' => 'Se declaran inembargables: a) Los salarios mínimos y los que sin serlo no excedan de treinta quetzales al mes;',
            'description1' => 'Se declaran inembargables:<br>
            a) Los salarios mínimos y los que sin serlo no excedan de treinta quetzales al mes;<br>
            b) El noventa por ciento de los salarios mayores de treinta quetzales o más, pero menores de cien quetzales al mes;<br>
            c) El ochenta y cinco por ciento de los salarios de cien quetzales o más, pero menores de doscientos quetzales al mes;<br>
            d) El ochenta por ciento de los salarios de doscientos quetzales o más, pero menores de trescientos quetzales al mes; y<br>
            e) El sesenta y cinco por ciento de los salarios mensuales de trescientos quetzales o más.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '97',
            'name' => 'Artículo 97',
            'begin' => 'No obstante lo dispuesto en el Artículo anterior, son embargables toda clase de salarios, hasta en un cincuenta por ciento',
            'description1' => '<span class="opNum">1.</span> <span>No obstante lo dispuesto en el Artículo anterior, son embargables toda clase de salarios, hasta en un cincuenta por ciento, para satisfacer obligaciones de pagar alimentos presentes o los que se deben desde los seis meses anteriores al embargo.</span><br>
            Tanto en el caso de embargos para satisfacer obligaciones de pago de alimentos a que se refiere el párrafo anterior, como en el caso de embargo por otras obligaciones, el mandamiento, así como las diligencias respectivas, contendrán la prevención, a quien deba cubrir los salarios, de que aun cuando el mismo salario sea objeto de varios embargos, se deje libre en beneficio del ejecutado la parte no embargable, al tenor de lo dispuesto en este Artículo o en el precedente.',
            'description2' => 'Los embargos por alimentos tendrán prioridad sobre los demás embargos y en ningún caso podrán hacerse efectivos dos embargos simultáneamente en la proporción indicada en este Artículo y en la proporción del citado Artículo 96, pues cuando se hubiere cubierto la proporción máxima que indica el Artículo citado últimamente, sólo podrá embargarse hasta el diez por ciento más para satisfacer las demás obligaciones.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '98',
            'name' => 'Artículo 98',
            'begin' => 'Como protección adicional del salario se declaran también inembargables los instrumentos, herramientas o útiles del trabajador que sean',
            'description1' => 'Como protección adicional del salario se declaran también inembargables los instrumentos, herramientas o útiles del trabajador que sean indispensables para ejercer su profesión u oficio, salvo que se trate de satisfacer deudas emanadas únicamente de la adquisición a crédito de los mismos.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '102',
            'name' => 'Artículo 102',
            'begin' => 'Todo patrono que ocupe permanentemente a diez o más trabajadores, debe llevar un libro de salarios autorizado y sellado por el Departamento',
            'description1' => 'Todo patrono que ocupe permanentemente a diez o más trabajadores, debe llevar un libro de salarios autorizado y sellado por el Departamento Administrativo del Ministerio de Trabajo y Previsión Social 61 el que está obligado a suministrar modelos y normas para su debida impresión.<br>
            Todo patrono que ocupe permanentemente a tres o más trabajadores, sin llegar al límite de diez, debe llevar planillas de conformidad con los modelos que adopte el Instituto Guatemalteco de Seguridad Social.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '105',
            'name' => 'Artículo 105',
            'begin' => 'Adscrita al Ministerio de Trabajo y Previsión Social habrá una Comisión Nacional del Salario, organismo técnico y consultivo de las comisiones',
            'description1' => '<span class="opNum">1.</span> <span>Adscrita al Ministerio de Trabajo y Previsión Social habrá una Comisión Nacional del Salario, organismo técnico y consultivo de las comisiones paritarias, encargada de asesorar a dicho ministerio en la política general del salario.<br>
            En cada departamento o en cada circunscripción económica que determine el Organismo Ejecutivo, mediante acuerdo emanado por conducto del Ministerio de Trabajo y Previsión Social, debe haber una comisión paritaria de salarios mínimos integrada por dos patronos e igual número de trabajadores sindicalizados y por un inspector de trabajo, a cuyo cargo corre la presidencia de la misma.</span>',
            'description2' => 'Además, el Organismo Ejecutivo, mediante acuerdo emanado por el conducto expresado, puede crear comisiones paritarias de salarios mínimos para cada actividad intelectual, industrial, comercial, ganadera o agrícola, con jurisdicción en todo el país o en parte de él; y también para empresas determinadas que comprueben tener actividad en diversos departamentos o circunscripciones económicas y un número de trabajadores no menor de mil, en cuyo caso la jurisdicción de las comisiones se limita a la empresa de que se trate.<br>
            Igualmente queda facultado el Organismo Ejecutivo para aumentar el número de patronos y de trabajadores que han de integrar una o varias comisiones paritarias de salarios mínimos, siempre que la importancia del cometido de éstas así lo exija',
            'description3' => 'El Organismo Ejecutivo por conducto del Ministerio de Trabajo y Previsión Social, mediante acuerdo, dictará el reglamento que regule la organización y el funcionamiento de la Comisión Nacional del Salario y de las comisiones paritarias de salarios mínimos.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '106',
            'name' => 'Artículo 106',
            'begin' => 'Son requisitos indispensablespara ser miembro de una comisión paritaria de salario mínimo: a) Ser guatemalteco natural y ',
            'description1' => 'Son requisitos indispensablespara ser miembro de una comisión paritaria de salario mínimo:<br>
            a) Ser guatemalteco natural y ciudadano en ejercicio;<br>
            b) Tener más de veintiún años de edad;<br>
            c) Sabe leer y escribir;<br>
            d) Ser vecino del departamento de la circunscripción económica de que se trate, desde los tres años anteriores a su nombramiento o, en el caso del párrafo segundo del Artículo 105, ser actualmente trabajador o patrono en la actividad económica y pertenecer a la empresa respectiva y haberlo sido desde el año anterior a su designación;<br>
            e) No ser funcionario público, con excepción de lo dispuesto en el párrafo segundo del Artículo precedente; y<br>
            f) Tener buenos antecedentes de conducta y no haber sido sentenciado dentro de los tres años anteriores a su nombramiento, por violación a las leyes de trabajo o de previsión social.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '107',
            'name' => 'Artículo 107',
            'begin' => 'Patronos y trabajadores deben durar en sus cargos dos años, pueden ser reelectos y los han de desempeñar obligatoriamente, salvo que tengan más',
            'description1' => 'Patronos y trabajadores deben durar en sus cargos dos años, pueden ser reelectos y los han de desempeñar obligatoriamente, salvo que tengan más de sesenta años de edad o que demuestren, de modo fehaciente, y a juicio del Ministerio de Trabajo y Previsión Social, que carecen de tiempo para ejercer dichos cargos.<br>
            Todos los miembros de las comisiones paritarias de salarios mininos tienen derecho a devengar un salario mensual o una dieta por sesión celebrada, que en cada caso debe determinar el Ministerio de Trabajo y Previsión Social atendiendo a la importancia de sus labores y al tiempo que su cumplimiento les demanden.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '116',
            'name' => 'Artículo 116',
            'begin' => 'La jornada ordinaria de trabajo efectivo diurno no puede ser mayor de ocho horas diarias, ni exceder de un total de cuarenta',
            'description1' => '<span class="opNum">1.</span> <span>La jornada ordinaria de trabajo efectivo diurno no puede ser mayor de ocho horas diarias, ni exceder de un total de cuarenta y ocho horas a la semana.</span><br>
            <span class="opNum">2.</span> <span>La jornada ordinaria de trabajo efectivo nocturno no puede ser mayor de seis horas diarias, ni exceder de un total de treinta y seis horas a la semana.</span><br>
            <span class="opNum">3.</span> <span>Tiempo de trabajo efectivo es aquél en que el trabajador permanezca a las órdenes del patrono.</span><br>
            <span class="opNum">4.</span> <span>Trabajo diurno es el que se ejecuta entre las seis y las dieciocho horas de un mismo día.</span><br>
            <span class="opNum">5.</span> <span>Trabajo nocturno es el que se ejecuta entre las dieciocho horas de un día y las seis horas del día siguiente.</span>',
            'description2' => 'La labor diurna normal semanal será de cuarenta y cinco horas de trabajo efectivo, equivalente a cuarenta y ocho horas para los efectos exclusivos del pago de salario. Se exceptúan de esta disposición, los trabajadores agrícolas y ganaderos y los de las empresas donde labore un número menor de diez, cuya labor diurna normal semanal será de cuarenta y ocho horas de trabajo efectivo, salvo costumbre más favorable al trabajador. Pero esta excepción no debe extenderse a las empresas agrícolas donde trabajen quinientos o más trabajadores.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '117',
            'name' => 'Artículo 117',
            'begin' => 'La jornada ordinaria de trabajo efectivo mixto no puede ser mayor de siete horas diarias ni exceder de un total de cuarenta y dos horas',
            'description1' => 'La jornada ordinaria de trabajo efectivo mixto no puede ser mayor de siete horas diarias ni exceder de un total de cuarenta y dos horas a la semana.<br>
            Jornada mixta es la que se ejecuta durante un tiempo que abarca parte del período diurno y parte del período nocturno No obstante, se entiende por jornada nocturna la jornada mixta en que se laboren cuatro o más horas durante el período nocturno.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '119',
            'name' => 'Artículo 119',
            'begin' => 'La jornada ordinaria de trabajo puede ser continua o dividirse en dos o más períodos con intervalos de descansos que se adopten racionalmente',
            'description1' => 'La jornada ordinaria de trabajo puede ser continua o dividirse en dos o más períodos con intervalos de descansos que se adopten racionalmente a la naturaleza del trabajo de que se trate y a las necesidades del trabajador.<br>
            Siempre que se pacte una jornada ordinaria continua, el trabajador tiene derecho a un descanso mínimo de media hora dentro de esa jornada el que debe computarse como tiempo de trabajo efectivo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '121',
            'name' => 'Artículo 121',
            'begin' => 'El trabajo efectivo que se ejecute fuera de los límites de tiempo que determinan los Artículos anteriores para la jornada de ordinaria',
            'description1' => '<span class="opNum">1.</span> <span>El trabajo efectivo que se ejecute fuera de los límites de tiempo que determinan los Artículos anteriores para la jornada de ordinaria, o que exceda del límite inferior que contractualmente se pacte, constituye jornada extraordinaria y debe ser remunerada por lo menos con un cincuenta por ciento más de los salarios mínimos o de los salarios superiores a estos que hayan estipulado las partes.</span><br>
            No se consideran horas extraordinarias las que el trabajador ocupe en subsanar los errores imputables sólo a él cometidos durante la jornada ordinaria, ni las que sean consecuencia de su falta de actividad durante tal jornada, siempre que esto último le sea imputable.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '126',
            'name' => 'Artículo 126',
            'begin' => 'Todo trabajador tiene derecho a disfrutar de un día de descanso remunerado después de cada semana de trabajo. La semana se computará',
            'description1' => '<span class="opNum">1.</span> <span>Todo trabajador tiene derecho a disfrutar de un día de descanso remunerado después de cada semana de trabajo. La semana se computará de cinco a seis días según, costumbre en la empresa o centro de trabajo.</span><br>
            A quienes laboran por unidad de obra o por comisión, se les adicionará una sexta parte de los salarios totales devengados en la semana.<br>
            Para establecer el número de días laborados de quienes laboran por unidad de tiempo, serán aplicadas las reglas de los <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="c) La continuidad del trabajo no se interrumpe por enfermedad, vacaciones, licencias, huelga legal u otras causas análogas que según este Código suspenden y no terminan el contrato de trabajo; d) Es nula ipso jure la cláusula del contrato que tienda a interrumpir la continuidad de los servicios prestados o por prestarse;">incisos c) y d) del Artículo 82.</a>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '127',
            'name' => 'Artículo 127',
            'begin' => 'Son días de asueto con goce de salario para los trabajadores particulares: el 1o. de enero; el Jueves, Viernes y Sábado Santos',
            'description1' => '<span class="opNum">1.</span> <span>Son días de asueto con goce de salario para los trabajadores particulares: el 1o. de enero; el Jueves, Viernes y Sábado Santos; el 1o. de mayo, el 30 de junio, el 15 de septiembre, el 20 de octubre, el 1o. de noviembre, el 24 de diciembre, mediodía, a partir de las doce horas, el 25 de diciembre, el 31 de diciembre, mediodía, a partir de las doce horas,</span> <span class="opNum">2.</span> <span>y el día de la festividad de la localidad.</span><br>
            El patrono esta obligado a pagar el día de descanso semanal, aún cuando en una misma semana coincidan uno o más días de asueto, y así mismo cuando coincidan un día de asueto pagado y un día de descanso semanal.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '129',
            'name' => 'Artículo 129',
            'begin' => 'El pago de los días de descanso semanal o de los días de asueto se debe hacer de acuerdo con el promedio diario de salarios',
            'description1' => 'El pago de los días de descanso semanal o de los días de asueto se debe hacer de acuerdo con el promedio diario de salarios ordinarios y extraordinarios que haya devengado el trabajador durante la semana inmediata anterior al descanso o asueto de que se trate. Es entendido que cuando el salario se estipule por quincena o por mes, incluye en forma implícita el pago de los días de descanso semanal o de los días de asueto que no se trabajen.<br>
            En el caso del párrafo anterior, si dichos días se trabajan, el pago de los mismos debe hacerse computando el tiempo trabajado como extraordinario, de conformidad con los salarios ordinarios y extraordinarios que haya devengado el trabajador durante la última quincena o mes, según corresponda.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '130',
            'name' => 'Artículo 130',
            'begin' => 'Todo trabajador sin excepción, tiene derecho a un período de vacaciones remuneradas después de cada año de trabajo continuo al',
            'description1' => 'Todo trabajador sin excepción, tiene derecho a un período de vacaciones remuneradas después de cada año de trabajo continuo al servicio de un mismo patrono, cuya duración mínima es de quince días hábiles. El hecho de la continuidad del trabajo se determina conforme a las reglas de los <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="bottom" data-content="c) La continuidad del trabajo no se interrumpe por enfermedad, vacaciones, licencias, huelga legal u otras causas análogas que según este Código suspenden y no terminan el contrato de trabajo; d) Es nula ipso jure la cláusula del contrato que tienda a interrumpir la continuidad de los servicios prestados o por prestarse;">incisos c) y d) del Artículo 82.</a>',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '131',
            'name' => 'Artículo 131',
            'begin' => 'Para que el trabajador tenga derecho a vacaciones, aunque el contrato no le exija trabajar todas las horas de la jornada',
            'description1' => 'Para que el trabajador tenga derecho a vacaciones, aunque el contrato no le exija trabajar todas las horas de la jornada ordinaria ni todos los días de la semana, deberá tener un minino de ciento cincuenta (150) días trabajados en el año. Se computarán como trabajados los días en que el trabajador no preste servicios por gozar de licencia retribuida, establecida por este Código o por Pacto Colectivo, por enfermedad profesional, enfermedad común o por accidente de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '132',
            'name' => 'Artículo 132',
            'begin' => 'El patrono debe señalar al trabajador la época en que dentro de los sesenta días siguientes a aquél en que se cumplió el año de servicio',
            'description1' => '<span class="opNum">1.</span> <span>El patrono debe señalar al trabajador la época en que dentro de los sesenta días siguientes a aquél en que se cumplió el año de servicio continuo, debe gozar efectivamente de sus vacaciones.</span> A ese efecto, debe tratar de que no se altere la buena marcha de la empresa ni la efectividad del descanso, así como evitar que se recargue el trabajo de los compañeros de labores del que está disfrutando de sus vacaciones.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '133',
            'name' => 'Artículo 133',
            'begin' => 'Las vacaciones no son compensables en dinero, salvo cuando el trabajador que haya adquirido el derecho a gozarlas no las haya disfrutado',
            'description1' => 'Las vacaciones no son compensables en dinero, salvo cuando el trabajador que haya adquirido el derecho a gozarlas no las haya disfrutado por cesar en su trabajo cualquiera que sea la causa. Se prohíbe al trabajador prestar sus servicios a cualquier persona durante el período de vacaciones.<br>
            Cuando el trabajador cese en su trabajo cualquiera que sea la causa, antes de cumplir un año de servicios continuos, o antes de adquirir el derecho a un nuevo período, el patrono debe compensarle en dinero la parte proporcional de sus vacaciones de acuerdo con su tiempo de servicio.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '139',
            'name' => 'Artículo 139',
            'begin' => 'Todo trabajo agrícola o ganadero desempeñado por mujeres o menores de edad con anuencia del patrono, da el carácter a aquéllas o a éstos',
            'description1' => 'Todo trabajo agrícola o ganadero desempeñado por mujeres o menores de edad con anuencia del patrono, da el carácter a aquéllas o a éstos de trabajadores campesinos, aunque a dicho trabajo se le atribuya la calidad de coadyuvante o complementario de las labores que ejecute el trabajador campesino jefe de familia. En consecuencia, esos trabajadores campesinos se consideran vinculados al expresado patrono por un contrato de trabajo.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '315',
            'name' => 'Artículo 315',
            'begin' => 'Las acciones para obtener la disolución o alguna prestación de las organizaciones sindicales, se deben entablar ante el juez de la zona jurisdiccional',
            'description1' => '<span class="opNum">1.</span> <span>Las acciones para obtener la disolución o alguna prestación de las organizaciones sindicales, se deben entablar ante el juez de la zona jurisdiccional a que corresponde el lugar del domicilio de éstas.</span><br>
            Sin embargo, se estará a lo dispuesto en el Artículo anterior cuando las organizaciones sindicales actuaren como patronos en caso determinado.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '351',
            'name' => 'Artículo 351',
            'begin' => 'La tacha de testigos no interrumpirá el trámite de juicio y el juez se pronunciará expresamente sobre ella al dictar sentencia. Se admitirá dentro de las veinticuatro horas ',
            'description1' => '<span class="opNum">1.</span> La tacha de testigos no interrumpirá el trámite de juicio y el juez se pronunciará expresamente sobre ella al dictar sentencia.<br>
            Se admitirá dentro de las veinticuatro horas siguientes a la declaración de que se trate y la prueba para establecerse se recibirá en la propia audiencia o en la inmediata que se señale para recepción de pruebas del juicio o en auto para mejor proveer, si ya se hubiere agotado la recepción de estas pruebas. No es causa de la tacha la subordinación del testigo derivada del contrato de trabajo, pero si lo será, si el testigo ejerce funciones de dirección, de representación o de confianza en la empresa de que se trate, si fuere propuesto por ésta.',
            'description2' => 'Se consideran cargos de dirección aquellos en cuyo desempeño se dicten resoluciones que obliguen a todo o a la mayor parte del personal de una empresa, departamento o sección de la misma.<br>
            Son cargos de representación los que traen consigo la actuación de la voluntad del patrono e implican alta jerarquía o dignidad o la delegación de funciones que en principio corresponden a aquél.<br>
            Se consideran cargos de confianza aquéllos para cuyo ejercicio es básico que quien los desempeñe tenga idoneidad moral reconocida, y corrección o discreción suficientes para no comprometer la seguridad de la respectiva empresa.',
            'code_id' => 1
        ]);

        DB::table('articles')->insert([
            'number' => '1',
            'name' => 'Artículo 1. Aplicabilidad',
            'begin' => 'Los comerciantes en su actividad profesional, los negocios jurídicos mercantiles y cosas mercantiles, se regirán pos las disposiciones de',
            'description1' => 'Los comerciantes en su actividad profesional, los negocios jurídicos mercantiles y cosas mercantiles, se regirán pos las disposiciones de este Código y, en su defecto, por las del Derecho Civil que se aplicarán e interpretarán de conformidad con los principios que inspira el Derecho Mercantil.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '2',
            'name' => 'Artículo 2. Comerciantes',
            'begin' => 'Son comerciantes quienes ejercen en nombre propio y con fines de lucro, cualesquiera actividades que se refieren a lo siguiente',
            'description1' => 'Son comerciantes quienes ejercen en nombre propio y con fines de lucro, cualesquiera actividades que se refieren a lo siguiente:<br>
            1o. La industria dirigida a la producción o transformación de bienes y a la prestación de servicios.<br>
            2o. La intermediación en la circulación de bienes y a la prestación de servicios.<br>
            3o. La Banca, seguros y fianzas.<br>
            4o. Las auxiliares de las anteriores.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '4',
            'name' => 'Artículo 4. Cosas Mercantiles',
            'begin' => 'Son cosas mercantiles: 1o. Los títulos de crédito.2o. La empresa mercantil y sus elementos. 3o. Las patentes de invención y de modelo',
            'description1' => 'Son cosas mercantiles:<br>
            1o. Los títulos de crédito.<br>
            2o. La empresa mercantil y sus elementos.<br>
            3o. Las patentes de invención y de modelo, las marcas, los nombres, los avisos y anuncios comerciales.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '5',
            'name' => 'Artículo 5. Negocio Mixto',
            'begin' => 'Cuando en un negocio jurídico regido por este Código intervengan comerciantes y no comerciantes, se aplicarán las',
            'description1' => 'Cuando en un negocio jurídico regido por este Código intervengan comerciantes y no comerciantes, se aplicarán las disposiciones del mismo.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '6',
            'name' => 'Artículo 6. Capacidad',
            'begin' => 'Tienen capacidad para ser comerciantes las personas individuales y jurídicas que, conforme al Código Civil, son hábiles',
            'description1' => 'Tienen capacidad para ser comerciantes las personas individuales y jurídicas que, conforme al Código Civil, son hábiles para contratar y obligarse.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '9',
            'name' => 'Artículo 9. No son comerciantes',
            'begin' => 'No son comerciantes: 1o. Los que ejercen una profesión liberal. 2o. Los que desarrollen actividades agrícolas, pecuarias o similares en cuanto',
            'description1' => 'No son comerciantes:<br>
            1o. Los que ejercen una profesión liberal.<br>
            2o. Los que desarrollen actividades agrícolas, pecuarias o similares en cuanto se refiere al cultivo y transformación de los productos de su propia empresa.<br>
            3o. Los artesanos que sólo trabajen por encargo o que no tengan almacén o tienda para el expendio de sus productos.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '10',
            'name' => 'Artículo 10. Sociedades Mercantiles',
            'begin' => 'Son sociedades organizadas bajo forma mercantil, exclusivamente las siguientes: 1o. La sociedad colectiva.',
            'description1' => 'Son sociedades organizadas bajo forma mercantil, exclusivamente las siguientes:<br>
            1o. La sociedad colectiva.<br>
            2o. La sociedad en comandita simple.<br>
            3o. La sociedad de responsabilidad limitada.<br>
            4o. La sociedad anónima.<br>
            5o. La sociedad en comandita por acciones.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '14',
            'name' => 'Artículo 14. Personalidad Jurídica',
            'begin' => 'La sociedad mercantil constituida de acuerdo a las disposiciones de este Código e inscrita en el Registro Mercantil, tendrá personalidad',
            'description1' => 'La sociedad mercantil constituida de acuerdo a las disposiciones de este Código e inscrita en el Registro Mercantil, tendrá personalidad jurídica propia y distinta de la de los socios individualmente considerados.<br>
            Para la constitución de sociedades, la persona o personas que comparezcan como socios fundadores, deberán hacerlo por sí o en representación de otro, debiendo en este caso, acreditar tal calidad en la forma legal. Queda prohibida la comparecencia como gestor de negocios.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '16',
            'name' => 'Artículo 16. Solemnidad de la Sociedad',
            'begin' => 'La constitución de la sociedad y todas sus modificaciones, incluyendo prórrogas, aumento o reducción de capital, cambio de razón',
            'description1' => 'La constitución de la sociedad y todas sus modificaciones, incluyendo prórrogas, aumento o reducción de capital, cambio de razón social o denominación, fusión, disolución o cualesquiera otras reformas o ampliaciones, se harán constar en escritura pública. La separación o ingreso de socios en las sociedades no accionadas, también se formalizará en escritura pública.<br>
            <span class="opNum">1.</span> <span>Salvo en las sociedades por acciones, la modificación de la escritura constitutiva requerirá el voto unánime de los socios.</span> Sin embargo, podrá pactarse que la escritura social pueda modificarse por resolución, tomada por la mayoría que la propia escritura determine, pero en este caso la minoría tendrá derecho a separarse de la sociedad.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '17',
            'name' => 'Artículo 17. Registro',
            'begin' => 'El testimonio de la escritura constitutiva, el de ampliación y sus modificaciones, deberá presentarse al Registro Mercantil',
            'description1' => 'El testimonio de la escritura constitutiva, el de ampliación y sus modificaciones, deberá presentarse al Registro Mercantil, dentro del mes siguiente a la fecha de la escritura.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '19',
            'name' => 'Artículo 19. Situaciones Especiales',
            'begin' => 'Los cónyuges pueden constituir entre sí y con terceros, sociedad mercantil. Los extranjeros y las sociedades extranjeras, aunque tengan',
            'description1' => '<span class="opNum">1.</span> <span>Los cónyuges pueden constituir entre sí y con terceros, sociedad mercantil.</span><br>
            Los extranjeros y las sociedades extranjeras, aunque tengan domicilio en Guatemala, podrán participar como socios o accionistas de sociedades de cualquier forma, salvo lo dispuesto en este Código o en leyes especiales.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '20',
            'name' => 'Artículo 20. Tutor y Guardador',
            'begin' => 'El tutor y el guardador no pueden constituir sociedad con sus representados, mientras no haya terminado la minoría de edad',
            'description1' => 'El tutor y el guardador no pueden constituir sociedad con sus representados, mientras no haya terminado la minoría de edad o la incapacidad y estén aprobadas las cuentas de la tutela y canceladas las garantías.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '21',
            'name' => 'Artículo 21. Declarados en Quiebra',
            'begin' => 'No pueden constituir sociedad los declarados en quiebra, mientras no hayan sido rehabilitados.',
            'description1' => 'No pueden constituir sociedad los declarados en quiebra, mientras no hayan sido rehabilitados.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '22',
            'name' => 'Artículo 22. Sociedad con Menores e Incapaces',
            'begin' => 'Por los menores e incapaces sólo podrán sus representantes constituir sociedad, previa autorización judicial por utilidad',
            'description1' => '<span class="opNum">1.</span> <span>Por los menores e incapaces sólo podrán sus representantes constituir sociedad, previa autorización judicial por utilidad comprobada.</span><br>
            La responsabilidad de los menores o incapaces se limitará al monto de su respectiva aportación.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '23',
            'name' => 'Artículo 23. Adquisición de Acciones por Menores',
            'begin' => 'Los representantes legales de menores, incapaces o ausentes, pueden adquirir para sus representados, acciones de sociedades anónimas',
            'description1' => 'Los representantes legales de menores, incapaces o ausentes, pueden adquirir para sus representados, acciones de sociedades anónimas o en comandita, siempre que estén totalmente pagadas y se llenen los requisitos que la ley señala para la inversión de fondos de éstos.',
            'code_id' => 2
        ]);

        DB::table('articles')->insert([
            'number' => '24',
            'name' => 'Artículo 24. Plazo',
            'begin' => 'El plazo de la sociedad principia desde la fecha de inscripción de la misma en el Registro Mercantil. Las sociedades mercantiles pueden',
            'description1' => 'El plazo de la sociedad principia desde la fecha de inscripción de la misma en el Registro Mercantil. Las sociedades mercantiles pueden constituirse para plazo indefinido.',
            'code_id' => 2
        ]);

    }
}
