<?php

namespace App\Http\Controllers\Admin;

use App\Pension;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePension;
use App\Http\Requests\UpdatePension;
use Illuminate\Support\Facades\Validator;

class PensionsController extends Controller
{
    public function index()
    {
        $pensiones = Pension::all();
        return view('admin.pensiones.index', compact('pensiones'));
    }

    public function create()
    {
        return view('admin.pensiones.create');
    }

    public function store(StorePension $request)
    {
        $validated = $request->validated();
        $pension = Pension::create($request->all());
        return redirect()->route('pensiones.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pension = Pension::find($id);
        return view('admin.pensiones.edit', compact('pension'));
    }

    public function update(UpdatePension $request, $id)
    {

        $validated = $request->validated();

        $pension = Pension::find($id);
        $pension->update($request->all());
        return redirect()->route('pensiones.index');
    }

    public function buscar(Request $request)
    {
        $pensiones = Pension::where('pension', 'like', '%' . $request->buscar . '%')->get();
        return view('admin.pensiones.index', compact('pensiones'));
    }

    public function destroy($id)
    {
        $pension = Pension::find($id);
        $pension->delete();

        return redirect()->route('pensiones.index');
    }

    public function buscar(Request $request)
    {
        $pensiones = Pension::where('pension', 'like', '%' . $request->buscar . '%')->get();
        return view('admin.pensiones.index', compact('pensiones'));
    }
}
