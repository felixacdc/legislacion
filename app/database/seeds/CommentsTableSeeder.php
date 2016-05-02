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
            'description1' => '<strong>Elementos personales del trabajo:</strong><br>
            <ol>
            <li>Patrono</li>
            <li>Trabajador</li>
            <li>Auxiliares del patrono: <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <ul><li>Representante del patrono <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <li>Empleados de confianza</li>
                <li><span class="opNum">1.</span> Cargos de dirección</li>
                <li>Intermediario <a href="#codeWork" data-search="Artículo 5" class="linkGo">Ir a Artículo 5.</a></li></ul>
            </ol>',
            'article_id' => '21'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Elementos personales del trabajo:</strong><br>
            <ol>
            <li>Patrono</li>
            <li>Trabajador</li>
            <li>Auxiliares del patrono: <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <ul><li>Representante del patrono <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <li><span class="opNum">1.</span> Empleados de confianza</li>
                <li>Cargos de dirección</li>
                <li>Intermediario <a href="#codeWork" data-search="Artículo 5" class="linkGo">Ir a Artículo 5.</a></li></ul>
            </ol>',
            'article_id' => '22'
        ]);
    }
}
