<?php 

namespace App\Core\Repositories;
use App\Core\Entities\CandidatoCongresoRenuncia;

class CandidatoCongresoRenunciaRepo {

	public function getCandidatoCongresoRenuncias()
	{
	    return CandidatoCongresoRenuncia::select('*')
            ->get();
	}
}
?>