<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prescriptions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('medicine_id');
			$table->double('dosage');
			$table->enum('measure', ['mL', 'l', 'mg', 'g']);
			$table->enum('form', ['tablet', 'syrup', 'capsule']);
			$table->string('frequency');
			$table->date('start_date');
			$table->date('end_date');
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
		Schema::drop('prescriptions');
	}

}
