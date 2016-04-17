<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->nullable();
            $table->string('name')->nullable();
            $table->mediumText('description1')->nullable();
            $table->mediumText('description2')->nullable();
            $table->mediumText('description3')->nullable();
            $table->mediumText('description4')->nullable();
            $table->mediumText('description5')->nullable();
            $table->mediumText('description6')->nullable();
            $table->mediumText('description7')->nullable();
            $table->mediumText('description8')->nullable();
            $table->mediumText('description9')->nullable();
            $table->mediumText('description10')->nullable();
            $table->integer('code_id')->unsigned();
            $table->timestamps();

            $table->foreign('code_id')
                  ->references('id')
                  ->on('codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
