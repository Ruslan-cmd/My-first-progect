<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticlesTable extends Migration
{

    public function up()
    {
        Schema::create('articles', function (Blueprint $table){

            $table -> bigIncrements('id');
            $table ->string('title');
            $table ->text('excerpt');
            $table ->text('body');
            $table ->timestamps();
        });
    }


    public function down()

    {

    }
}