<?php

namespace App\Http\Controllers\Backend\Modulo;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Modulo;
use Illuminate\Http\Request;

/**
 * Class DashboardController.
 */
class ModuloController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $modulos = Modulo::all();

        return view('backend.modulo.index', compact('modulos'));
    }


    public function edit($id)
    {
        $modulo = Modulo::where('id', $id)->firstOrFail();


        return view('backend.modulo.edit', compact('modulo'));
    }

    public function create()
    {


        return view('backend.modulo.create');
    }


    public function store(Request $request)
    {
        $modulo = Modulo::create($request->except('_method','_token'));

        return redirect()->route('admin.modulo.edit', $modulo->id)->withFlashSuccess(__('Módulo Criado com Sucesso!'));
    }


    public function update(Request $request, $id)
    {
        $modulo = Modulo::where('id', $id)->firstOrFail();

        $modulo->update($request->except('_method','_token'));

        return redirect()->route('admin.modulo.edit', $modulo->id)->withFlashSuccess(__('Módulo Atualizado com Sucesso!'));
    }

    public function campos(Request $request)
    {

        dd($request);



    }

}
