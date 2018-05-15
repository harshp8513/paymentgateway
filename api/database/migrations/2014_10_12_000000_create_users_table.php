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
            $table->string('name');
			$table->string('FirstName');
			$table->string('LastName');
			$table->string('BusinessName');
			$table->string('AddressLine1');
			$table->string('AddressLine2')->nullable()->default(null);
			$table->string('City');
			$table->integer('State');
			//$table->foreign('State')->references('id')->on('states');
			$table->string('ZipCode');
			$table->string('Phone');
			$table->integer('TypeOfBusiness');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
