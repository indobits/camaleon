<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Core\Repositories\CandidatoCongresoRepo;
use App\Core\Repositories\CandidatoCongresoRenunciaRepo;
use App\Core\Repositories\CandidatoPresidencialRepo;

class PortadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $CandidatoCongreso;
    protected $CandidatoCongresoRenuncia;
    protected $CandidatoPresidencial;
    public function __construct(CandidatoCongresoRepo $CandidatoCongresoRepo, CandidatoCongresoRenunciaRepo $CandidatoCongresoRenunciaRepo, CandidatoPresidencialRepo $CandidatoPresidencialRepo)
    {
        $this->CandidatoCongresoRepo = $CandidatoCongresoRepo;
        $this->CandidatoCongresoRenunciaRepo = $CandidatoCongresoRenunciaRepo;
        $this->CandidatoPresidencialRepo = $CandidatoPresidencialRepo;
    }
   

    
    public function index()
    {
        /*$carretes = \App\Core\Entities\Carrete::All();
        $campanas = \App\Core\Entities\Campana::orderBy('fecha_inicio', 'desc')->take(3)->get();

        $entrevistas = \App\Core\Entities\Entrevista::orderBy('fecha_entrevista', 'desc')->take(3)->get();

        return view('home', compact('carretes','campanas','entrevistas'));*/
        return view('home');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
