<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CandidatoPresidencial extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('CandidatoPresidencial', function(Blueprint $table)
		{

			$table->increments('ID');
			$table->string('PROCESO_ELECTORAL');
			$table->string('ANIO');
			$table->string('ORGANIZACION_POLITICA');
			$table->string('TIPO_PARTIDO');
			$table->string('ALIAS');
			$table->string('CANDIDATO_PRESIDENCIAL');
			$table->string('PRIMER_VICEPRESIDENTE');
			$table->string('SEGUNDO_VICEPRESIDENTE');

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CandidatoPresidencial');
	}
}
