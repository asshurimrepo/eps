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
			$table->integer('patient_id');
			$table->integer('medication_id');
			$table->integer('qty_per_unit');
			$table->string('unit');
			$table->integer('qty_per_time_format');
			$table->string('time_format');
			$table->text('other_instructions');
			$table->integer('duration_qty');
			$table->string('duration_time_format');
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
