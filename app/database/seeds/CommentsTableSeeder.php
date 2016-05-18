<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'description1' => '<strong>Principios informativos del derecho de trabajo:</strong><br>
            <span class="opNum">1.</span> Primer principio: principio de tutelaridad<br>
            <span class="opNum">2.</span> Segundo principio<br>
            <span class="opNum">3.</span> Tercer principio: principio irrenunciable<br>
            <span class="opNum">4.</span> Cuarto principio: Principio de superación de derecho mínimo.',
            'description2' => '<span class="opNum">5.</span> Quinto principio: Principio de imperatividad<br>
            <span class="opNum">6.</span> Sexto principio: Principio de la Autonomía de la Voluntad Civil (El principio de imperatividad limita al principio de la Autonomía de la Voluntad Civil)',
            'description3' => '<span class="opNum">7.</span> Séptimo principio: Principio realista<br>
            <span class="opNum">8.</span> Octavo principio: Principio objetivo<br>
            <span class="opNum">9.</span> Noveno principio: Principio de la naturaleza jurídica',
            'description4' => '<span class="opNum">10.</span> Décimo principio: Derecho ondeamente democrático<br>
            <span class="opNum">11.</span> Onceavo Principio: Principio de conciliación (Agregado)<br>
            <span class="opNum">12.</span> Doceavo Principio: IN DUBIO PRO OPERARIO Articulo 17 Código de trabajo <a href="#codeWork" data-search="Artículo 17" class="linkGo">Ir a Artículo 17.</a>',
            'article_id' => '1'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Elementos personales del trabajo:</strong><br>
            <ol>
            <li>Patrono</li>
            <li>Trabajador</li>
            <li><span class="opNum">1.</span> Auxiliares del patrono:</li>
                <ul><li><span class="opNum">2.</span> Representante del patrono</li>
                <li>Empleados de confianza <a href="#codeWork" data-search="Artículo 351" class="linkGo">Ir a Artículo 351</a></li>
                <li>Cargos de dirección <a href="#codeWork" data-search="Artículo 315" class="linkGo">Ir a Artículo 315</a></li>
                <li>Intermediario <a href="#codeWork" data-search="Artículo 5" class="linkGo">Ir a Artículo 5.</a></li></ul>
            </ol>',
            'article_id' => '2'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Elementos personales del trabajo:</strong><br>
            <ol>
            <li>Patrono</li>
            <li>Trabajador</li>
            <li>Auxiliares del patrono: <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <ul><li>Representante del patrono <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <li>Empleados de confianza <a href="#codeWork" data-search="Artículo 351" class="linkGo">Ir a Artículo 351</a></li>
                <li>Cargos de dirección <a href="#codeWork" data-search="Artículo 315" class="linkGo">Ir a Artículo 315</a></li>
                <li><span class="opNum">1.</span> Intermediario</li></ul>
            </ol>',
            'article_id' => '3'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Medidas de protección del salario:</strong><br>
            <p>El articulo 7 contiene el fundamento de las medidas de protección del salario.</p>',
            'article_id' => '4'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Nulidad del contrato individual del trabajo:</strong><br>
            El articulo 12 contiene el fundamento de la nulidad del contrato individual del trabajo y el pleno derecho.<br>
            <strong>Ipso Jure: </strong>"de pleno derecho" o "de pleno derecho por poder potestad o ministerio de la ley."',
            'article_id' => '5'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>El articulo 15 responde la siguiente interrogante:</strong><br>
            <span class="opNum">1.</span> ¿Como se integra el sistema de interpretación de las normas?',
            'article_id' => '6'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Principios informativos del derecho de trabajo :</strong> <a href="#codeWork" data-search="Considerando" class="linkGo">Ir a Considerando.</a><br>
            <span class="opNum">1.</span> Doceavo Principio: IN DUBIO PRO OPERARIO',
            'article_id' => '7'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Definición del contrato de trabajo:</strong><br>
            <span class="opNum">1.</span> Contrato de trabajo',
            'article_id' => '8'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Lo que debe suceder para que el contrato individual de trabajo exista.<br>
            <span class="opNum">2.</span> Definición de relación de trabajo.',
            'article_id' => '9'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Efectos del contrato individual del trabajo.<br>
            <span class="opNum">2.</span> Elementos de las condiciones de trabajo.',
            'article_id' => '10'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Principio de derechos minimos.</strong>',
            'article_id' => '11'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Substitución total del patrono.</strong>',
            'article_id' => '12'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Clasificación de contratos de trabajo:</strong><br>
            <span class="opNum">1.</span> 1. Por el plazo de su celebración.<br>
            2. Por su forma de celebración:
                <ul>
                    <li>Escritos</li>
                    <li>Verbales</li>
                </ul>
            <strong>Nota:</strong> El contrato tipo en el derecho de trabajo es el contrato por Tiempo Indefinido.',
            'article_id' => '13'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Es a lo que se le conoce como contrato tipo.</strong>',
            'article_id' => '14'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Lo que debe contener la tarjeta de trabajo cuando el contrato se celebra de forma verbal.</strong>',
            'article_id' => '15'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>La plena prueba.</strong>',
            'article_id' => '16'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Lo que debe contener un contrato de trabajo.</strong>',
            'article_id' => '17'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Principio de tutelaridad.</strong>',
            'article_id' => '18'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Excepción para contratar menores de edad.',
            'article_id' => '19'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Contrato de trabajo de menores de edad.',
            'article_id' => '20'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Definición de reglamento interior del trabajo.',
            'article_id' => '21'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Cuando elaborar y poner a la vista el Reglamento interior de trabajo.</strong>',
            'article_id' => '22'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Que debe contener el reglamento general de trabajo (Reglamento interior de trabajo).</strong>',
            'article_id' => '23'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Derecho a botar.<br>
            <span class="opNum">2.</span> Permisos.',
            'article_id' => '24'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Prohibiciones de los patronos.</strong>',
            'article_id' => '25'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Obligaciones de los trabajadores.</strong>',
            'article_id' => '26'
        ]);

        DB::table('comments')->insert([
            'description1' => 'Suspención de contratos de trabajo:<br>
            <span class="opNum">1.</span> Individual Parcial. <a href="#codeWork" data-search="Artículo 66" class="linkGo">Causas Artículo 66.</a><br>
            <span class="opNum">2.</span> Individual Total. <a href="#codeWork" data-search="Artículo 68" class="linkGo">Causas Artículo 68.</a><br>
            <span class="opNum">3.</span> Colectiva Parcial. <a href="#codeWork" data-search="Artículo 70" class="linkGo">Causas Artículo 70.</a><br>
            <span class="opNum">4.</span> colectiva Total. <a href="#codeWork" data-search="Artículo 71" class="linkGo">Causas Artículo 71.</a>',
            'article_id' => '27'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Causas de Suspención Individual Parcial.</strong>',
            'article_id' => '28'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Causas de Suspención Individual Total.</strong>',
            'article_id' => '29'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Este artículo contiene las causas de Suspención Colectiva Parcial.</strong><br>
            <span class="opNum">1.</span> La huelga legalmente declarada también se conoce como huelga legal justa.<br>
            La huelga legal justa debe ser declarada por un juez.',
            'article_id' => '30'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Causas de Suspención Colectiva Total.</strong>',
            'article_id' => '31'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong> Tres causas terminación de los contratos de trabajo:</strong><br>
            <span class="opNum">1.</span> Primera Causa<br>
            <span class="opNum">2.</span> Segunda Causa<br>
            <span class="opNum">3.</span> Tercera Causa (Despido)',
            'article_id' => '32'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Despido directo justificado.</strong>',
            'article_id' => '33'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Despido directo injustificado.</strong><br>
            <span class="opNum">1.</span> Ver <a href="#codeWork" data-search="Artículo 260" class="linkGo">Artículo 260</a> del Código de Trabajo.<br>
            <span class="opNum">2.</span> Indemnización por tiempo servido.',
            'article_id' => '34'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Causas del despido indirecto.</strong>',
            'article_id' => '35'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Periodo de prueba.',
            'article_id' => '36'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Indemnización por tiempo servido.<br>
            <span class="opNum">2.</span> Despido IVS (Invalidez o vejez).',
            'article_id' => '37'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Renuncia igual a preaviso, cuando el empleado renuncia debe dar preaviso.</strong>',
            'article_id' => '38'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Que debe contener el documento que el patrono proporciona al trabajador al terminar el contrato de trabajo.</strong>',
            'article_id' => '40'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>El fin del contrato de trabajo sin responsabilidad para las partes.</strong><br>
            d) Durante periodo de prueba. (Agregado)',
            'article_id' => '39'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>El fin del contrato de trabajo sin responsabilidad para las partes.</strong><br>
            d) Durante periodo de prueba. (Agregado)',
            'article_id' => '39'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Que debe contener el documento que el patrono proporciona al trabajador al terminar el contrato de trabajo.</strong>',
            'article_id' => '40'
        ]);

DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Definición de salario.<br>
            <span class="opNum">2.</span> Sistema de calculo de salario.<br>
            d) Precio alzado o a destajo. (Agregado)<br>
            e) Salario en especie. (Agregado)',
            'article_id' => '41'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Principio de remuneración equitativa.<br>
            <span class="opNum">2.</span> Principio de igualdad salarial.',
            'article_id' => '42'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Salario en especie, forma de pago del salario.</strong><br>
            <span class="opNum">1.</span> Maximun en porcentaje de salario que se puede pagar en especie.<br>
            <span class="opNum">2.</span> Ventajas económicas.',
            'article_id' => '43'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Obligación del patrono a pagar salario mínimo.</strong>',
            'article_id' => '44'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Periodo de pago.</strong>',
            'article_id' => '45'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Obligación de pagar directamente el salario al trabajador o familiar.</strong>',
            'article_id' => '46'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Obligación de pagar el salario en el lugar de trabajo.',
            'article_id' => '47'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Medidas protectoras del salario:</strong><br>
            Invalidad del salario. <a href="#codeWork" data-trigger="hover" data-toggle="popover" data-container="body" data-placement="top" data-content="e. Inembargabilidad del salario en los casos determinados por la ley. Los implementos personales de trabajo no podrán ser embargados por ningún motivo. No obstante, para protección de la familia del trabajador y por orden judicial, sí podrá retenerse y entregarse parte del salario a quien corresponda;">ver articulo 102 literal E</a> de la Constitución de la República de Guatemala.',
            'article_id' => '48'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Embargables toda clase de salarios, hasta 50%.</strong>',
            'article_id' => '49'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Inembargabilidad de herramientas de trabajo.</strong>',
            'article_id' => '50'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Libro de pago de salario.</strong>',
            'article_id' => '51'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Órganos que fijan el salario mínimo:</strong><br>
            <ol>
                <li>Comisión Nacional del Trabajo.</li>
                <li>Comisión Paritaria de Salarios mínimos.</li>
                <li>El Presidente de la República.</li>
            </ol>',
            'article_id' => '52'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Requisitos indispensables para ser miembro de una comisión paritaria del salario.</strong>',
            'article_id' => '53'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Reelección para el cargo en la comisión paritaria del salario.</strong>',
            'article_id' => '54'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Definición de jornada de trabajo:</strong> Es el tiempo que el trabajador se desempeña efectivamente al servicio del empleador.<br>
            <span class="opNum">1.</span> Clasificación de las jornadas de trabajo.<br>
            <span class="opNum">2.</span> Definición de tiempo de trabajo.<br>
            <span class="opNum">3.</span> Trabajo Diurno.<br>
            <span class="opNum">4.</span> Trabajo Nocturno.',
            'article_id' => '55'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Jornada Mixta.</strong>',
            'article_id' => '56'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Tipos de jornadas:</strong><br>
            <ol>
                <li>Continua.</li>
                <li>Discontinua.</li>
            </ol>',
            'article_id' => '57'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Jornada Extraordinaria.</strong>',
            'article_id' => '58'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Clasificación de los descansos:</strong><br>
            <ol>
                <li><span class="opNum">1.</span> Diario. 
                    <ul>
                        <li>Asueto. <a href="#codeWork" data-search="Artículo 127" class="linkGo">Ir a Artítulo 127</a></li>
                        <li>Feriado. <a href="#codeWork" data-search="Artículo 127" class="linkGo">Ir a Artítulo 127</a></li>
                    </ul>
                </li>
                <li>Descanso Semanal. <a href="#codeWork" data-search="Artículo 129" class="linkGo">Ir a Artítulo 129</a></li>
                <li>Descanso Anual. <a href="#codeWork" data-search="Artículo 130" class="linkGo">Ir a Artítulo 130</a></li>
            </ol>',
            'article_id' => '59'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Clasificación de los descansos:</strong><br>
            <ol>
                <li>Diario. <a href="#codeWork" data-search="Artículo 126" class="linkGo">Ir a Artítulo 126</a>
                    <ul>
                        <li><span class="opNum">1.</span> Asueto.</li>
                        <li><span class="opNum">2.</span> Feriado.</li>
                    </ul>
                </li>
                <li>Descanso Semanal. <a href="#codeWork" data-search="Artículo 129" class="linkGo">Ir a Artítulo 129</a></li>
                <li>Descanso Anual. <a href="#codeWork" data-search="Artículo 130" class="linkGo">Ir a Artítulo 130</a></li>
            </ol>',
            'article_id' => '60'
        ]);

        DB::table('comments')->insert([
            'description1' => '
            <ol>
                <li>Diario. <a href="#codeWork" data-search="Artículo 126" class="linkGo">Ir a Artítulo 126</a>
                    <ul>
                        <li>Asueto. <a href="#codeWork" data-search="Artículo 127" class="linkGo">Ir a Artítulo 127</a></li>
                        <li>Feriado. <a href="#codeWork" data-search="Artículo 127" class="linkGo">Ir a Artítulo 127</a></li>
                    </ul>
                </li>
                <li><strong>Descanso Semanal.</strong></li>
                <li>Descanso Anual. <a href="#codeWork" data-search="Artículo 130" class="linkGo">Ir a Artítulo 130</a></li>
            </ol>',
            'article_id' => '61'
        ]);

        DB::table('comments')->insert([
            'description1' => '
            <ol>
                <li>Diario. <a href="#codeWork" data-search="Artículo 126" class="linkGo">Ir a Artítulo 126</a>
                    <ul>
                        <li>Asueto. <a href="#codeWork" data-search="Artículo 127" class="linkGo">Ir a Artítulo 127</a></li>
                        <li>Feriado. <a href="#codeWork" data-search="Artículo 127" class="linkGo">Ir a Artítulo 127</a></li>
                    </ul>
                </li>
                <li>Descanso Semanal. <a href="#codeWork" data-search="Artículo 129" class="linkGo">Ir a Artítulo 129</a></li>
                <li><strong>Descanso Anual.</strong></li>
            </ol>',
            'article_id' => '62'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Derecho a gozar de vacaciones.</strong>',
            'article_id' => '63'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> El patrono debe señalar al trabajador la época de vacaciones.',
            'article_id' => '64'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Vacaciones Incompensables</strong>',
            'article_id' => '65'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Trabajadores Campesinos.</strong>',
            'article_id' => '66'
        ]);


        DB::table('comments')->insert([
            'description1' => '<strong>Los derechos de los trabajadores para reclamar en caso de despido directo injustificado.</strong>',
            'article_id' => '67'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Elementos personales del trabajo:</strong><br>
            <ol>
            <li>Patrono</li>
            <li>Trabajador</li>
            <li>Auxiliares del patrono: <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <ul><li>Representante del patrono <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <li>Empleados de confianza <a href="#codeWork" data-search="Artículo 351" class="linkGo">Ir a Artículo 351</a></li>
                <li><span class="opNum">1.</span> Cargos de dirección</li>
                <li>Intermediario <a href="#codeWork" data-search="Artículo 5" class="linkGo">Ir a Artículo 5.</a></li></ul>
            </ol>',
            'article_id' => '68'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Elementos personales del trabajo:</strong><br>
            <ol>
            <li>Patrono</li>
            <li>Trabajador</li>
            <li>Auxiliares del patrono: <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <ul><li>Representante del patrono <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <li><span class="opNum">1.</span> Empleados de confianza</li>
                <li>Cargos de dirección <a href="#codeWork" data-search="Artículo 315" class="linkGo">Ir a Artículo 315</a></li>
                <li>Intermediario <a href="#codeWork" data-search="Artículo 5" class="linkGo">Ir a Artículo 5.</a></li></ul>
            </ol>',
            'article_id' => '69'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Principios que inspiran el derecho mercantil:</strong><br>
            <ol>
                <li>La buena fe.</li>
                <li>La verdad sabida.</li>
                <li>Toda prestación se presume onerosa.</li>
                <li>Intención de lucro.</li>
                <li>Ante la duda debe favorecerse las soluciones que hagan mas segura la circulación.</li>
            </ol>',
            'description2' => '<strong>Fuentes del derecho mercantil: (agregado)</strong><br>
            <ol>
                <li>La constumbre.</li>
                <li>La jurisprudencia.</li>
                <li>La ley.</li>
                <li>La doctrina.</li>
                <li>Contrato.</li>
                <li>Principios generales del derecho.</li>
            </ol>',
            'article_id' => '70'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Definición de comerciantes.</strong>',
            'article_id' => '71'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Clasificación de las cosas mercantiles.</strong>',
            'article_id' => '72'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Definición de negocio mixto.</strong>',
            'article_id' => '73'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Quienes son capaces para ser comerciantes.</strong><br><br>
            <strong>Definición de capacidad segun la doctrina:</strong><br>
            Es la actitud legal para ser sujeto de derecho y obligaciones mercantiles.',
            'description2' => '<strong>Características del derecho mercantil: (agregado)</strong><br>
            <ol>
                <li>Es poco formalista.</li>
                <li>Inspira rapidez y libertad.</li>
                <li>Adaptabilidad.</li>
                <li>Tiende a hacer internacional.</li>
                <li>Posibilita la seguridad del trafico jurídico.</li>
            </ol>',
            'article_id' => '74'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Quienes no son comerciantes.</strong>',
            'article_id' => '75'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Sociedades mercantiles.</strong><br><br>
            <strong>Definición de sociedad mercantil según la doctrina:</strong><br>
            Es un grupo de personas que se unen con la finalidad de lucro mediante un contacto creando un patrimonio especifico y adoptando una forma mercantil.',
            'article_id' => '76'
        ]);

        DB::table('comments')->insert(['description1' => '<strong>Características de las sociedades mercantiles:</strong><br>
            <ol>
                <li>Consensual.</li>
                <li>Plurilateral.</li>
                <li>Principal.</li>
                <li>Oneroso.</li>
                <li>Obsoluto.</li>
                <li>De tracto sucesivo.</li>
                <li>Solemne.</li>
            </ol>',
            'description2' => '<strong>Elementos de la sociedad mercantil: (agregado)</strong><br>
            <ol>
                <li>Plurilaterales.</li>
                <li>Capacidad.</li>
                <li>Consentimiento.</li>
                <li>Objeto licito.</li>
                <li>Personal.</li>
                <li>Ganancia.</li>
                <li>Afecto societatis.</li>
            </ol>',
            'article_id' => '77'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Solemnidad de la sociedad.</strong>',
            'article_id' => '78'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Tiempo de registro.</strong>',
            'article_id' => '79'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Situaciones especiales (Cónyuges).</strong>',
            'article_id' => '80'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>El tutor y el guardador no pueden constituir sociedades con sus representados.</strong>',
            'article_id' => '81'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>En quiebra no se puede costituir sociedad.</strong>',
            'article_id' => '82'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Sociedad con menores e incapaces.</strong>',
            'article_id' => '83'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Acciones por menores.</strong>',
            'article_id' => '84'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>En que plazo sale a la vida juridica una sociedad.</strong>',
            'article_id' => '85'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>La prórroga de la sociedad.</strong>',
            'article_id' => '86'
        ]);

        DB::table('comments')->insert(['description1' => '<strong>Obligaciones del socio:</strong><br>
            <ol>
                <li>Obligaciones de hacer o dar el aporte.
                    <ul>
                        <li>Aporte de industria.</li>
                    </ul>
                </li>
                <li>Obligación de saneamiento.</li>
            </ol>',
            'article_id' => '87'
        ]);

        DB::table('comments')->insert(['description1' => '<strong>Aporte a capital:</strong><br>
            <ol>
                <li>Dinerario.</li>
                <li>No Dinerario.</li>
                <li>Obligación de no hacer.</li>
            </ol>',
            'article_id' => '88'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Derecho de contenido patrimonial.</strong>',
            'article_id' => '89'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Pacto leonino:</strong> no puede existir un socio que no participe en las ganancias.',
            'article_id' => '90'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>¿En que momento se distribuye la reserva legal de una sociedad?</strong> Hasta la liquidación de la sociedad.<br>
            <strong>Reserva Legal: </strong>Constituye el porcentaje de unidades netas de cada ejercicio de toda sociedad.<br>
            <strong>Reserva Voluntaria: </strong>Serán decididas por los socios y no están establecidas en la ley.<br>',
            'article_id' => '91'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Derecho del tanteo.</strong> ',
            'article_id' => '92'
        ]);

        DB::table('comments')->insert([
            'description1' => ' <strong>Facultades de los administradores.</strong>',
            'article_id' => '93'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Acto ultravides y actos excediéndose de facultades.</strong>',
            'article_id' => '94'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Sociedad Colectiva.</strong>',
            'article_id' => '95'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Limintación de responsabilidades.</strong>',
            'article_id' => '96'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Nombre de la Sociedad Colectiva.</strong>',
            'article_id' => '97'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Nombre de la razón social.</strong>',
            'article_id' => '98'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Organos de la sociedad colectiva: </strong><br>
            <ol>
                <li><strong>Organo de administración. (este artículo)</strong></li>
                <li>Organo de vigilancia. <a href="#codeCommercial" data-search="Artículo 64" class="linkGoCommercial">Artículo 64</a></li>
                <li>Organo de soberania. <a href="#codeCommercial" data-search="Artículo 65" class="linkGoCommercial">Artículo 65</a></li>
            </ol>',
            'article_id' => '99'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Organos de la sociedad colectiva: </strong><br>
            <ol>
                <li>Organo de administración. <a href="#codeCommercial" data-search="Artículo 63" class="linkGoCommercial">Artículo 63</a></li>
                <li><strong>Organo de vigilancia. (este artículo)</strong></li>
                <li>Organo de soberania. <a href="#codeCommercial" data-search="Artículo 65" class="linkGoCommercial">Artículo 65</a></li>
            </ol>',
            'article_id' => '100'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Organos de la sociedad colectiva: </strong><br>
            <ol>
                <li>Organo de administración. <a href="#codeCommercial" data-search="Artículo 63" class="linkGoCommercial">Artículo 63</a></li>
                <li>Organo de vigilancia. <a href="#codeCommercial" data-search="Artículo 64" class="linkGoCommercial">Artículo 64</a></li>
                <li><strong>Organo de soberania. (este artículo)</strong></li>
            </ol>',
            'article_id' => '101'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Junta Totalitaria.</strong>',
            'article_id' => '102'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Representación de los socios.</strong>',
            'article_id' => '103'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Sociedad en Comandita Simple.</strong>',
            'article_id' => '104'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Organos de la sociedad en comandita simple.</strong><br>
            <ol>
                <li><strong>Organo de administración. (este artículo)</strong></li>
                <li>Organo de soberania: es la junta de socios. <a href="#codeCommercial" data-search="Artículo 65" class="linkGoCommercial">Artículo 65</a></li>
                <li>Organo de fiscalización.</li>
                <li>Consejo vigilancia en su defecto todos los socios comanditarios.</li>
            </ol>',
            'article_id' => '105'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Inmixition.</strong>',
            'article_id' => '106'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Cuales no son actos de administración.</strong>',
            'article_id' => '107'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Muerte o incapacidad del administrador.</strong>',
            'article_id' => '108'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Sociedad de responsabilidad limitada.</strong>',
            'article_id' => '109'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Número de socios en la sociedad de responsabilidad limitada.</strong>',
            'article_id' => '110'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Razón o denominación social de la sociedad de responsabilidad limitada.</strong>',
            'article_id' => '111'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Organos de la socios en la sociedad de responsabilidad limitada.</strong><br>
            <ol>
                <li><strong>Organo de soberania. (este artículo)</strong></li>
                <li>Organo de administración. <a href="#codeCommercial" data-search="Artículo 82" class="linkGoCommercial">Artículo 82</a></li>
                <li>Organo de fiscalización. <a href="#codeCommercial" data-search="Artículo 83" class="linkGoCommercial">Artículo 83</a></li>
            </ol>',
            'description2' => '<strong>¿Que sucede si una sociedad de responsabilidad limitada no se hiciera constar de manera faciente que el capital a sido integrado y efectivamente pagado?</strong> el contrato sera nulo y los socios serán limitados y responsables de los perjuicios a terceros.',
            'article_id' => '112'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Organos de la socios en la sociedad de responsabilidad limitada.</strong><br>
            <ol>
                <li>Organo de soberania. <a href="#codeCommercial" data-search="Artículo 81" class="linkGoCommercial">Artículo 81</a></li>
                <li><strong>Organo de administración. (este artículo)</strong></li>
                <li>Organo de fiscalización. <a href="#codeCommercial" data-search="Artículo 83" class="linkGoCommercial">Artículo 83</a></li>
            </ol><br>
            <strong>Socio Industrial: </strong>El que aporta maquinaria.',
            'article_id' => '113'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Organos de la socios en la sociedad de responsabilidad limitada.</strong><br>
            <ol>
                <li>Organo de soberania. <a href="#codeCommercial" data-search="Artículo 81" class="linkGoCommercial">Artículo 81</a></li>
                <li>Organo de administración. <a href="#codeCommercial" data-search="Artículo 82" class="linkGoCommercial">Artículo 82</a></li>
                <li><strong>Organo de fiscalización. (este artículo)</strong></li>
            </ol>',
            'article_id' => '114'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Nombre de la razón social.</strong>',
            'article_id' => '115'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Otras disposiciones aplicables.</strong>',
            'article_id' => '116'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Sociedad anónima.</strong>',
            'article_id' => '117'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Denominación de la sociedad anónima.</strong>',
            'article_id' => '118'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Formas de capital.</strong><br>
            <ol>
                <li><strong>Capital autorizado. (este artículo)</strong></li>
                <li>Capital suscrito. <a href="#codeCommercial" data-search="Artículo 89" class="linkGoCommercial">Artículo 89</a></li>
                <li>Capital pagado mínimo. <a href="#codeCommercial" data-search="Artículo 90" class="linkGoCommercial">Artículo 90</a></li>
            </ol>',
            'article_id' => '119'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Formas de capital.</strong><br>
            <ol>
                <li>Capital autorizado. <a href="#codeCommercial" data-search="Artículo 88" class="linkGoCommercial">Artículo 88</a></li>
                <li><strong>Capital suscrito. (este artículo)</strong></li>
                <li>Capital pagado mínimo. <a href="#codeCommercial" data-search="Artículo 90" class="linkGoCommercial">Artículo 90</a></li>
            </ol>',
            'article_id' => '120'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Formas de capital.</strong><br>
            <ol>
                <li>Capital autorizado. <a href="#codeCommercial" data-search="Artículo 88" class="linkGoCommercial">Artículo 88</a></li>
                <li>Capital suscrito. <a href="#codeCommercial" data-search="Artículo 89" class="linkGoCommercial">Artículo 89</a></li>
                <li><strong>Capital pagado mínimo. (este artículo)</strong></li>
            </ol>',
            'article_id' => '121'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Titulos de acciones.<br><br>
            <strong>¿Qué son las acciones? </strong> son titulos valor que representan una parte ali-cuota del capital suscrito de una sociedad y otorgada a su tenedor la calidad de accionista.<br><br>
            <strong>La naturaleza juridica de la accion es bien mueble.</strong>',
            'article_id' => '122'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Derechos que generan las clases de acciones: </strong><br>
            <span class="opNum">1.</span> Acciones ordinarias.<br>
            <span class="opNum">2.</span> Acciones de derecho especial.',
            'article_id' => '123'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Derecho de voto del tenedor.</strong>',
            'article_id' => '124'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Acciones parcialmente pagadas.</strong>',
            'article_id' => '125'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Indivisibilidad de las acciones.</strong>',
            'article_id' => '126'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Contenido de los títulos.</strong>',
            'article_id' => '127'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Las acciones no pueden emitirce al portador segun el articulo 71 del Decreto 55-2010 del Congreso de la República.</strong><br>
            <strong>Artículo 71.</strong> Se reforma el artículo 108, Acciones Nominativas y al Portador, del Código de Comercio de Guatemala, Decreto Número 2-70 del Congreso de la República, el cual queda así:<br>
            "<strong>Articulo 108.</strong> Acciones. Las acciones deberán ser nominativas. Las sociedades anónimas constituidas antes de la vigencia de la Ley de Extinción de Dominio, cuyo pacto social les faculte a emitir acciones al portador y tengan pendiente la emisión de acciones, deberán realizarla únicamente con acciones nominativas."',
            'article_id' => '128'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> <strong>Transferencia de acciones no pagadas.</strong>',
            'article_id' => '129'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Reglas para la amortización de acciones.</strong>',
            'article_id' => '130'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Otros titulos que puede emitir la sociedad anonima.</strong><br>
            <ol>
                <li><strong>Certificados de goce. (este artículo)</strong></li>
                <li>Cupones de las acciones. <a href="#codeCommercial" data-search="Artículo 121" class="linkGoCommercial">Artículo 121</a></li>
            </ol>',
            'article_id' => '131'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Otros titulos que puede emitir la sociedad anonima.</strong><br>
            <ol>
                <li>Certificados de goce. <a href="#codeCommercial" data-search="Artículo 113" class="linkGoCommercial">Artículo 113</a></li>
                <li><strong>Cupones de las acciones. (este artículo)</strong></li>
            </ol>',
            'article_id' => '132'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Registro de acciones normativas.</strong>',
            'article_id' => '133'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Suscripción de nuevas acciones.</strong><br>
            <span class="opNum">1.</span> Derecho preferente.<br>
            <span class="opNum">2.</span> Tiempo de ejecución del derecho.',
            'article_id' => '134'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Acciones nominativas.',
            'article_id' => '135'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Asamblea General.</strong>',
            'article_id' => '136'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Clases de asambleas.</strong>',
            'article_id' => '137'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Asambleas Ordinarias.',
            'article_id' => '138'
        ]);

        DB::table('comments')->insert([
            'description1' => '<span class="opNum">1.</span> Asambleas extraordinarias.',
            'article_id' => '139'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Procedimiento para la celebración de la asamblea.</strong><br>
            <ol>
                <li><strong>Requisitos de la convocatoria. (este artículo)</strong></li>
                <li>Convocatoria de las asambleas. <a href="#codeCommercial" data-search="Artículo 140" class="linkGoCommercial">Artículo 140</a></li>
                <li>Lugar de la reunion. <a href="#codeCommercial" data-search="Artículo 143" class="linkGoCommercial">Artículo 143</a></li>
                <li>Agenda. <a href="#codeCommercial" data-search="Artículo 144" class="linkGoCommercial">Artículo 144</a></li>
                <li>Estados e informes de la vista. <a href="#codeCommercial" data-search="Artículo 145" class="linkGoCommercial">Artículo 145</a></li>
            </ol>',
            'article_id' => '140'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Procedimiento para la celebración de la asamblea.</strong><br>
            <ol>
                <li>Requisitos de la convocatoria. <a href="#codeCommercial" data-search="Artículo 138" class="linkGoCommercial">Artículo 138</a></li>
                <li><strong>Convocatoria de las asambleas. (este artículo)</strong></li>
                <li>Lugar de la reunion. <a href="#codeCommercial" data-search="Artículo 143" class="linkGoCommercial">Artículo 143</a></li>
                <li>Agenda. <a href="#codeCommercial" data-search="Artículo 144" class="linkGoCommercial">Artículo 144</a></li>
                <li>Estados e informes de la vista. <a href="#codeCommercial" data-search="Artículo 145" class="linkGoCommercial">Artículo 145</a></li>
            </ol>',
            'article_id' => '141'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Procedimiento para la celebración de la asamblea.</strong><br>
            <ol>
                <li>Requisitos de la convocatoria. <a href="#codeCommercial" data-search="Artículo 138" class="linkGoCommercial">Artículo 138</a></li>
                <li>Convocatoria de las asambleas. <a href="#codeCommercial" data-search="Artículo 140" class="linkGoCommercial">Artículo 140</a></li>
                <li><strong>Lugar de la reunion. (este artículo)</strong></li>
                <li>Agenda. <a href="#codeCommercial" data-search="Artículo 144" class="linkGoCommercial">Artículo 144</a></li>
                <li>Estados e informes de la vista. <a href="#codeCommercial" data-search="Artículo 145" class="linkGoCommercial">Artículo 145</a></li>
            </ol>',
            'article_id' => '142'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Procedimiento para la celebración de la asamblea.</strong><br>
            <ol>
                <li>Requisitos de la convocatoria. <a href="#codeCommercial" data-search="Artículo 138" class="linkGoCommercial">Artículo 138</a></li>
                <li>Convocatoria de las asambleas. <a href="#codeCommercial" data-search="Artículo 140" class="linkGoCommercial">Artículo 140</a></li>
                <li>Lugar de la reunion. <a href="#codeCommercial" data-search="Artículo 143" class="linkGoCommercial">Artículo 143</a></li>
                <li><strong>Agenda. (este artículo)</strong></li>
                <li>Estados e informes de la vista. <a href="#codeCommercial" data-search="Artículo 145" class="linkGoCommercial">Artículo 145</a></li>
            </ol>',
            'article_id' => '143'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Procedimiento para la celebración de la asamblea.</strong><br>
            <ol>
                <li>Requisitos de la convocatoria. <a href="#codeCommercial" data-search="Artículo 138" class="linkGoCommercial">Artículo 138</a></li>
                <li>Convocatoria de las asambleas. <a href="#codeCommercial" data-search="Artículo 140" class="linkGoCommercial">Artículo 140</a></li>
                <li>Lugar de la reunion. <a href="#codeCommercial" data-search="Artículo 143" class="linkGoCommercial">Artículo 143</a></li>
                <li>Agenda. <a href="#codeCommercial" data-search="Artículo 144" class="linkGoCommercial">Artículo 144</a></li>
                <li><strong>Estados e informes de la vista. (este artículo)</strong></li>
            </ol>',
            'article_id' => '144'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Quórum: </strong>es el minimo de acciones con derecho a voto que se requieren para iniciar una asamblea o bien para tomar una desición dentro de la misma los cuales son de presencia y votación.',
            'article_id' => '145'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Administración.</strong>',
            'article_id' => '146'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Facultades de los Administradores.</strong>',
            'article_id' => '147'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Quiénes fiscalizan.</strong>',
            'article_id' => '148'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Designacíon.</strong>',
            'article_id' => '149'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Sociedad en comandita por acciones.</strong>',
            'article_id' => '150'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Régimen de la sociedad en comandita por acciones.</strong>',
            'article_id' => '151'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Razón social de la sociedad en comandita por acciones.</strong>',
            'article_id' => '152'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Organos de la sociedad en comandita por acciones.</strong><br>
            <ol>
                <li><strong>Organo de soberania:</strong> Es la asamblea general la cual se rige por las normas de la asamblea de la sociedad anonima.</li>
                <li><strong>Organo de administración. (este artículo)</strong></li>
                <li>Organo de fiscalizacíon. <a href="#codeCommercial" data-search="Artículo 199" class="linkGoCommercial">Artículo 199</a></li>
            </ol>',
            'article_id' => '153'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Organos de la sociedad en comandita por acciones.</strong><br>
            <ol>
                <li><strong>Organo de soberania:</strong> Es la asamblea general la cual se rige por las normas de la asamblea de la sociedad anonima.</li>
                <li>Organo de administración. <a href="#codeCommercial" data-search="Artículo 198" class="linkGoCommercial">Artículo 198</a></li>
                <li><strong>Organo de fiscalizacíon. (este artículo)</strong></li>
            </ol>',
            'article_id' => '154'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Prohibición de votar.</strong>',
            'article_id' => '155'
        ]);
    }
}
