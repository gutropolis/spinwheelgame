<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Throttle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('throttle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
			 $table->string('ip');
			 $table->string('user_id');
              $table->timestamps();
		 });
			  
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
