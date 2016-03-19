<?php 

namespace App\Core\Repositories;
use App\Core\Entities\CandidatoPresidencial;

class CandidatoPresidencialRepo {

	public function getCandidatoPresidencials()
	{
	    return CandidatoPresidencial::select('*')
            ->get();
	}
}
?>