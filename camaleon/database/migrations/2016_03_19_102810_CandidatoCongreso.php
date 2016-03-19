<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CandidatoCongreso extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('CandidatoCongreso', function(Blueprint $table)
		{

			$table->increments('ID');
			$table->string('PROCESO_ELECTORAL');
			$table->string('NOMBRE_CANDIDATO');
			$table->string('APELLIDO_PATERNO');
			$table->string('APELLIDO_MATERNO');
			$table->string('NOMBRE_COMPLETO');
			$table->string('SEXO');
			$table->string('CARGO_ELEGIDO');
			$table->string('LUGAR_POSTULA');
			$table->string('ORGANIZACION_POLITICA');
			$table->string('ALIAS');

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CandidatoCongreso');
	}
}
