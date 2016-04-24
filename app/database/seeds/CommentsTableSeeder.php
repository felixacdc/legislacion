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
            <span class="opNum">12.</span> Doceabo Principio: IN DUBIO PRO OPERARIO Articulo 17 Codigo de trabajo <a href="#codeWork" data-search="Artículo 17" class="linkGo">Ir a Articulo 17.</a>',
            'article_id' => '1'
        ]);
    }
}
