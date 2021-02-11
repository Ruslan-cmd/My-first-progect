<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Assignment;
use Illuminate\Support\Facades\Schema;
class AssignmentsTable extends Migration
{

    public function up()
    {
        Schema::create('assignments', function (Blueprint $table){

          $table -> bigIncrements('id');
          $table ->text('body');
          $table ->timestamps();
          $table ->timestamp('due_date')->nullable();
          $table -> boolean('completed')->default(false);
        });
    }


    public function down()
    {
        //Schema::dropIfExist('assignments');
    }
}
