<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Admin;

use App\Tutor;
use App\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TutorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tutor = new Tutor();

        $tutor->apellido = $request->apellido;
        $tutor->nombre = $request->nombre;
        $tutor->dni = $request->dni;
        $tutor->sexo = $request->sexo;
        $tutor->fechanacimiento = $request->fechanacimiento;
        $tutor->localidad_id = $request->localidad_id;
        $tutor->direccion = $request->direccion;
        $tutor->telefono = $request->telefono;
        $tutor->email = $request->email;
        $tutor->estadocivil = $request->estadocivil;
        $tutor->ocupacion = $request->ocupacion;
        $tutor->relacionconcensado = $request->relacionconcensado;
        $tutor->obrasocial_id = $request->obrasocial_id;
        $tutor->observacion = $request->observacion;
        $tutor->save();

        $tutor->registereds()->attach($request->registered_id);

        return back();
    }

    public function asignarTutorACensado(Request $request)
    {
        $censado = Registered::find($request->registered_id);

        $censado->tutors()->attach($request->tutor_id);

        toastr()->success('Se ha asignado correctamente el tutor', 'Éxito');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tutor, $censado)
    {
        $tutor = Tutor::find($tutor);

        return view('admin.censo.vertutor', compact('tutor', 'censado'));
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
        //ESTE METODO NO ESTA LISTO NI FUNCIONANDO
        $tutor = tutor::find($id);
        $censados = $tutor->registereds;

        foreach ($censados as $censado) {
            $tutor->registereds()->detach($censado->id);
        }

        // $tutor->delete();

        return back();
    }

    public function eliminarTutor($tutorid, $censadoid)
    {
        $censado = Registered::find($censadoid);

        $tutors = $censado->tutors;

        foreach ($tutors as $tutor) {
            if ($tutor->id == $tutorid) {
                $tutor->registereds()->detach($censado->id);
            }
        }

        toastr()->warning('Acaba de eliminar el tutor del censado', 'Alerta');

        return back();
    }
}
