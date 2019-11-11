<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\Healthinsurance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHealthinsurance;
use App\Http\Requests\UpdateHealthinsurance;


class HealthinsurancesController extends Controller
{

    public function index()
    {
        $obrassociales = Healthinsurance::paginate(10);
        return view('admin.obrassociales.index', compact('obrassociales'));
    }

    public function create()
    {
        return view('admin.obrassociales.create');
    }

    public function store(StoreHealthinsurance $request)
    {
        $validated = $request->validated();

        $obrasocial = Healthinsurance::create($request->all());
        return redirect()->route('obrassociales.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $obrasocial = Healthinsurance::find($id);
        return view('admin.obrassociales.edit', compact('obrasocial'));
    }

    public function update(UpdateHealthinsurance $request, $id)
    {
        $validated = $request->validated();
        $obrasocial = Healthinsurance::find($id);
        $obrasocial->update($request->all());
        return redirect()->route('obrassociales.index');
    }

    public function destroy($id)
    {
        $obrasocial = Healthinsurance::find($id);
        $obrasocial->delete();
        return redirect()->route('obrassociales.index');
    }
}
