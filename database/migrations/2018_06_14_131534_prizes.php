<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prizes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
          $table->increments('id');
            $table->string('user_id');
            $table->string('prize');
			 $table->int('point');
			 $table->timestamps();
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
