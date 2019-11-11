<?php

namespace App\Http\Controllers\Admin;

use App\Location;
use App\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VolunteersController extends Controller
{

    public function index()
    {
        $voluntarios = Volunteer::all();
        return view('admin.voluntario.index', compact('voluntarios'));
    }


    public function create()
    {
        $localidades = Location::all();

        return view('admin.voluntario.crearvoluntario', compact('localidades'));
    }


    public function store(Request $request)
    {
        //$voluntario = Volunteer::create($request->all());

        $voluntario = new Volunteer();

        $voluntario->nombre = $request->nombre;
        $voluntario->apellido = $request->apellido;
        $voluntario->dni = $request->dni;
        $voluntario->fechanacimiento = $request->fechanacimiento;
        $voluntario->telefono = $request->telefono;
        $voluntario->email = $request->email;
        $voluntario->localidad_id = $request->localidad_id;
        $voluntario->direccion = $request->direccion;
        $voluntario->ocupacion = $request->ocupacion;
        $voluntario->tiempodisponible = $request->tiempodisponible;
        $voluntario->actividad = $request->actividad;
        $voluntario->numerolegajo = 'V01';
        $voluntario->save();

        return redirect()->route('voluntario.index');
    }


    public function show($id)
    {
        $voluntario = Volunteer::find($id);
        $localidades = Location::all();

        return view('admin.voluntario.vervoluntario', compact('voluntario', 'localidades'));
    }


    public function edit($id)
    {
        $voluntario = Volunteer::find($id);
        $localidades = Location::all();
        return view('admin.voluntario.editarvoluntario', compact('voluntario', 'localidades'));
    }


    public function update(Request $request, $id)
    {
        $voluntario = Volunteer::find($id);

        $voluntario->nombre = $request->nombre;
        $voluntario->apellido = $request->apellido;
        $voluntario->dni = $request->dni;
        $voluntario->fechanacimiento = $request->fechanacimiento;
        $voluntario->telefono = $request->telefono;
        $voluntario->email = $request->email;
        $voluntario->localidad_id = $request->localidad_id;
        $voluntario->direccion = $request->direccion;
        $voluntario->ocupacion = $request->ocupacion;
        $voluntario->tiempodisponible = $request->tiempodisponible;
        $voluntario->actividad = $request->actividad;
        $voluntario->numerolegajo = 'V01';
        $voluntario->update();

        return redirect()->route('voluntario.index');
    }

    public function destroy($id)
    {
        $voluntario = Volunteer::find($id);
        $voluntario->delete();
        return redirect()->route('voluntario.index');
    }
}
