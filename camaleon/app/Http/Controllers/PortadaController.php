<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $candidatos = DB::table('candidatocongresorenuncia')
            ->select('nombre_completo', 'orgpolitica','imagen')
            ->where('anio_inicio', '<=', 1978)
            ->get();

        /*
            select nombre_completo
            from candidatocongresorenuncia
            where CARGO_AUTORIDAD = 'CONGRESISTA'
            group by nombre_completo
            having count(1)>=3;
        */
        $traicioneros =DB::table('candidatocongresorenuncia')
                ->select('orgpolitica','nombre_completo', DB::raw('count(1) as cant'))
                ->where('CARGO_AUTORIDAD','=','CONGRESISTA')
                ->groupBy('orgpolitica','nombre_completo')
                ->havingRaw('count(1) >= 3')
                ->orderBy(DB::raw('count(1)'),'desc')
                ->get();

       /*$traicioneros_detalle =DB::table('candidatocongresorenuncia')
            ->select('nombre_completo', 'nombre_periodo', DB::raw('(anio_final - anio_inicio) as cant'))
            ->whereExists(function ($query) {
                $query->select('nombre_completo')
                      ->from('candidatocongresorenuncia as tabla')
                      ->whereRaw('candidatocongresorenuncia.nombre_completo = tabla.nombre_completo')
                      ->where('cargo_autoridad','=','"CONGRESISTA"')
                      ->groupBy('orgpolitica','nombre_completo')
                      ->havingRaw('count(1) >= 3');
            })
            ->orderBy('anio_inicio', 'asc')
            ->get();*/

        /*
            #Camaleones con reeleccion
            select a.nombre_completo,count(1)
            from candidatocongreso a
            inner join (select distinct nombre_completo from candidatocongreso where PROCESO_ELECTORAL = 'ELECCIONES GENERALES 2016') b on
            b.NOMBRE_COMPLETO = a.NOMBRE_COMPLETO
            inner join (select nombre_completo from candidatocongresorenuncia where CARGO_AUTORIDAD = 'CONGRESISTA' group by nombre_completo having count(1)>=2) c on
            c.NOMBRE_COMPLETO = a.NOMBRE_COMPLETO
            where a.CARGO_ELEGIDO = 'CONGRESISTA'
            and a.PROCESO_ELECTORAL in('ELECCIONES GENERALES 2006','ELECCIONES GENERALES 2011')
            group by a.nombre_completo;
        */
        $a = 'ELECCIONES GENERALES 2016';
        $camaleonReelectos =DB::table('candidatocongreso')
                ->select('candidatocongreso.nombre_completo', DB::raw('count(1) as cant'))

                /*->join(DB::raw('(select distinct nombre_completo from candidatocongreso where PROCESO_ELECTORAL = ''' . $a . ''') a'), function($join)
                {
                        $join->on('a.nombre_completo', '=', 'candidatocongreso.nombre_completo');
                })*/
                ->join('vista1', 'vista1.nombre_completo', '=', 'candidatocongreso.nombre_completo')
                ->join('vista2', 'vista2.nombre_completo', '=', 'candidatocongreso.nombre_completo')

                //->where('CARGO_ELEGIDO','=','CONGRESISTA')
                //->wherein('PROCESO_ELECTORAL',['ELECCIONES GENERALES 2006','ELECCIONES GENERALES 2011'])
                ->where(function($query) {
                    $query->where('CARGO_ELEGIDO','=','CONGRESISTA')
                          ->wherein('PROCESO_ELECTORAL',['ELECCIONES GENERALES 2006','ELECCIONES GENERALES 2011']);
                })
                ->groupBy('candidatocongreso.nombre_completo')
                ->orderBy(DB::raw('count(1)'),'desc')
                ->get();

            /*
                #Mas fieles
                select nombre_completo,ALIAS,count(1)
                from candidatocongreso
                #where NOMBRE_COMPLETO = 'CLAUDE MAURICE MULDER BEDOYA'
                where alias is not null and alias not in('','0')
                group by nombre_completo,alias
                having count(1)=3;
            */

                $fieles =DB::table('candidatocongreso')
                ->select('nombre_completo','ALIAS', DB::raw('count(1) as cant'))
                ->where(function($query) {
                    $query->whereNotNull('alias')
                          ->wherenotin('alias',['','0']);
                })
                ->groupBy('nombre_completo','ALIAS')
                ->havingRaw('count(1) = 3')
                ->orderBy(DB::raw('count(1)'),'desc')
                ->get();



        return view('home', compact('candidatos','traicioneros','traicioneros_detalle','camaleonReelectos','fieles'));
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
