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
            <span class="opNum">6.</span> Sexto principio: Principio de la Autonomia de la Voluntad Civil (El principio de imperatividad limita al principio de la Autonomia de la Voluntad Civil)',
            'description3' => '<span class="opNum">7.</span> Septimo principio: Principio realista<br>
            <span class="opNum">8.</span> Octabo principio: Principio objetivo<br>
            <span class="opNum">9.</span> Noveno principio: Principio de la naturaleza juridica',
            'description4' => '<span class="opNum">10.</span> Decimo principio: Derecho ondeamente democratico<br>
            <span class="opNum">11.</span> Onceabo Principio: Principio de conciliación (Agregado)<br>
            <span class="opNum">12.</span> Doceabo Principio: IN DUBIO PRO OPERARIO Articulo 17 Codigo de trabajo <a href="#codeWork" data-search="Artículo 17" class="linkGo">Ir a Artículo 17.</a>',
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
                <li>Cargos de direccion <a href="#codeWork" data-search="Artículo 315" class="linkGo">Ir a Artículo 315</a></li>
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
                <li>Cargos de direccion <a href="#codeWork" data-search="Artículo 315" class="linkGo">Ir a Artículo 315</a></li>
                <li><span class="opNum">1.</span> Intermediario</li></ul>
            </ol>',
            'article_id' => '3'
        ]);

        DB::table('comments')->insert([
            'description1' => '<strong>Elementos personales del trabajo:</strong><br>
            <ol>
            <li>Patrono</li>
            <li>Trabajador</li>
            <li>Auxiliares del patrono: <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <ul><li>Representante del patrono <a href="#codeWork" data-search="Artículo 4" class="linkGo">Ir a Artículo 4.</a></li>
                <li>Empleados de confianza</li>
                <li><span class="opNum">1.</span> Cargos de direccion</li>
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
                <li>Cargos de direccion</li>
                <li>Intermediario <a href="#codeWork" data-search="Artículo 5" class="linkGo">Ir a Artículo 5.</a></li></ul>
            </ol>',
            'article_id' => '22'
        ]);
    }
}
