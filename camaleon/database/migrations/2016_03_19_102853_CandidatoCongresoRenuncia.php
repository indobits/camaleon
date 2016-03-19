<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CandidatoCongresoRenuncia extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('CandidatoCongresoRenuncia', function(Blueprint $table)
		{

			$table->increments('ID');
			$table->string('ORGPOLITICA');
			$table->string('CARGO_AUTORIDAD');
			$table->string('NOMBRES');
			$table->string('APELLIDOS');
			$table->string('NOMBRE_COMPLETO');
			$table->string('ORG_POLITICA');
			$table->string('ANIO_INICIO');
			$table->string('ANIO_FINAL');
			
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::create('CandidatoCongresoRenuncia');
	}
}
