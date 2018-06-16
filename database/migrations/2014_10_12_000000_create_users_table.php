<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
			$table->string('last_name');
			$table->string('address')->nullable();
			$table->string('gender')->nullable();
			$table->string('country')->nullable();
			$table->string('dob')->nullable();
			$table->string('phone')->nullable();
			$table->string('post_code')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->integer('permissions_id')->nullable();
            $table->tinyInteger('status');
            $table->string('connect_email')->nullable();
			$table->string('last_login')->nullable();
            $table->string('connect_password')->nullable();
            $table->rememberToken();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('users');
    }
}
