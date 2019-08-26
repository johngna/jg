<?php

namespace App\Http\Controllers\Backend\Clientes;

use App\Models\Clientes\Cliente;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{

    public $modelo = Cliente::class;


    public function index()
    {

        $clientes = Cliente::all();

        return view('backend.clientes.index', compact('clientes'));

    }

    public function create(){

        return view('backend.clientes.create');
    }


}
