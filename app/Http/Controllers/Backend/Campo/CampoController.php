<?php

namespace App\Http\Controllers\Backend\Campo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Campos\Campo;

class CampoController extends Controller
{
    //


    public function store(Request $request){

        $dados = $request->except('_token','id');
        $dados['modulo_id'] = $request->foreign_key;

        $retorno = Campo::create($dados);

        return $retorno;

    }

    public function update(Request $request, $id){

        $dados = $request->except('_token','id','foreign_key');
        $result = Campo::where('id',$id)->update($dados);

        if($result){

            $campos = Campo::where('id',$id)->first();
        }

        return $campos;

    }



    public function edit_campos($id){

        $campos = Campo::where('id',$id)->first();


        return $campos;

    }


    public function lista_campos($modulo_id){

        $campos = Campo::where('modulo_id',$modulo_id)->get();


        return $campos;

    }



}
