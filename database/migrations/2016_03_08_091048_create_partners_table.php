<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partners', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('mobile');
			$table->string('email');
			$table->string('occupation');
			$table->string('city');
			$table->string('state');
			$table->string('qualification');
			$table->string('know');
			$table->string('business');
			$table->string('experience');
			$table->string('reason');
			$table->string('question');	
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
		Schema::drop('partners');
	}

}
