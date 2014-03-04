<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('patient', function(Blueprint $table) {
            $table->increments('id');
			$table->string('firstname');
			$table->string('middlename');
			$table->string('lastname');
			$table->string('age');
			$table->string('birthdate');
			$table->string('gender');
			$table->timestamps('');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('patient');
	}

}
