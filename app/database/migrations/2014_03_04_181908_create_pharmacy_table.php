<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePharmacyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('pharmacy', function(Blueprint $table) {
            $table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->string('name');
			$table->string('location');
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
	    Schema::drop('pharmacy');
	}

}
