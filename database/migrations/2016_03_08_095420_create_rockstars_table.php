<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRockstarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rockstars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			
			$table->string('email');
			$table->string('mobile');
			
			$table->string('branch');
			$table->string('college');
			
			
			
			$table->string('city');
			$table->string('want');
			$table->string('chosen');
			$table->string('strength');
			$table->string('address');
			$table->string('dob');
			$table->string('resume');			
			$table->string('comment');
			
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
		Schema::drop('rockstars');
	}

}
