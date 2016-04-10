<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string ('subdiv_name'); 
			$table->string ('cat_name');
			$table->string ('workshop_date');
			$table->string ('full name');
			$table->string ('branch');
			$table->integer ('semester');
			$table->string ('college_name');
			$table->string ('city_name');
			$table->string ('email');
			$table->string('mobile_number');
			$table->string ('state');
			$table->string ('know_us');
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
		Schema::drop('registers');
	}

}
