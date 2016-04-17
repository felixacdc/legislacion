<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
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
            $table->integer('article_id')->unsigned();
            $table->timestamps();

            $table->foreign('article_id')
                  ->references('id')
                  ->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
