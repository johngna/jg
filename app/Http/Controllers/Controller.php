<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\Clientes\Cliente;
use App\Models\Modulos\Modulo;
use Illuminate\Http\Request;

/**
 * Class Controller.
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $modelo = '';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $modelo =  new $this->modelo;
        $dados = $this->modelo::all();

        return view('backend.grid.index', compact('modelo','dados'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $modelo =  new $this->modelo;

        return view('backend.grid.create', compact('modelo','dados'));

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

        $dados = $this->modelo::create($request->all());

        return redirect()->route('admin.'. $dados->getTable() .'.index');

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
        $modelo =  new $this->modelo;
        $dados = $this->modelo::find($id);

        return view('backend.grid.edit', compact('modelo','dados'));


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

        $modelo =  new $this->modelo;
        $dados = $this->modelo::find($id);
        $dados->update($request->all());

        return redirect()->route('admin.'. $modelo->getTable().'.edit', $id)->withFlashSuccess(__('  Registro Atualizado com Sucesso!'));


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

        $dados = $this->modelo::find($id);

        $dados->delete();

        return redirect()->route('admin.'. $dados->getTable() .'.index')->withFlashDanger(__('  Registro Excluído com Sucesso!'));

    }



}
