<?php 

namespace App\Core\Repositories;
use App\Core\Entities\CandidatoCongreso;

class CandidatoCongresoRepo {

	public function getCandidatoCongresos()
	{
	    return CandidatoCongreso::select('*')
            ->get();
	}
}
?>