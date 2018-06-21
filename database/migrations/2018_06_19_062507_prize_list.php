<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrizeList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
		  Schema::create('prizelist', function (Blueprint $table) {
          $table->increments('id');
            $table->string('prize_name');
            $table->string('description');
			 $table->string('points');
			 $table->string('created_by');
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
