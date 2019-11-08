<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Admin;

use App\Tutor;
use App\Pension;
use App\Location;
use App\Residence;
use App\Schooling;
use App\Treatment;
use App\Pathologie;
use App\Registered;
use App\Healthinsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RegisteredsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registereds = Registered::all();


        return view('admin.censo.listarcensado', compact('registereds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $localidades = Location::all();

        $schoolings = Schooling::all();

        $healthinsurances = Healthinsurance::all();

        $pensions = Pension::all();

        $pathologies = Pathologie::all();

        $treatments = Treatment::all();

        $residences = Residence::all();

        return view('admin.censo.crearcensado', compact('localidades', 'schoolings', 'healthinsurances', 'pensions', 'pathologies', 'treatments', 'residences'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $ultimo = Censado::last();
        // $numero = $ultimo->numero;
        // $numero++;

        $censado = new Registered();

        $censado->nombre = $request->nombre;
        $censado->apellido = $request->apellido;
        $censado->dni = $request->dni;
        $censado->fechanacimiento = $request->fechanacimiento;
        $censado->sexo = $request->sexo;
        $censado->estadocivil = $request->estadocivil;
        $censado->ocupacion = $request->ocupacion;
        $censado->localidad_id = $request->localidad_id;
        $censado->situacionresidencial_id = $request->situacionresidencial_id;
        $censado->direccion = $request->direccion;
        $censado->entornofamiliar = $request->entornofamiliar;
        $censado->telefono = $request->telefono;
        $censado->formacionescolar = $request->formacionescolar;



        $censado->numerocertificadod = $request->numerocertificadod;
        $censado->fechaemision = $request->fechaemision;
        $censado->fechavencimiento = $request->fechavencimiento;
        $censado->entidadcertificado = $request->entidadcertificado;
        $censado->obrasocial_id = $request->obrasocial_id;
        $censado->observacion = $request->observacion;
        $censado->numerolegajo = 'CE01';


        $censado->save();

        //ver attach institucioneucativa
        $censado->schoolings()->attach($request->institucioneducativa_id);

        //ver pension
        $censado->pensions()->attach($request->pension);

        //ver patologia
        $censado->pathologies()->attach($request->patologia);

        //tratamiento
        $censado->treatments()->attach($request->tratamiento);

        toastr()->success('Se ha registrado correctamente el censado');


        return redirect()->route('censado.show', $censado->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registered = Registered::find($id);

        $tutors = Registered::with('tutors')->find($id); //manda solo los tutores de ese censado

        $totaltutors = Tutor::all();

        $filtro = [];

        foreach ($tutors->tutors as $tutor) {
            array_push($filtro, $tutor->id);
        }

        $tutores = $totaltutors->diff(Tutor::whereIn('id', $filtro)->get());

        $localidades = Location::all();

        $healthinsurances = Healthinsurance::all();

        return view('admin.censo.vercensado', compact('registered', 'tutors', 'localidades', 'healthinsurances', 'totaltutors', 'tutores'));
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

        $censado = Registered::find($id);

        $tutor = $censado->tutors;

        //recorrer tutor del censado y eliminarlo
        foreach ($tutor as $tut) {
            $censado->tutors()->detach($tut->id);
        }

        //recorrer y eliminar patologias de censado
        $registered = $censado->pathologies;
        foreach ($registered as $item) {
            $censado->pathologies()->detach($item->id);
        }

        //recorrer y eliminar tratamientos de censado
        $registered = $censado->treatments;
        foreach ($registered as $item) {
            $censado->treatments()->detach($item->id);
        }

        //recorrer y eliminar pensiones de censado
        $registered = $censado->pensions;
        foreach ($registered as $item) {
            $censado->pensions()->detach($item->id);
        }

        //recorrer y eliminar escuelas de censado
        $registered = $censado->schoolings;
        foreach ($registered as $item) {
            $censado->schoolings()->detach($item->id);
        }

        $censado->delete();

        toastr()->success('Se ha eliminado el censado correctamente');

        return back();
    }
}
